<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Throwable;

/**
 * Encryption configuration.
 *
 * These are the settings used for encryption, if you don't pass a parameter
 * array to the encrypter for creation/initialization.
 */
class Encryption extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Encryption Key Starter
     * --------------------------------------------------------------------------
     *
     * If you use the Encryption class you must set an encryption key (seed).
     * You need to ensure it is long enough for the cipher and mode you plan to use.
     * See the user guide for more info.
     */
    public string $key = 'openaudit';

    /**
     * --------------------------------------------------------------------------
     * Encryption Driver to Use
     * --------------------------------------------------------------------------
     *
     * One of the supported encryption drivers.
     *
     * Available drivers:
     * - OpenSSL
     * - Sodium
     */
    public string $driver = 'OpenSSL';

    /**
     * --------------------------------------------------------------------------
     * SodiumHandler's Padding Length in Bytes
     * --------------------------------------------------------------------------
     *
     * This is the number of bytes that will be padded to the plaintext message
     * before it is encrypted. This value should be greater than zero.
     *
     * See the user guide for more information on padding.
     */
    public int $blockSize = 16;

    /**
     * --------------------------------------------------------------------------
     * Encryption digest
     * --------------------------------------------------------------------------
     *
     * HMAC digest to use, e.g. 'SHA512' or 'SHA256'. Default value is 'SHA512'.
     */
    public string $digest = 'SHA512';

    /**
     * Whether the cipher-text should be raw. If set to false, then it will be base64 encoded.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to false for CI3 Encryption compatibility.
     */
    public bool $rawData = true;

    /**
     * Encryption key info.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to 'encryption' for CI3 Encryption compatibility.
     */
    public string $encryptKeyInfo = '';

    /**
     * Authentication key info.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to 'authentication' for CI3 Encryption compatibility.
     */
    public string $authKeyInfo = '';

    /**
     * Cipher to use.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to 'AES-128-CBC' to decrypt encrypted data that encrypted
     * by CI3 Encryption default configuration.
     */
    public string $cipher = 'AES-256-CTR';

    public function __construct()
    {
        $defaultKey = $this->key;

        try {
            if ($defaultKey === 'openaudit') {
                $database = Database::connect();
                $configTable = $database->table('configuration');
                $setting = $configTable->where('name', 'encryption_key')->get()->getRow();
                log_message('debug', 'Maybe generate encryption Key: ' . print_r($setting, true));

                // If the setting does not exist in the database, we must assume this is an
                // existing install, whereby changing the key now would break their system.
                // Store the existing value without hex2bin: prefix
                if (empty($setting) || empty($setting->id)) {
                    $database->table('configuration')
                        ->insert([
                            'name'        => 'encryption_key',
                            'value'       => 'openaudit',
                            'type'        => 'text',
                            'description' => 'Encryption Key',
                            'editable'    => 'n',
                            'edited_by'   => 'system',
                            'edited_date' => date('Y-m-d H:i:s'),
                        ]);
                }
                // If the setting value is an empty string, a temporary value defined in the
                // open-audit.sql file, which is imported upon a fresh installation.
                else if ($setting->value === '') {
                    log_message('info', 'Generating key, new installation');
                    $rawKey = \CodeIgniter\Encryption\Encryption::createKey();
                    $hexKey = 'hex2bin:' . bin2hex($rawKey);
                    $database->table('configuration')
                        ->where('id', $setting->id)
                        ->update([
                            'value'       => $hexKey,
                            'edited_date' => date('Y-m-d H:i:s'),
                        ]);
                    $this->key = $rawKey;
                } else {
                    log_message('debug', 'Loading generated key');
                    $this->key = $setting->value;
                }
            }
        } catch (Throwable $error) {
            log_message('error', 'Could not load dynamic encryption key: ' . $error->getMessage());
        }

        parent::__construct();
    }
}
