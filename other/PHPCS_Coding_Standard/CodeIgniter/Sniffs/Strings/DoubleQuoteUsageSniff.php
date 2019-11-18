<?php
/**
 * CodeIgniter_Sniffs_Strings_DoubleQuoteUsageSniff.
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
 * CodeIgniter_Sniffs_Strings_DoubleQuoteUsageSniff.
 *
 * Ensures that double-quoted strings are used only to parse variables,
 * to avoid escape characters before single quotes or for chars that need
 * to be interpreted like \r, \n or \t.
 * If a double-quoted string contain both single and double quotes
 * but no variable, then a warning is raised to encourage the use of
 * single-quoted strings.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2011 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Strings_DoubleQuoteUsageSniff extends CodeIgniter_Sniffs_Strings_VariableUsageSniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_DOUBLE_QUOTED_STRING,
            T_CONSTANT_ENCAPSED_STRING,
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
        // no variable are in the string from here
        $tokens = $phpcsFile->getTokens();
        $qtString = $tokens[$stackPtr]['content'];
        // makes sure that it is about a double quote string,
        // since variables are not parsed out of double quoted string
        $open_qt_str = substr($qtString, 0, 1);

        // clean the enclosing quotes
        $qtString = substr($qtString, 1, strlen($qtString) - 1 - 1);

        if (0 === strcmp($open_qt_str, '"')) {
            $this->processDoubleQuotedString($phpcsFile, $stackPtr, $qtString);
        } else if (0 === strcmp($open_qt_str, "'")) {
            $this->processSingleQuotedString($phpcsFile, $stackPtr, $qtString);
        }
    }//end process()


    /**
     * Processes this test, when the token encountered is a double-quoted string.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $qtString  The double-quoted string content,
     *                                        i.e. without quotes.
     *
     * @return void
     */
    protected function processDoubleQuotedString (PHP_CodeSniffer_File $phpcsFile, $stackPtr, $qtString)
    {
        // so there should be at least a single quote or a special char
        // if there are the 2 kinds of quote and no special char, then add a warning
        $has_variable = parent::processDoubleQuotedString($phpcsFile, $stackPtr, '"'.$qtString.'"');
        $has_specific_sequence = $this->_hasSpecificSequence($qtString);
        $dbl_qt_at = strpos($qtString, '"');
        $smpl_qt_at = strpos($qtString, "'");
        if (false === $has_variable && false === $has_specific_sequence
            && false === $smpl_qt_at
        ) {
            $error = 'Single-quoted strings should be used unless it contains variables, special chars like \n or single quotes.';
            $phpcsFile->addError($error, $stackPtr);
        } else if (false !== $smpl_qt_at && false !== $dbl_qt_at
            && false === $has_variable && false === $has_specific_sequence
        ) {
            $warning = 'It is encouraged to use a single-quoted string, since it doesn\'t contain any variable nor special char though it mixes single and double quotes.';
            $phpcsFile->addWarning($warning, $stackPtr);
        }
    }//end processDoubleQuotedString()


    /**
     * Processes this test, when the token encountered is a single-quoted string.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $qtString  The single-quoted string content,
     *                                        i.e. without quotes.
     *
     * @return void
     */
    protected function processSingleQuotedString (PHP_CodeSniffer_File $phpcsFile, $stackPtr, $qtString)
    {
        // if there is single quotes without additional double quotes,
        // then user is allowed to use double quote to avoid having to
        // escape single quotes. Don't add the warning, if an error was
        // already added, because a variable was found in a single-quoted
        // string.
        $has_variable = parent::processSingleQuotedString($phpcsFile, $stackPtr, "'".$qtString."'");
        $dbl_qt_at = strpos($qtString, '"');
        $smpl_qt_at = strpos($qtString, "'");
        if (false === $has_variable && false !== $smpl_qt_at && false === $dbl_qt_at) {
            $warning = 'You may also use double-quoted strings if the string contains single quotes, so you do not have to use escape characters.';
            $phpcsFile->addWarning($warning, $stackPtr);
        }
    }//end processSingleQuotedString()

    /**
     * Return TRUE, if a sequence of chars that is parsed in a specific way
     * in double-quoted strings is found, FALSE otherwise.
     *
     * @param string $string String in which sequence of special chars will
     * be researched.
     *
     * @return TRUE, if a sequence of chars that is parsed in a specific way
     * in double-quoted strings is found, FALSE otherwise.
     *
     * @link http://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double
     */
    private function _hasSpecificSequence($string)
    {
        $hasSpecificSequence = FALSE;
        $specialMeaningStrs = array('\n', '\r', '\t', '\v', '\f');
        foreach ($specialMeaningStrs as $splStr) {
            if (FALSE !== strpos($string, $splStr)) {
                $hasSpecificSequence = TRUE;
            }
        }
        $specialMeaningPtrns = array('\[0-7]{1,3}', '\x[0-9A-Fa-f]{1,2}');
        foreach ($specialMeaningPtrns as $splPtrn) {
            if (1 === preg_match("/{$splPtrn}/", $string)) {
                $hasSpecificSequence = TRUE;
            }
        }
        return $hasSpecificSequence;
    }//end _hasSpecificSequence()

}//end class

?>
