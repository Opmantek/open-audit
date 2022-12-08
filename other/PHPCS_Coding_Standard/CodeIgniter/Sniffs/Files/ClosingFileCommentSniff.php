<?php
/**
 * CodeIgniter_Sniffs_Files_ClosingFileCommentSniff.
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

if (class_exists('CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff', true) === false) {
    $error = 'Class CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * CodeIgniter_Sniffs_Files_ClosingFileCommentSniff.
 *
 * Ensures that a comment containing the file name is available at the end of file.
 * Only other comments and whitespaces are allowed to follow this specific comment.
 *
 * It may be all kind of comment like multi-line and inline C-style comments as
 * well as PERL-style comments. Any number of white may separate comment delimiters
 * from comment content. However, content has to be equal to template
 * "End of file <file_name>". Comparison between content and template is
 * case-sensitive.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Files_ClosingFileCommentSniff extends CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff
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
        // We are only interested if this is the first open tag.
        if ($stackPtr !== 0) {
            if ($phpcsFile->findPrevious(T_OPEN_TAG, ($stackPtr - 1)) !== false) {
                return;
            }
        }

        $fullFilename = $phpcsFile->getFilename();
        $filename = basename($fullFilename);
        $commentTemplate = "End of file $filename";

        $tokens = $phpcsFile->getTokens();
        $currentToken = count($tokens) - 1;
        $hasClosingFileComment = false;
        $isNotAWhitespaceOrAComment = false;
        while ($currentToken >= 0
            && ! $isNotAWhitespaceOrAComment
            && ! $hasClosingFileComment
        ) {
            $token = $tokens[$currentToken];
            $tokenCode = $token['code'];
            if (T_COMMENT === $tokenCode) {
                $commentString = self::_getCommentContent($token['content']);
                if (0 === strcmp($commentString, $commentTemplate)) {
                    $hasClosingFileComment = true;
                }
            } else if (T_WHITESPACE === $tokenCode) {
                // Whitespaces are allowed between the closing file comment,
                // other comments and end of file
            } else {
                $isNotAWhitespaceOrAComment = true;
            }
            $currentToken--;
        }

        if ( ! $hasClosingFileComment) {
            $error = 'No comment block marks the end of file instead of the closing PHP tag. Please add a comment block containing only "' . $commentTemplate . '".';
            $phpcsFile->addError($error, $currentToken);
        }
    }//end process()
}//end class

?>
