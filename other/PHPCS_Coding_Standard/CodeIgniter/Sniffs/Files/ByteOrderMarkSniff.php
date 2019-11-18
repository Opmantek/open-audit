<?php
/**
 * CodeIgniter_Sniffs_Files_ByteOrderMarkSniff.
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
 * CodeIgniter_Sniffs_Files_ByteOrderMarkSniff.
 *
 * Ensures that no BOM appears at the beginning of file.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Files_ByteOrderMarkSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array( T_OPEN_TAG );
    }//end register()

    /**
     * List of supported BOM definitions.
     *
     * Use encoding names as keys and hex BOM representations as values.
     *
     * @return array
     */
    protected function getBomDefinitions()
    {
        return array(
            'UTF-8'       => 'efbbbf',
            'UTF-16 (BE)' => 'feff',
            'UTF-16 (LE)' => 'fffe',
            'UTF-32 (BE)' => '0000feff',
            'UTF-32 (LE)' => 'fffe0000'
        );
    }//end getBomDefinitions()

    /**
     * Process tokens.
     *
     * Actually, only proceed when we're at index 0, this should be the only case
     * that will contain BOM. Then check if BOM definition matches what
     * we've found as file's inline HTML. Inline HTML could be longer than just BOM
     * so make sure you test as much as needed.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    public function process( PHP_CodeSniffer_File $phpcsFile, $stackPtr )
    {
        // We are only interested if this is the first open tag.
        if ($stackPtr !== 0) {
            if ($phpcsFile->findPrevious(T_OPEN_TAG, ($stackPtr - 1)) !== false) {
                return;
            }
        }

        $tokens = $phpcsFile->getTokens();
        $fileStartString = $tokens[0]['content'];
        foreach ($this->getBomDefinitions() as $bomName => $expectedBomHex) {
            $bomByteLength = strlen($expectedBomHex) / 2;
            $fileStartHex = bin2hex(substr($fileStartString, 0, $bomByteLength));
            if ($fileStartHex === $expectedBomHex) {
                $error = "File contains a $bomName byte order mark (BOM).";
                $phpcsFile->addError($error, $stackPtr);
                break;
            }
        }
    }//end process()
}
