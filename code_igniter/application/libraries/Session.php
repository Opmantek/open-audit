<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
    Native / Database hybrid
    Code Igniter
    Citrusmedia - Matthew Lymer
*/


class CI_Session
{
    var $sess_table_name            = '';
    var $sess_expiration            = 7200;
    var $sess_match_ip                = FALSE;
    var $sess_match_useragent        = TRUE;
    var $sess_time_to_update        = 300;
    var $encryption_key                = '';
    var $flashdata_key                 = 'flash';
    var $time_reference                = 'time';
    var $gc_probability                = 5;
    var $userdata                    = array();
    var $CI;
    var $now;

    /**
     * Session Constructor
     *
     * The constructor runs the session routines automatically
     * whenever the class is instantiated.
     */
    function CI_Session($params = array())
    {                
        log_message('debug', "Session Class Initialized");

        // Set the super object to a local variable for use throughout the class
        $this->CI =& get_instance();

        // Set all the session preferences, which can either be set
        // manually via the $params array above or via the config file
        foreach (array('sess_table_name', 'sess_expiration', 'sess_match_ip', 'sess_match_useragent', 'sess_time_to_update', 'time_reference', 'encryption_key') as $key)
        {
            $this->$key = (isset($params[$key])) ? $params[$key] : $this->CI->config->item($key);
        }

        // Sessions, start your engines!
        ini_set("session.gc_maxlifetime", $this->sess_expiration);
        session_start();
        
        // Load the string helper so we can use the strip_slashes() function
        $this->CI->load->helper('string');

        // Are we using a database?  If so, load it
        if( !$this->sess_table_name ) {
            die('Session class database table name not configured');
        }
        
        $this->CI->load->database();

        // Set the "now" time.  Can either be GMT or server time, based on the
        // config prefs.  We use this to set the "last activity" time
        $this->now = $this->_get_time();

        // Set the session length. If the session expiration is
        // set to zero we'll set the expiration two years from now.
        if ($this->sess_expiration == 0)
        {
            $this->sess_expiration = (60*60*24*365*2);
        }

        // Run the Session routine. If a session doesn't exist we'll
        // create a new one.  If it does, we'll update it.
        if ( ! $this->sess_read())
        {
            $this->sess_create();
        }
        else
        {
            $this->sess_update();
        }

        // Delete 'old' flashdata (from last request)
           $this->_flashdata_sweep();

        // Mark all new flashdata as old (data will be deleted before next request)
           $this->_flashdata_mark();

        // Delete expired sessions if necessary
        $this->_sess_gc();

        log_message('debug', "Session routines successfully run");
    }

    // --------------------------------------------------------------------

