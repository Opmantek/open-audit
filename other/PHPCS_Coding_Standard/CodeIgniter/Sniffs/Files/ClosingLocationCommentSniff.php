<?php
/**
 * CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff.
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
 * CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff.
 *
 * Ensures that a comment containing the file location exists at the end of file.
 * Only other comments and whitespaces are allowed between this comment and
 * the end of file.
 *
 * It may be all kind of comment like multi-line and inline C-style comments as
 * well as PERL-style comments. Any number of white may separate comment delimiters
 * from comment content. However, content has to be equal to template
 * "Location: <file_path_relative_to_application_root>".
 * Comparison between content and template is case-sensitive.
 *
 * There are several ways to configure the application root. In order of priority :
 *   - Configuration variable ci_application_root.
 *   - Rule property applicationRoot.
 *   - Default value '/application/'
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff extends CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff
{
    public $applicationRoot = '/application/';

    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_OPEN_TAG
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

        $filePath = $phpcsFile->getFilename();
        $tokens = $phpcsFile->getTokens();
        // removes the application root from the beginning of the file path
        $locationPath = self::_getLocationPath($filePath, $this->_getAppRoot());
        // add an error, if application root doesn't exist in current file path
        if (false === $locationPath) {
            $error = 'Unable to find "' . $this->_getAppRoot() . '" in file path "' . $filePath . '". Please set your project\'s application root.';
            $phpcsFile->addError($error, count($tokens) - 1);
            return;
        }
        // generates the expected comment
        $commentTemplate = "Location: $locationPath";

        $currentToken = count($tokens) - 1;
        $hasClosingLocationComment = false;
        $isNotAWhitespaceOrAComment = false;
        while ($currentToken >= 0
            && ! $isNotAWhitespaceOrAComment
            && ! $hasClosingLocationComment
        ) {
            $token = $tokens[$currentToken];
            $tokenCode = $token['code'];
            if (T_COMMENT === $tokenCode) {
                $commentString = self::_getCommentContent($token['content']);
                if (0 === strcmp($commentString, $commentTemplate)) {
                    $hasClosingLocationComment = true;
                }
            } else if (T_WHITESPACE === $tokenCode) {
                // Whitespaces are allowed between the closing file comment,
                //other comments and end of file
            } else {
                $isNotAWhitespaceOrAComment = true;
            }
            $currentToken--;
        }

        if ( ! $hasClosingLocationComment) {
            $error = 'No comment block marks the end of file instead of the closing PHP tag. Please add a comment block containing only "' . $commentTemplate . '".';
            $phpcsFile->addError($error, $currentToken);
        }
    }//end process()


    /**
     * Returns the relative path from $appRoot to $filePath, or false if
     * $appRoot cannot be found in $filePath, because $appRoot is not a parent
     * of $filePath.
     *
     * @param string $filePath Full path to the file being proceed.
     * @param string $appRoot  Partial or full path to the CodeIgniter
     * application root of the file being proceed. It must not contain the
     * full path to the application root, but at least the name of the
     * application root. Parent directory of the application root are allowed
     * but not mandatory.
     *
     * @return string|bool The relative path from $appRoot to $filePath, or
     * false if $appRoot cannot be found in $filePath.
     */
    private static function _getLocationPath ($filePath, $appRoot)
    {
        // removes the path to application root
        // from the beginning of the file path
        $appRootAt = strpos($filePath, $appRoot);
        if (false === $appRootAt) {
            return false;
        }
        $localPath = substr($filePath, $appRootAt + strlen($appRoot));
        // ensures the location path to be a relative path starting with "./".
        if ( ! self::_stringStartsWith($localPath, './')) {
            $localPath = './' . $localPath;
        } else if ( ! self::_stringStartsWith($localPath, '.')
            && self::_stringStartsWith($localPath, '/')
        ) {
            $localPath = '.' . $localPath;
        }
        return $localPath;
    }//end _getLocationPath()


    /**
     * Returns the application root that should be used first.
     *
     * There are several ways to configure the application root.
     * In order of priority :
     *   - Configuration variable ci_application_root.
     *   - Rule property applicationRoot.
     *   - Default value '/application/'
     *
     * @return string Path to your project application root.
     */
    private function _getAppRoot()
    {
        $appRoot = PHP_CodeSniffer::getConfigData('ci_application_root');
        if (null === $appRoot) {
            $appRoot = $this->applicationRoot;
        }
        return $appRoot;
    }//end _getAppRoot()
}//end class

?>
