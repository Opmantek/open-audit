<?php
/**
 * CodeIgniter_Sniffs_Operators_StrictComparisonOperatorSniff.
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
 * CodeIgniter_Sniffs_Operators_StrictComparisonOperatorSniff.
 *
 * Ensures that only strict comparison operators are used instead of
 * equal and not equal operators.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Operators_StrictComparisonOperatorSniff implements PHP_CodeSniffer_Sniff
{
    private static $_replacements = array(
        T_IS_EQUAL     => '===',
        T_IS_NOT_EQUAL => '!==',
    );

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_IS_EQUAL,
            T_IS_NOT_EQUAL,
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
        $operator_string = $operator_token['content'];
        $operator_code = $operator_token['code'];

        $error_message = '"==" and "!=" are prohibited; use "'
            . self::$_replacements[$operator_code] . '" instead of "'
            . $operator_string . '".';
        $phpcsFile->addError($error_message, $stackPtr);
    }//end process()


}//end class

?>