    /**
     * Fetch the current session data if it exists
     *
     * @access    public
     * @return    bool
     */
    function sess_read()
    {
        // Unserialize the session array
        // $session = $this->_unserialize($session);
        
        $session = array();
        
        foreach( array('session_id', 'ip_address', 'user_agent', 'last_activity') as $key )
        {
            if( !isset($_SESSION[$key]) ) {
                $this->sess_destroy();
                return FALSE;
            }
            
            $session[$key] = $_SESSION[$key];
        }    
            
        // Is the session current?
        if (($session['last_activity'] + $this->sess_expiration) < $this->now)
        {
            $this->sess_destroy();
            return FALSE;
        }

        // Does the IP Match?
        if ($this->sess_match_ip == TRUE AND $session['ip_address'] != $this->CI->input->ip_address())
        {
            $this->sess_destroy();
            return FALSE;
        }

        // Does the User Agent Match?
        if ($this->sess_match_useragent == TRUE AND trim($session['user_agent']) != trim(mb_substr($this->CI->input->user_agent(), 0, 50)))
        {
            $this->sess_destroy();
            return FALSE;
        }

        $this->CI->db->where('session_id', $session['session_id']);

        if ($this->sess_match_ip == TRUE)
        {
            $this->CI->db->where('ip_address', $session['ip_address']);
        }

        if ($this->sess_match_useragent == TRUE)
        {
            $this->CI->db->where('user_agent', $session['user_agent']);
        }

        $query = $this->CI->db->get($this->sess_table_name);

        // No result?  Kill it!
        if ($query->num_rows() == 0)
        {
            $this->sess_destroy();
            return FALSE;
        }

        // Is there custom data?  If so, add it to the main session array
        $row = $query->row();
        if (isset($row->user_data) AND $row->user_data != '')
        {
            $custom_data = $this->_unserialize($row->user_data);

            if (is_array($custom_data))
            {
                foreach ($custom_data as $key => $val)
                {
                    $session[$key] = $val;
                }
            }
        }

        // Session is valid!
        $this->userdata = $session;

        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Write the session data
     *
     * @access    public
     * @return    void
     */
    function sess_write()
    {
        // set the custom userdata, the session data we will set in a second
        $custom_userdata = $this->userdata;

        // Before continuing, we need to determine if there is any custom data to deal with.
        // Let's determine this by removing the default indexes to see if there's anything left in the array
        // and set the session data while we're at it
        foreach (array('session_id','ip_address','user_agent','last_activity') as $val)
        {
            unset($custom_userdata[$val]);
        }

        // Did we find any custom data?  If not, we turn the empty array into a string
        // since there's no reason to serialize and store an empty array in the DB
        if (count($custom_userdata) === 0)
        {
            $custom_userdata = '';
        }
        else
        {
            // Serialize the custom data array so we can store it
            $custom_userdata = $this->_serialize($custom_userdata);
        }

        // Run the update query
        $this->CI->db->where('session_id', $this->userdata['session_id']);
        $this->CI->db->update($this->sess_table_name, array('last_activity' => $this->userdata['last_activity'], 'user_data' => $custom_userdata));
    }

    // --------------------------------------------------------------------

    /**
     * Create a new session
     *
     * @access    public
     * @return    void
     */
    function sess_create()
    {
        $sessid = '';
        while (mb_strlen($sessid) < 32)
        {
            $sessid .= mt_rand(0, mt_getrandmax());
        }

        // To make the session ID even more secure we'll combine it with the user's IP
        $sessid .= $this->CI->input->ip_address();

        $this->userdata = array(
            'session_id'     => md5(uniqid($sessid, TRUE)),
            'ip_address'     => $this->CI->input->ip_address(),
            'user_agent'     => mb_substr($this->CI->input->user_agent(), 0, 50),
            'last_activity'    => $this->now
        );
        
        $_SESSION['session_id'] = $this->userdata['session_id'];
        $_SESSION['ip_address'] = $this->userdata['ip_address'];
        $_SESSION['user_agent'] = $this->userdata['user_agent'];
        $_SESSION['last_activity'] = $this->userdata['last_activity'];

        $this->CI->db->query($this->CI->db->insert_string($this->sess_table_name, $this->userdata));
    }

    // --------------------------------------------------------------------

    /**
     * Update an existing session
     *
     * @access    public
     * @return    void
     */
    function sess_update()
    {
        // We only update the session every five minutes by default
        if (($this->userdata['last_activity'] + $this->sess_time_to_update) >= $this->now)
        {
            return;
        }

        // Save the old session id so we know which record to
        // update in the database if we need it
        $old_sessid = $this->userdata['session_id'];
        $new_sessid = '';
        while (mb_strlen($new_sessid) < 32)
        {
            $new_sessid .= mt_rand(0, mt_getrandmax());
        }

        // To make the session ID even more secure we'll combine it with the user's IP
        $new_sessid .= $this->CI->input->ip_address();

        // Turn it into a hash
        $new_sessid = md5(uniqid($new_sessid, TRUE));

        // Update the session data in the session data array
        $_SESSION['session_id'] = $this->userdata['session_id'] = $new_sessid;
        $_SESSION['last_activity'] = $this->userdata['last_activity'] = $this->now;

        $this->CI->db->query($this->CI->db->update_string($this->sess_table_name, array('last_activity' => $this->now, 'session_id' => $new_sessid), array('session_id' => $old_sessid)));
    }

    // --------------------------------------------------------------------

    /**
     * Destroy the current session
     *
     * @access    public
     * @return    void
     */
    function sess_destroy()
    {
        // Kill the session DB row
        if( isset($this->userdata['session_id']) )
        {
            $this->CI->db->where('session_id', $this->userdata['session_id']);
            $this->CI->db->delete($this->sess_table_name);
        }
    }

    // --------------------------------------------------------------------

    /**
     * Fetch a specific item from the session array
     *
     * @access    public
     * @param    string
     * @return    string
     */
    function userdata($item)
    {
        return ( isset($this->userdata[$item]) ? $this->userdata[$item] : FALSE );
    }

    // --------------------------------------------------------------------

    /**
     * Fetch all session data
     *
     * @access    public
     * @return    mixed
     */
    function all_userdata()
    {
        return ( isset($this->userdata) ? $this->userdata : FALSE );
    }

    // --------------------------------------------------------------------

    /**
     * Add or change data in the "userdata" array
     *
     * @access    public
     * @param    mixed
     * @param    string
     * @return    void
     */
    function set_userdata($newdata = array(), $newval = '')
    {
        if (is_string($newdata))
        {
            $newdata = array($newdata => $newval);
        }

        if (count($newdata) > 0)
        {
            foreach ($newdata as $key => $val)
            {
                $this->userdata[$key] = $val;
            }
        }

        $this->sess_write();
    }

    // --------------------------------------------------------------------

    /**
     * Delete a session variable from the "userdata" array
     *
     * @access    array
     * @return    void
     */
    function unset_userdata($newdata = array())
    {
        if (is_string($newdata))
        {
            $newdata = array($newdata => '');
        }

        if (count($newdata) > 0)
        {
            foreach ($newdata as $key => $val)
            {
                unset($this->userdata[$key]);
            }
        }

        $this->sess_write();
    }

    // ------------------------------------------------------------------------

    /**
     * Add or change flashdata, only available
     * until the next request
     *
     * @access    public
     * @param    mixed
     * @param    string
     * @return    void
     */
    function set_flashdata($newdata = array(), $newval = '')
    {
        if (is_string($newdata))
        {
            $newdata = array($newdata => $newval);
        }

        if (count($newdata) > 0)
        {
            foreach ($newdata as $key => $val)
            {
                $flashdata_key = $this->flashdata_key.':new:'.$key;
                $this->set_userdata($flashdata_key, $val);
            }
        }
    }

    // ------------------------------------------------------------------------

    /**
     * Keeps existing flashdata available to next request.
     *
     * @access    public
     * @param    string
     * @return    void
     */
    function keep_flashdata($key)
    {
        // 'old' flashdata gets removed.  Here we mark all
        // flashdata as 'new' to preserve it from _flashdata_sweep()
        // Note the function will return FALSE if the $key
        // provided cannot be found
        $old_flashdata_key = $this->flashdata_key.':old:'.$key;
        $value = $this->userdata($old_flashdata_key);

        $new_flashdata_key = $this->flashdata_key.':new:'.$key;
        $this->set_userdata($new_flashdata_key, $value);
    }

    // ------------------------------------------------------------------------

    /**
     * Fetch a specific flashdata item from the session array
     *
     * @access    public
     * @param    string
     * @return    string
     */
    function flashdata($key)
    {
        $flashdata_key = $this->flashdata_key.':old:'.$key;
        return $this->userdata($flashdata_key);
    }

    // ------------------------------------------------------------------------

    /**
     * Identifies flashdata as 'old' for removal
     * when _flashdata_sweep() runs.
     *
     * @access    private
     * @return    void
     */
    function _flashdata_mark()
    {
        $userdata = $this->all_userdata();
        foreach ($userdata as $name => $value)
        {
            $parts = explode(':new:', $name);
            if (is_array($parts) && count($parts) === 2)
            {
                $new_name = $this->flashdata_key.':old:'.$parts[1];
                $this->set_userdata($new_name, $value);
                $this->unset_userdata($name);
            }
        }
    }

    // ------------------------------------------------------------------------

    /**
     * Removes all flashdata marked as 'old'
     *
     * @access    private
     * @return    void
     */

    function _flashdata_sweep()
    {
        $userdata = $this->all_userdata();
        foreach ($userdata as $key => $value)
        {
            if (mb_strpos($key, ':old:'))
            {
                $this->unset_userdata($key);
            }
        }

    }

    // --------------------------------------------------------------------

    /**
     * Get the "now" time
     *
     * @access    private
     * @return    string
     */
    function _get_time()
    {
        if (mb_strtolower($this->time_reference) == 'gmt')
        {
            $now = time();
            $time = mktime(gmdate("H", $now), gmdate("i", $now), gmdate("s", $now), gmdate("m", $now), gmdate("d", $now), gmdate("Y", $now));
        }
        else
        {
            $time = time();
        }

        return $time;
    }


    // --------------------------------------------------------------------

    /**
     * Serialize an array
     *
     * This function first converts any slashes found in the array to a temporary
     * marker, so when it gets unserialized the slashes will be preserved
     *
     * @access    private
     * @param    array
     * @return    string
     */
    function _serialize($data)
    {
        if (is_array($data))
        {
            foreach ($data as $key => $val)
            {
                $data[$key] = str_replace('\\', '{{slash}}', $val);
            }
        }
        else
        {
            $data = str_replace('\\', '{{slash}}', $data);
        }

        return serialize($data);
    }

    // --------------------------------------------------------------------

    /**
     * Unserialize
     *
     * This function unserializes a data string, then converts any
     * temporary slash markers back to actual slashes
     *
     * @access    private
     * @param    array
     * @return    string
     */
    function _unserialize($data)
    {
        $data = @unserialize(strip_slashes($data));

        if (is_array($data))
        {
            foreach ($data as $key => $val)
            {
                $data[$key] = str_replace('{{slash}}', '\\', $val);
            }

            return $data;
        }

        return str_replace('{{slash}}', '\\', $data);
    }

    // --------------------------------------------------------------------

    /**
     * Garbage collection
     *
     * This deletes expired session rows from database
     * if the probability percentage is met
     *
     * @access    public
     * @return    void
     */
    function _sess_gc()
    {
        srand(time());
        if ((rand() % 100) < $this->gc_probability)
        {
            $expire = $this->now - $this->sess_expiration;

            $this->CI->db->where("last_activity < {$expire}");
            $this->CI->db->delete($this->sess_table_name);

            log_message('debug', 'Session garbage collection performed.');
        }
    }


}
// END Session Class

/* End of file Session.php */
/* Location: ./system/application/libraries/Session.php */
