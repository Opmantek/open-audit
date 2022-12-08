<?php
/**
 * CodeIgniter_Sniffs_WhiteSpace_ElseOnNewLineSniff.
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
 * CodeIgniter_Sniffs_WhiteSpace_ElseOnNewLineSniff.
 *
 * Ensures that control structures else and elseif stand on new lines.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_WhiteSpace_ElseOnNewLineSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_ELSE,
            T_ELSEIF,
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

        $else_token = $tokens[$stackPtr];
        $previous_non_blank_token_ptr = $phpcsFile->findPrevious(array(T_WHITESPACE), $stackPtr - 1, null, true);

        if (false === $previous_non_blank_token_ptr) {
        	// else is no preceded with any symbol, but it is not the responsibility of this sniff.
        	return;
        }

        $previous_non_blank_token = $tokens[$previous_non_blank_token_ptr];
        if ($previous_non_blank_token['line'] === $else_token['line']) {
            $error = '"' . $else_token['content'] . '" should be on a new line.';
            $phpcsFile->addError($error, $stackPtr);
        }

    }//end process()


}//end class

?>