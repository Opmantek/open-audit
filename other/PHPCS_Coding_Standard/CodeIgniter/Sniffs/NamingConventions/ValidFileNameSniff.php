<?php
/**
 * CodeIgniter_Sniffs_NamingConventions_ValidFileNameSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2011 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * CodeIgniter_Sniffs_NamingConventions_ValidFileNameSniff.
 *
 * Tests that the file name matchs the name of the class  that it contains in lower case.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2011 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_NamingConventions_ValidFileNameSniff implements PHP_CodeSniffer_Sniff
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
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token in the
     *                                        stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        // computes the expected filename based on the name of the class or interface that it contains.
        $decNamePtr = $phpcsFile->findNext(T_STRING, $stackPtr);
        $decName = $tokens[$decNamePtr]['content'];
        $expectedFileName = strtolower($decName);
        // extracts filename without extension from its path.
        $fullPath = $phpcsFile->getFilename();
        $fileNameAndExt = basename($fullPath);
        $fileName = substr($fileNameAndExt, 0, strrpos($fileNameAndExt, '.'));

        if ($expectedFileName !== $fileName) {
            $errorTemplate = 'Filename "%s" doesn\'t match the name of the %s that it contains "%s" in lower case. "%s" was expected.';
            $errorMessage = sprintf(
                $errorTemplate,
                $fileName,
                strtolower($tokens[$stackPtr]['content']), // class or interface
                $decName,
                $expectedFileName
            );
            $phpcsFile->addError($errorMessage, 0);
        }
    }//end process()
}//end class

?>
