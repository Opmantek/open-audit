<?php
/**
 * CodeIgniter_Sniffs_Files_Utf8EncodingSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * CodeIgniter_Sniffs_Files_Utf8EncodingSniff.
 *
 * Ensures that PHP files are encoded with Unicode (UTF-8) encoding.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Files_Utf8EncodingSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_OPEN_TAG
        );

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // We are only interested if this is the first open tag.
        if ($stackPtr !== 0) {
            if ($phpcsFile->findPrevious(T_OPEN_TAG, ($stackPtr - 1)) !== false) {
                return;
            }
        }

        $file_path = $phpcsFile->getFilename();
        $file_name = basename($file_path);
        $file_content = file_get_contents($file_path);
        if (false === mb_check_encoding($file_content, 'UTF-8')) {
            $error = 'File "' . $file_name . '" should be saved with Unicode (UTF-8) encoding.';
            $phpcsFile->addError($error, 0);
        }
        if ( ! self::_checkUtf8W3c($file_content)) {
            $error = 'File "' . $file_name . '" should be saved with Unicode (UTF-8) encoding, but it did not successfully pass the W3C test.';
            $phpcsFile->addError($error, 0);
        }
        if ( ! self::_checkUtf8Rfc3629($file_content)) {
            $error = 'File "' . $file_name . '" should be saved with Unicode (UTF-8) encoding, but it did not meet RFC3629 requirements.';
            $phpcsFile->addError($error, 0);
        }
    }//end process()


    /**
     * Checks that the string $content contains only valid UTF-8 chars
     * using W3C's method.
     * Returns true if $content contains only UTF-8 chars, false otherwise.
     *
     * @param string $content String to check.
     *
     * @return bool true if $content contains only UTF-8 chars, false otherwise.
     *
     * @see http://w3.org/International/questions/qa-forms-utf-8.html
     */
    private static function _checkUtf8W3c($content)
    {
        $content_chunks=self::mb_chunk_split($content, 4096, '');
    	foreach($content_chunks as $content_chunk)
		{
			$preg_result= preg_match(
            '%^(?:
                  [\x09\x0A\x0D\x20-\x7E]            # ASCII
                | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
                |  \xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs
                | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
                |  \xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates
                |  \xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3
                | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
                |  \xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16
            )*$%xs',
            $content_chunk
			);
			if($preg_result!==1)
			{
				return false;
			}

		}
		return true;
    }//end _checkUtf8W3c()

    /**
     * Checks that the string $content contains only valid UTF-8 chars
     * using the method described in RFC 3629.
     * Returns true if $content contains only UTF-8 chars, false otherwise.
     *
     * @param string $content String to check.
     *
     * @return bool true if $content contains only UTF-8 chars, false otherwise.
     *
     * @see http://www.php.net/manual/en/function.mb-detect-encoding.php#85294
     */
    private static function _checkUtf8Rfc3629($content)
    {
        $len = strlen($content);
        for ($i = 0; $i < $len; $i++) {
            $c = ord($content[$i]);
            if ($c > 128) {
                if (($c >= 254)) {
                    return false;
                } elseif ($c >= 252) {
                    $bits=6;
                } elseif ($c >= 248) {
                    $bits=5;
                } elseif ($c >= 240) {
                    $bytes = 4;
                } elseif ($c >= 224) {
                    $bytes = 3;
                } elseif ($c >= 192) {
                    $bytes = 2;
                } else {
                    return false;
                } if (($i + $bytes) > $len) {
                    return false;
                } while ($bytes > 1) {
                    $i++;
                    $b = ord($content[$i]);
                    if ($b < 128 || $b > 191) {
                        return false;
                    }
                    $bytes--;
                }
            }
        }
        return true;
    }//_checkUtf8Rfc3629()
	 
	 /**
     * Splits a string to chunks of given size
	 * This helps to avoid segmentation fault errors when large text is given
     * Returns array of strings after splitting
     *
     * @param string $str String to split.
	 * @param int $len number of characters per chunk
     *
     * @return array string array after splitting
     *
     * @see http://php.net/manual/en/function.chunk-split.php
     */
	private static function mb_chunk_split($str, $len, $glue) 
	{
		if (empty($str)) return false;
		$array = self::mbStringToArray ($str);
		$n = -1;
		$new = Array();
		foreach ($array as $char) {
			$n++;
			if ($n < $len) $new []= $char;
			elseif ($n == $len) {
				$new []= $glue . $char;
				$n = 0;
			}
		}
		return $new;
	}//mb_chunk_split
	/**
     * Supporting function for mb_chunk_split
     *
     * @param string $str   
	 *
     * @return array 
     *
     * @see http://php.net/manual/en/function.chunk-split.php
     */
	private static function mbStringToArray ($str) 
	{
		if (empty($str)) return false;
		$len = mb_strlen($str);
		$array = array();
		for ($i = 0; $i < $len; $i++) {
			$array[] = mb_substr($str, $i, 1);
		}
		return $array;
	}

	

}//end class

?>
