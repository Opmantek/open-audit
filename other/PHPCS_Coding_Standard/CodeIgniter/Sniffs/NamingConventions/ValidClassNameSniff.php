<?php
/**
 * CodeIgniter_Sniffs_NamingConventions_ValidClassNameSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baoabz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * CodeIgniter_Sniffs_NamingConventions_ValidClassNameSniff.
 *
 * Ensures that class and interface names have their first letter uppercase
 * and that words are separated with an underscore, and not CamelCased.
 *
 * @todo Try to avoid overly long and verbose names in using property rule and
 * configuration variable to set limits. Have a look at
 * CodeIgniter_Sniffs_NamingConventions_ValidMethodNameSniff.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baoabz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_NamingConventions_ValidClassNameSniff implements PHP_CodeSniffer_Sniff
{


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_CLASS,
            T_INTERFACE,
        );

    }//end register()

    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // get the class name
        $className = trim($phpcsFile->getDeclarationName($stackPtr));
        // compute the expected class name
        // [^_] means "something different from _", but not "nothing or something different from _"
        $lcClassNameChunk = preg_replace('/([^_])([A-Z])/', '${1}_${2}', $className);
        $expectedClassName
            = strtoupper($className[0]) . strtolower(substr($lcClassNameChunk,1));
        // ensures that the current class name
        // and the expected class name are identical
        if (0 !== strcmp($className, $expectedClassName)) {
            $error =  'Class names should always have their first letter uppercase. Multiple words should be separated with an underscore, and not CamelCased. Please consider ' . $expectedClassName . ' instead of ' . $className . '.';
            $phpcsFile->addError($error, $stackPtr);
        }
    }//end process()

}//end class

?>
