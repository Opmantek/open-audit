<?php
/**
 * CodeIgniter_Sniffs_WhiteSpace_LogicalNotSpacingSniff.
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
 * CodeIgniter_Sniffs_WhiteSpace_LogicalNotSpacingSniff.
 *
 * Ensures that at exactly a space precedes and follows the logical operator !.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_WhiteSpace_LogicalNotSpacingSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_BOOLEAN_NOT,
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
        $tokens = $phpcsFile->getTokens();

        $operator_token = $tokens[$stackPtr];

        $previous_token = $tokens[$stackPtr - 1];
        $next_token = $tokens[$stackPtr + 1];
        if (T_WHITESPACE !== $previous_token['code'] || T_WHITESPACE !== $next_token['code']) {
            $error = 'Logical operator ! should always be preceded and followed with a whitespace.';
            $phpcsFile->addError($error, $stackPtr);
        }
    }//end process()


}//end class

?>