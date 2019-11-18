<?php
/**
 * CodeIgniter_Sniffs_WhiteSpace_DisallowWitheSpaceAroundPhpTagsSniff.
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
 * CodeIgniter_Sniffs_WhiteSpace_DisallowWitheSpaceAroundPhpTagsSniff.
 *
 * Ensures that no whitespace precedes the opening PHP tag
 * or follows the closing PHP tag.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_WhiteSpace_DisallowWitheSpaceAroundPhpTagsSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
                T_OPEN_TAG,
                T_CLOSE_TAG
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

        $php_tag_token = $tokens[$stackPtr];
        $php_tag_code = $php_tag_token['code'];

        if (T_OPEN_TAG === $php_tag_code) {
            // opening php tag should be the first token.
            // any whitespace beofre an opening php tag is tokenized
            // as T_INLINE_HTML, so no need to check the content of the token.
            $isFirst = 0 === $stackPtr;
            if ( ! $isFirst) {
                $error = 'Any char before the opening PHP tag is prohibited. Please remove newline or indentation before the opening PHP tag.';
                $phpcsFile->addError($error, $stackPtr);
            }
        } else {
            // if (T_CLOSE_TAG === $php_tag_code)
            // closing php tag should be the last token
            // and it must not contain any whitespace.
            $php_tag_string = $php_tag_token['content'];
            $isLast = count($tokens) - 1 === $stackPtr;
            // both of the two closing php tags contains 2 chars exactly.
            $containsEndTagOnly = strlen($php_tag_string) > 2;
            if ( ! $isLast || ! $containsEndTagOnly ) {
                $error = 'Any char after the closing PHP tag is prohibited. Please removes newline or spaces after the closing PHP tag.';
                $phpcsFile->addError($error, $stackPtr);
            }
        }
    }//end process()


}//end class

?>