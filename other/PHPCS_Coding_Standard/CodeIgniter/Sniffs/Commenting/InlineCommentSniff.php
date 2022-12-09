<?php
/**
 * CodeIgniter_Sniffs_Commenting_InlineCommentSniff.
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
 * CodeIgniter_Sniffs_Commenting_InlineCommentSniff.
 *
 * Ensure the use of single line comments within code (i.e //)
 * and blank lines between large comment blocks and code.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2011 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Commenting_InlineCommentSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * @var int Limit defining long comments.
     * Long comments count $longCommentLimit or more lines.
     */
    public $longCommentLimit = 5;

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_COMMENT
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

        // keep testing only if it's about the first comment of the block
        $previousCommentPtr = $phpcsFile->findPrevious($tokens[$stackPtr]['code'], $stackPtr - 1);
        if ($tokens[$previousCommentPtr]['line'] !== $tokens[$stackPtr]['line'] - 1) {
            if (TRUE !== $this->_checkCommentStyle($phpcsFile, $stackPtr)) {
                return;
            }

            $commentLines = $this->_getCommentBlock($phpcsFile, $stackPtr);

            if (count($commentLines) >= $this->longCommentLimit) {
                $this->_checkBlankLinesAroundLongComment($phpcsFile, $commentLines);
            }
        }
    }//end process()


    /**
     * Add error to $phpcsFile, if comment pointed by $stackPtr doesn't start
     * with '//'.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        that has to be a comment.
     * 
     * @return bool TRUE if the content of the token pointed by $stackPtr starts
     *              with //, FALSE if an error was added to $phpcsFile.
     */
    private function _checkCommentStyle(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$stackPtr]['content']{0} === '#') {
            $error  = 'Perl-style comments are not allowed; use "// Comment" or DocBlock comments instead';
            $phpcsFile->addError($error, $stackPtr, 'WrongStyle');
            return FALSE;
        } else if (substr($tokens[$stackPtr]['content'], 0, 2) === '/*'
            || $tokens[$stackPtr]['content']{0} === '*'
        ) {
            $error  = 'Multi lines comments are not allowed; use "// Comment" DocBlock comments instead';
            $phpcsFile->addError($error, $stackPtr, 'WrongStyle');
            return FALSE;
        } else if (substr($tokens[$stackPtr]['content'], 0, 2) !== '//') {
            $error  = 'Use single line or DocBlock comments within code';
            $phpcsFile->addError($error, $stackPtr, 'WrongStyle');
            return FALSE;
        }
        return TRUE;
    }//_checkCommentStyle()


    /**
     * Gather into an array all comment lines to which $stackPtr belongs.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  Pointer to the first comment line.
     * 
     * @return type array Pointers to tokens making up the comment block.
     */
    private function _getCommentBlock(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $commentLines = array($stackPtr);
        $nextComment  = $stackPtr;
        $lastLine     = $tokens[$stackPtr]['line'];

        while (($nextComment = $phpcsFile->findNext($tokens[$stackPtr]['code'], ($nextComment + 1), null, false)) !== false) {
            if (($tokens[$nextComment]['line'] - 1) !== $lastLine) {
                // Not part of the block.
                break;
            }

            $lastLine       = $tokens[$nextComment]['line'];
            $commentLines[] = $nextComment;
        }

        return $commentLines;
    }//_getCommentBlock()


    /**
     * Add errors to $phpcsFile, if $commentLines isn't enclosed with blank lines.
     *
     * @param PHP_CodeSniffer_File $phpcsFile    The current file being scanned.
     * @param array                $commentLines Lines of the comment block being checked.
     * 
     * @return bool TRUE if $commentLines is enclosed with at least a blank line
     * before and after, FALSE otherwise.
     */
    private function _checkBlankLinesAroundLongComment(PHP_CodeSniffer_File $phpcsFile, array $commentLines)
    {
        $hasBlankLinesAround = TRUE;
        $tokens = $phpcsFile->getTokens();

        // check blank line before the long comment
        $firstCommentPtr = reset($commentLines);
        $firstPreviousSpacePtr = $firstCommentPtr - 1;
        while (T_WHITESPACE === $tokens[$firstPreviousSpacePtr]['code'] && $firstPreviousSpacePtr > 0) {
            $firstPreviousSpacePtr--;
        }
        if ($tokens[$firstPreviousSpacePtr]['line'] >= $tokens[$firstCommentPtr]['line'] - 1) {
            $error  = "Please add a blank line before comments counting more than {$this->longCommentLimit} lines.";
            $phpcsFile->addError($error, $firstCommentPtr, 'LongCommentWithoutSpacing');
            $hasBlankLinesAround = FALSE;
        }

        // check blank line after the long comment
        $lastCommentPtr = end($commentLines);
        $lastNextSpacePtr = $lastCommentPtr + 1;
        while (T_WHITESPACE === $tokens[$lastNextSpacePtr]['code'] && $lastNextSpacePtr < count($tokens)) {
            $lastNextSpacePtr++;
        }
        if ($tokens[$lastNextSpacePtr]['line'] <= $tokens[$lastCommentPtr]['line'] + 1) {
            $error  = "Please add a blank line after comments counting more than {$this->longCommentLimit} lines.";
            $phpcsFile->addError($error, $lastCommentPtr, 'LongCommentWithoutSpacing');
            $hasBlankLinesAround = FALSE;
        }

        return $hasBlankLinesAround;
    }//end _checkBlanksAroundLongComment()

}//end class

?>