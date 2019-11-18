<?php
/**
 * CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff.
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
 * CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff.
 *
 * Defines some methods used by
 * CodeIgniter_Sniffs_Files_ClosingFileCommentSniff
 * and CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2006 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_Files_AbstractClosingCommentSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * As an abstract class, this sniff is not associated to any token.
     */
    public function register()
    {
      return array();
    }

    /**
     * As an abstract class, this sniff is not dedicated to process a token.
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
      $error = __CLASS__.'::'.__METHOD__.' is abstract. Please develop this method in a child class.';
      throw new PHP_CodeSniffer_Exception($error);
    }

    /**
     * Returns the comment without its delimiter(s) as well as leading
     * and traling whitespaces.
     *
     * It removes the first #, the two first / (i.e. //) or the first /*
     * and last \*\/. If a comment starts with /**, then the last * will remain
     * as well as whitespaces between this star and the comment content.
     *
     * @param string $comment Comment containing either comment delimiter(s) and
     * trailing or leading whitspaces to clean.
     *
     * @return string Comment without comment delimiter(s) and whitespaces.
     */
    protected static function _getCommentContent ($comment)
    {
        if (self::_stringStartsWith($comment, '#')) {
            $comment = substr($comment, 1);
        } else if (self::_stringStartsWith($comment, '//')) {
            $comment = substr($comment, 2);
        } else if (self::_stringStartsWith($comment, '/*')) {
            $comment = substr($comment, 2, strlen($comment) - 2 - 2);
        }
        $comment = trim($comment);
        return $comment;
    }//_getCommentContent()


    /**
     * Binary safe string comparison between $needle and
     * the beginning of $haystack. Returns true if $haystack starts with
     * $needle, false otherwise.
     *
     * @param string $haystack The string to search in.
     * @param string $needle   The string to search for.
     *
     * @return bool true if $haystack starts with $needle, false otherwise.
     */
    protected static function _stringStartsWith ($haystack, $needle)
    {
        $startsWith = false;
        if (strlen($needle) <= strlen($haystack)) {
            $haystackBeginning = substr($haystack, 0, strlen($needle));
            if (0 === strcmp($haystackBeginning, $needle)) {
                $startsWith = true;
            }
        }
        return $startsWith;
    }//_stringStartsWith()
}//end class

?>
