<?php
/**
 * CodeIgniter_Sniffs_Operators_UppercaseLogicalOperatorOrSniff.
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
 * CodeIgniter_Sniffs_Operators_UppercaseLogicalOperatorOrSniff.
 *
 * Ensures that the logical operator 'OR' is in upper cases and its symbolic equivalent.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Operators_UppercaseLogicalOperatorOrSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for: literal and symbolic operators or.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_BOOLEAN_OR,
            T_LOGICAL_OR,
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

        if ($operator_code == T_BOOLEAN_OR) {
            $error_message = 'Logical operator "' . $operator_string
                . '" is prohibited; use "OR" instead';
            $phpcsFile->addError($error_message, $stackPtr);
        }
        // it is literal, if it is not symbolic
        else if ($operator_string !== strtoupper($operator_string)) {
            $error_message = 'Logical operator should be in upper case;'
                . ' use "' . strtoupper($operator_string)
                . '" instead of "' . $operator_string . '"';
            $phpcsFile->addError($error_message, $stackPtr);
        }
    }//end process()


}//end class

?>