<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

/**
 * Wrap crypto_aead_*_decrypt() in a drop-dead-simple decryption interface
 *
 * @param string $message Encrypted message
 * @param string $key     Encryption key
 * @return string         The decrypted string
 */
function simpleDecrypt(string $message = '', string $key = ''): string
{
    $key = $key === '' ? config('Encryption')->key : $key;

    if (empty($message) || empty($key)) {
        log_message('error', 'simpleDecrypt supplied empty message/key');
        return '';
    }

    if (mb_strlen($key, '8bit') !== 32) {
        // We cannot change this due to existing data in the wild.
        $key = mb_substr(str_repeat("0", 32) . $key, -32, null, '8bit');
        // Ideally should have been
        //$key = mb_substr(str_repeat("\0", 32) . $key, -32, null, '8bit');
    }

    $message = @hex2bin($message);
    if ($message === false || mb_strlen($message, '8bit') < 24) {
        log_message('error', 'simpleDecrypt could convert message to hex string');
        return '';
    }

    $nonce = mb_substr($message, 0, 24, '8bit');
    $ciphertext = mb_substr($message, 24, null, '8bit');

    try {
        $plaintext = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt(
            $ciphertext,
            $nonce,
            $nonce,
            $key
        );
    } catch (Exception $e) {
        log_message('error', 'simpleDecrypt error: ' . $e->getMessage());
        return '';
    }

    return is_string($plaintext) ? $plaintext : '';
}

/**
 * Take a string and return the encrypted variant
 *
 * @param string $message
 * @param string $key
 * @return string
 */
function simpleEncrypt(string $message = '', string $key = ''): string
{
    $key = $key === '' ? config('Encryption')->key : $key;

    if (empty($key)) {
        log_message('error', 'simpleEncrypt supplied empty key');
        return '';
    }

    if (mb_strlen($key, '8bit') !== 32) {
        // We cannot change this due to existing data in the wild.
        $key = mb_substr(str_repeat("0", 32) . $key, -32, null, '8bit');
        // Ideally should have been
        //$key = mb_substr(str_repeat("\0", 32) . $key, -32, null, '8bit');
    }

    try {
        $nonce = random_bytes(24);
        $encrypted = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt(
            $message,
            $nonce,
            $nonce,
            $key
        );
        return bin2hex($nonce . $encrypted);
    } catch (Exception $error) {
        log_message('error', 'simpleEncrypt error: ' . $error->getMessage());
        return '';
    }
}
