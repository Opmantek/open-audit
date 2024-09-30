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
    if (empty($message) or empty($key)) {
        return '';
    }
    $key = mb_substr("00000000000000000000000000000000" . $key, -32);
    $message = hex2bin($message);
    $nonce = mb_substr($message, 0, 24, '8bit');
    $ciphertext = mb_substr($message, 24, strlen($message), '8bit');
    $plaintext = '';
    try {
        // Use the Sodium Compat library
        // $plaintext = sodium_crypto_aead_xchacha20poly1305_ietf_decrypt($ciphertext, $nonce, $nonce, $key);
        $plaintext = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_decrypt($ciphertext, $nonce, $nonce, $key);
    } catch (Exception $e) {
        log_message('error', 'simpleDecrypt error: ' . json_encode($e));
        return '';
    }
    return $plaintext;
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
    $key = mb_substr("00000000000000000000000000000000" . $key, -32);
    $nonce = random_bytes(24);
    // Use the Sodium Compat library
    // $encrypted = sodium_crypto_aead_xchacha20poly1305_ietf_encrypt($message, $nonce, $nonce, $key);
    $encrypted = ParagonIE_Sodium_Compat::crypto_aead_xchacha20poly1305_ietf_encrypt($message, $nonce, $nonce, $key);
    return bin2hex($nonce . $encrypted);
}
