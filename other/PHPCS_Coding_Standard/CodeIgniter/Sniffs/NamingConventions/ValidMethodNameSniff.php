<?php
/**
 * CodeIgniter_Sniffs_NamingConventions_ValidMethodNameSniff.
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

if (class_exists('PHP_CodeSniffer_Standards_AbstractScopeSniff', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_AbstractScopeSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * CodeIgniter_Sniffs_NamingConventions_ValidMethodNameSniff.
 *
 * Ensures that class methods and functions areentirely lowercased and that
 * words are separated with an underscore, and not CamelCased.
 * Ensures that private class methods are prefixed with an underscore and that
 * all other methods are not prefixed with an underscored.
 * Ensures that names longer than 50 chars are prohibited. Likewise names longer
 * than 35 chars raise a warning.
 *
 * @todo Use a rule property or a configuration variable to allow users to set
 * their own maximum lengths for function and method names. Have a look at
 * CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff and application root.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baoabz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_NamingConventions_ValidMethodNameSniff extends PHP_CodeSniffer_Standards_AbstractScopeSniff
{
    /**
     * A list of all PHP magic methods.
     *
     * @var array
     */
    protected static $magicMethods = array(
                               'construct',
                               'destruct',
                               'call',
                               'callStatic',
                               'get',
                               'set',
                               'isset',
                               'unset',
                               'sleep',
                               'wakeup',
                               'toString',
                               'set_state',
                               'clone',
                              );

    /**
     * Defines which token(s) in which scope(s) will be proceed.
     */
    public function __construct()
    {
        parent::__construct(array(T_CLASS, T_INTERFACE), array(T_FUNCTION), true);

    }//end __construct()


    /**
     * Processes the tokens within the scope.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being processed.
     * @param int                  $stackPtr  The position where this token was
     *                                        found.
     * @param int                  $currScope The position of the current scope.
     *
     * @return void
     */
    protected function processTokenWithinScope(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $currScope)
    {
        $methodName = $phpcsFile->getDeclarationName($stackPtr);
        if ($methodName === null) {
            // Ignore closures.
            return;
        }

        $className  = $phpcsFile->getDeclarationName($currScope);

        // Is this a magic method i.e. is prefixed with "__".
        if (0 === strcmp(substr($methodName, 0, 2), '__')) {
            $magicPart = substr($methodName, 2);
            if (in_array($magicPart, self::$magicMethods) === false) {
                 $error = "Method name \"$className::$methodName\" is invalid; only PHP magic methods should be prefixed with a double underscore";
                 $phpcsFile->addError($error, $stackPtr);
            }

            return;
        }

        // PHP4 constructors are allowed to break our rules.
        if ($methodName === $className) {
            return;
        }

        // PHP4 destructors are allowed to break our rules.
        if ($methodName === '_'.$className) {
            return;
        }

        if (0 !== strcmp($methodName, strtolower($methodName))) {
            $uscrdMethodName = preg_replace('/([A-Z])/', '_${1}', $methodName);
            $expectedMethodName = strtolower($uscrdMethodName);
            $error = "Class methods should be entirely lowercased. Please consider \"$expectedMethodName\" instead of \"$methodName\".";
            $phpcsFile->addError($error, $stackPtr);
            return;
        }

        $methodProps    = $phpcsFile->getMethodProperties($stackPtr);
        $scope          = $methodProps['scope'];
        $scopeSpecified = $methodProps['scope_specified'];

        // If it's a private method, it must have an underscore on the front.
        if ($scope === 'private' && $methodName{0} !== '_') {
            $error = "Private method name \"$className::$methodName\" must be prefixed with an underscore";
            $phpcsFile->addError($error, $stackPtr);
            return;
        }

        // If it's not a private method, it must not have an underscore on the front.
        if ($scope !== 'private' && $methodName{0} === '_' && $methodName != '_remap') {
            if (true === $scopeSpecified) {
                $error = "Public method name \"$className::$methodName\" must not be prefixed with an underscore";
            } else {
                $error = ucfirst($scope)." method name \"$className::$methodName\" must not be prefixed with an underscore";
            }
            $phpcsFile->addError($error, $stackPtr);
            return;
        }

        // If name is too verbose,
        // then either an error or a warning is displayed.
        $error_limit = 50;
        $warning_limit = 35;
        if (strlen($methodName) > $error_limit) {
            $error = "Overly long and verbose names are prohibited. Please find a name shorter than $error_limit chars.";
            $phpcsFile->addError($error, $stackPtr);
            return;
        } else if (strlen($methodName) > $warning_limit) {
            $warning = "Try to avoid overly long and verbose names in finding a name shorter than $warning_limit chars.";
            $phpcsFile->addWarning($warning, $stackPtr);
        }
    }//end processTokenWithinScope()

}//end class

?>
