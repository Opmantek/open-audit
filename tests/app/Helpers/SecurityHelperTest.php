<?php

namespace App\Helpers;

use CodeIgniter\Test\CIUnitTestCase;

/**
 * Tests for the security_helper.php encryption/decryption functions.
 *
 * These functions are critical for protecting stored credentials.
 * A failure here would mean credentials cannot be properly encrypted/decrypted.
 */
class SecurityHelperTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        helper('security');
    }

    /**
     * Test that encrypt -> decrypt round-trip works correctly
     */
    public function testEncryptDecryptRoundTrip(): void
    {
        $key = 'my-secret-encryption-key-12345';
        $plaintext = 'sensitive-password-123';

        $encrypted = simpleEncrypt($plaintext, $key);
        $decrypted = simpleDecrypt($encrypted, $key);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test round-trip with JSON data (common use case for credentials)
     */
    public function testEncryptDecryptJsonCredentials(): void
    {
        $key = 'test-key-for-credentials';
        $credentials = json_encode([
            'username' => 'admin',
            'password' => 'super-secret-pass!@#$%',
            'community' => 'public'
        ]);

        $encrypted = simpleEncrypt($credentials, $key);
        $decrypted = simpleDecrypt($encrypted, $key);

        $this->assertSame($credentials, $decrypted);

        // Verify we can decode the JSON after decryption
        $decoded = json_decode($decrypted, true);
        $this->assertSame('admin', $decoded['username']);
        $this->assertSame('super-secret-pass!@#$%', $decoded['password']);
    }

    /**
     * Test that encrypted output is different from plaintext
     */
    public function testEncryptedOutputIsDifferent(): void
    {
        $key = 'encryption-key';
        $plaintext = 'my-password';

        $encrypted = simpleEncrypt($plaintext, $key);

        $this->assertNotSame($plaintext, $encrypted);
        $this->assertNotEmpty($encrypted);
    }

    /**
     * Test that encrypting the same value twice produces different ciphertext
     * (due to random nonce)
     */
    public function testEncryptionUsesRandomNonce(): void
    {
        $key = 'same-key';
        $plaintext = 'same-plaintext';

        $encrypted1 = simpleEncrypt($plaintext, $key);
        $encrypted2 = simpleEncrypt($plaintext, $key);

        // Should produce different ciphertext due to random nonce
        $this->assertNotSame($encrypted1, $encrypted2);

        // But both should decrypt to the same value
        $this->assertSame($plaintext, simpleDecrypt($encrypted1, $key));
        $this->assertSame($plaintext, simpleDecrypt($encrypted2, $key));
    }

    /**
     * Test decryption with wrong key returns empty string
     */
    public function testDecryptWithWrongKeyReturnsEmpty(): void
    {
        $correctKey = 'correct-key';
        $wrongKey = 'wrong-key';
        $plaintext = 'secret-data';

        $encrypted = simpleEncrypt($plaintext, $correctKey);
        $decrypted = simpleDecrypt($encrypted, $wrongKey);

        $this->assertSame('', $decrypted);
    }

    /**
     * Test encrypting empty message returns empty encrypted value,
     * and decrypting empty returns empty
     */
    public function testEmptyMessageHandling(): void
    {
        $key = 'some-key';

        // Empty message encryption produces output (nonce + empty ciphertext)
        $encrypted = simpleEncrypt('', $key);
        $this->assertNotEmpty($encrypted);

        // Decrypting should return empty string
        $decrypted = simpleDecrypt($encrypted, $key);
        $this->assertSame('', $decrypted);
    }

    /**
     * Test that empty key on decrypt returns empty
     */
    public function testDecryptWithEmptyKeyReturnsEmpty(): void
    {
        $result = simpleDecrypt('some-encrypted-data', '');
        $this->assertSame('', $result);
    }

    /**
     * Test that empty message on decrypt returns empty
     */
    public function testDecryptWithEmptyMessageReturnsEmpty(): void
    {
        $result = simpleDecrypt('', 'some-key');
        $this->assertSame('', $result);
    }

    /**
     * Test key padding - keys shorter than 32 chars are padded with zeros
     */
    public function testShortKeyIsPadded(): void
    {
        $shortKey = 'short';
        $plaintext = 'test-message';

        $encrypted = simpleEncrypt($plaintext, $shortKey);
        $decrypted = simpleDecrypt($encrypted, $shortKey);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test key truncation - keys longer than 32 chars use last 32 chars
     */
    public function testLongKeyIsTruncated(): void
    {
        $longKey = 'this-is-a-very-long-encryption-key-that-exceeds-32-characters';
        $plaintext = 'test-message';

        $encrypted = simpleEncrypt($plaintext, $longKey);
        $decrypted = simpleDecrypt($encrypted, $longKey);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test that invalid hex in ciphertext returns empty
     */
    public function testInvalidHexReturnsEmpty(): void
    {
        $key = 'test-key';

        // Invalid hex characters
        $result = simpleDecrypt('not-valid-hex!@#$%', $key);
        $this->assertSame('', $result);
    }

    /**
     * Test that corrupted ciphertext (valid hex but tampered) returns empty
     */
    public function testCorruptedCiphertextReturnsEmpty(): void
    {
        $key = 'test-key';
        $plaintext = 'original-message';

        $encrypted = simpleEncrypt($plaintext, $key);

        // Corrupt the ciphertext with valid hex but wrong data (AEAD auth will fail)
        $corrupted = substr($encrypted, 0, -4) . 'ffff';

        $result = simpleDecrypt($corrupted, $key);
        $this->assertSame('', $result);
    }

    /**
     * Test with special characters in plaintext
     */
    public function testSpecialCharactersInPlaintext(): void
    {
        $key = 'unicode-key';
        $plaintext = "Password with special chars: !@#$%^&*()_+-=[]{}|;':\",./<>?`~";

        $encrypted = simpleEncrypt($plaintext, $key);
        $decrypted = simpleDecrypt($encrypted, $key);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test with unicode/multibyte characters
     */
    public function testUnicodeCharacters(): void
    {
        $key = 'unicode-key';
        $plaintext = "Unicode password: 日本語 中文 한국어 العربية";

        $encrypted = simpleEncrypt($plaintext, $key);
        $decrypted = simpleDecrypt($encrypted, $key);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test with very long plaintext
     */
    public function testLongPlaintext(): void
    {
        $key = 'test-key';
        $plaintext = str_repeat('A', 10000); // 10KB of data

        $encrypted = simpleEncrypt($plaintext, $key);
        $decrypted = simpleDecrypt($encrypted, $key);

        $this->assertSame($plaintext, $decrypted);
    }

    /**
     * Test that ciphertext too short to contain nonce returns empty
     */
    public function testCiphertextTooShortReturnsEmpty(): void
    {
        $key = 'test-key';

        // Nonce is 24 bytes = 48 hex chars. Anything shorter should fail.
        $tooShort = str_repeat('aa', 20); // 40 hex chars

        $result = simpleDecrypt($tooShort, $key);
        $this->assertSame('', $result);
    }
}
