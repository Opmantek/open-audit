<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/*
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.1
* @link      http://www.open-audit.org
 */

# For PHP < 5.4.0 (ie, Centos 6)
if (!function_exists('hex2bin')) {
    function hex2bin($hexstr)
    {
        $count = 0;
        $length = strlen($hexstr);
        $binary = "";
        while($count < $length) {
            $extract = substr($hexstr, $count, 2);
            $packed = pack("H*", $extract);
            if ($count == 0) {
                $binary = $packed;
            } else {
                $binary .= $packed;
            }
            $count += 2;
        }
        return $binary;
    }
}

# Take a string and return the decrypted variant
if (! function_exists('simpleDecrypt')) {
    /**
     * Wrap crypto_aead_*_decrypt() in a drop-dead-simple decryption interface
     *
     * @link https://paragonie.com/b/kIqqEWlp3VUOpRD7
     * @param string $message - Encrypted message
     * @param string $key     - Encryption key
     * @return string
     * @throws Exception
     */
    function simpleDecrypt($message, $key = '')
    {
        $CI = & get_instance();
        set_include_path($CI->config->config['base_path'] . '/code_igniter/application/third_party/sodium_compat');
        require_once "autoload.php";
        if (empty($key)) {
            $key = mb_substr("00000000000000000000000000000000".$CI->config->config['encryption_key'], -32);
        }
        if (ctype_xdigit($message)) {
            $message = hex2bin($message);
        }
        if (empty($message)) {
            return '';
        }
        $nonce = mb_substr($message, 0, 24, '8bit');
        $ciphertext = mb_substr($message, 24, strlen($message), '8bit');
        $plaintext = '';
        try {
            $plaintext = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt(
                $ciphertext,
                $nonce,
                $nonce,
                $key
            );
        } catch (Exception $e) {
            //echo "<pre>\n";
            // print_r($e);
            // exit();
        }
        if (!is_string($plaintext)) {
            // throw new Exception('Invalid message');
        }
        return $plaintext;
    }
}

# Take a string and return the encrypted variant
if (! function_exists('simpleEncrypt')) {
    /**
     * Wrap crypto_aead_*_encrypt() in a drop-dead-simple encryption interface
     *
     * @link https://paragonie.com/b/kIqqEWlp3VUOpRD7
     * @param string $message
     * @param string $key
     * @return string
     */
    function simpleEncrypt($message, $key = '')
    {
        $CI = & get_instance();
        set_include_path($CI->config->config['base_path'] . '/code_igniter/application/third_party/sodium_compat');
        require_once "autoload.php";

        set_include_path($CI->config->config['base_path'] . '/code_igniter/application/third_party/random_compat');
        require_once "lib/random.php";

        if (empty($key)) {
            $CI = & get_instance();
            $key = mb_substr("00000000000000000000000000000000".$CI->config->config['encryption_key'], -32);
        }

        $nonce = random_bytes(24); // NONCE = Number to be used ONCE, for each message
        $encrypted = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt(
            $message,
            $nonce,
            $nonce,
            $key
        );
        return bin2hex($nonce . $encrypted);
    }
}


/* End of file security_helper.php */
/* Location: ./system/application/helpers/security_helper.php */
