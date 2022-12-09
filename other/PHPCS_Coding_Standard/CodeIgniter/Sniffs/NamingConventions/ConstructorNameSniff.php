<?php
/**
 * CodeIgniter_Sniffs_NamingConventions_ConstructorNameSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@gmail.com>
 * @copyright 2011 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_AbstractScopeSniff', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_AbstractScopeSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * CodeIgniter_Sniffs_NamingConventions_ConstructorNameSniff.
 *
 * Favor PHP 4 constructor syntax, which uses "function ClassName()".
 * Avoid PHP 5 constructor syntax, which uses "function __construct()".
 *
 * @todo Try to avoid overly long and verbose names.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@gmail.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_NamingConventions_ConstructorNameSniff extends PHP_CodeSniffer_Standards_AbstractScopeSniff
{


    public $php5Constructors = '1';


    /**
     * Constructs the test with the tokens it wishes to listen for.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(array(T_CLASS, T_INTERFACE), array(T_FUNCTION), true);

    }//end __construct()


    /**
     * Processes this test when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param int                  $currScope A pointer to the start of the scope.
     *
     * @return void
     */
    protected function processTokenWithinScope(
        PHP_CodeSniffer_File $phpcsFile,
        $stackPtr,
        $currScope
    ) {
        $methodName = $phpcsFile->getDeclarationName($stackPtr);
        $className  = $phpcsFile->getDeclarationName($currScope);

	$isPhp4Constructor = strcasecmp($methodName, $className) === 0;
	$isPhp5Constructor = strcasecmp($methodName, '__construct') === 0;
        if ($this->php5Constructors != '0') {
            if ($isPhp4Constructor) {
                $error = "PHP4 style constructors are not allowed; use \"__construct\" instead";
                $phpcsFile->addError($error, $stackPtr);
            }
        } else {
            if ($isPhp5Constructor) {
                $error = "PHP5 style constructors are not allowed; use \"$className\" instead";
                $phpcsFile->addError($error, $stackPtr);
            }
        }
        if ( ! $isPhp4Constructor && ! $isPhp5Constructor ) {
            return;
        }

        $tokens = $phpcsFile->getTokens();

        $parentClassName = $phpcsFile->findExtendedClassName($currScope);
        $wrongConstructor = '';
        // prepares the error message and wrong constructor
        if ($this->php5Constructors != '0') {
            $error = 'PHP4 style calls to parent constructors are not allowed.';
            $error = "$error Please use \"parent::__construct\" instead.";
            if (false !== $parentClassName) {
                $wrongConstructor = $parentClassName;
            }
            // Else $wrongConstructor will be empty
            // and the test expression will always be false.
            // It doesn't check that no parent method should be called
            // when no parent class is defined.
        } else {
            $error = 'PHP5 style calls to parent constructors are not allowed.';
            if (false !== $parentClassName) {
                $error = "$error Please use \"parent::$parentClassName\" instead.";
            }
            $wrongConstructor = '__construct';
        }

        // looks for the use of a wrong constructor.
        $endFunctionIndex = $tokens[$stackPtr]['scope_closer'];
        $doubleColonIndex = $phpcsFile->findNext(
            array(T_DOUBLE_COLON),
            $stackPtr,
            $endFunctionIndex
        );
        while ($doubleColonIndex) {
            if ($tokens[($doubleColonIndex + 1)]['code'] === T_STRING
                && $tokens[($doubleColonIndex + 1)]['content'] === $wrongConstructor
            ) {
                $phpcsFile->addError($error, ($doubleColonIndex + 1));
            }

            $doubleColonIndex = $phpcsFile->findNext(
                array(T_DOUBLE_COLON),
                $doubleColonIndex + 1,
                $endFunctionIndex
            );
        }

    }//end processTokenWithinScope()


}//end class

?>
