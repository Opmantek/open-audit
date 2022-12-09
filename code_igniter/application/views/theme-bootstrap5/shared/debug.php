        <br />&nbsp;
        <div class="container-fluid" id="json_response" style="display:none;">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-dark" style="border:0px;" title="Advanced"><i class="fa fa-code" style="margin-right:10px;"></i><?php echo __('Debug') ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
<?php if (!empty($errors)) { ?>
                        <h3><?php echo __('Error'); ?></h3>
                        <pre><?php print_r(json_encode($errors, JSON_PRETTY_PRINT)); ?></pre>
<?php } ?>
                    <h3><?php echo __('User'); ?></h3>
                    <pre><?php print_r(json_encode($this->user, JSON_PRETTY_PRINT)); ?></pre>
                    <h3>Meta</h3>
                    <pre><?php print_r(json_encode($meta, JSON_PRETTY_PRINT)); ?></pre>
                    <?php if (!empty($logs)) { ?>
                    <h3>Logs</h3>
                    <pre><?php print_r($logs); ?></pre>
<?php } ?>
                    <h3><?php echo __('SQL Queries'); ?></h3>
                    <pre><?php
                        $CI =& get_instance();
                        $times = $CI->db->query_times;
                         foreach ($CI->db->queries as $key => $query) {
                             echo __('Query').": " . htmlentities(str_replace("\n", " ", $query)) . "\n";
                             echo __('Time').": " . $times[$key] . "\n\n";
                         }
                    ?>
                    </pre>
<?php if ($this->m_users->get_user_permission('', 'configuration', 'u')) { ?>
                    <h3><?php echo __('User Session Data'); ?></h3>
                    <pre><?php print_r($this->session->all_userdata()); ?>
                    </pre>
<?php } ?>
                </div>
            </div>
        </div>