<?php

/**
 * Code Igniter Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://codeigniter.com/user_guide/general/styleguide.html
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * Code Ignite Coding Standard.
 *
 * @todo There is still plenty of code to write (or reuse) to implement rules
 * regarding to comments, spacing and indentation. There are several @todo
 * comments left in the body of this class.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baobaz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://codeigniter.com/user_guide/general/styleguide.html
 */
class PHP_CodeSniffer_Standards_CodeIgniter_CodeIgniterCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
            'PEAR/Sniffs/Files/LineEndingsSniff.php',
            'Zend/Sniffs/Files/ClosingTagSniff.php',
            'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
            'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
            'Generic/Sniffs/PHP/UpperCaseConstantSniff.php',
            'Generic/Sniffs/Formatting/DisallowMultipleStatementsSniff.php',

            // @todo Code should be commented prolifically. DocBlock style comments preceding class and method declarations
            // @todo reuse ? 'PEAR/Sniffs/Commenting/ClassCommentSniff.php',
            // @todo reuse ? 'Squiz/Sniffs/Commenting/ClassCommentSniff.php',
            // @todo reuse ? 'PEAR/Sniffs/Commenting/FunctionCommentSniff.php',
            // @todo reuse ? 'Squiz/Sniffs/Commenting/FunctionCommentSniff.php',

            // @todo Use single line comments within code, leaving a blank line between large comment blocks and code.
            // @todo reuse ? 'PEAR/Sniffs/Commenting/InlineCommentSniff.php',
            // @todo reuse ? 'Squiz/Sniffs/Commenting/InlineCommentSniff.php'

            // @todo Use Allman style indenting. With the exception of Class declarations, braces are always placed on a line by themselves, and indented at the same level as the control statement that "owns" them.
            // @todo reuse ? Squiz_Sniffs_Functions_FunctionDeclarationArgumentSpacingSniff check that there is no space before funciton arguments. In general, parenthesis and brackets should not use any additional spaces. The exception is that a space should always follow PHP control structures that accept arguments with parenthesis (declare, do-while, elseif, for, foreach, if, switch, while), to help distinguish them from functions and increase readability.

            /* @todo
            'Squiz/Sniffs/Arrays/ArrayBracketSpacingSniff.php',
            'Squiz/Sniffs/WhiteSpace/CastSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_ControlStructureSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_FunctionClosingBraceSpaceSniff.php',
            'Squiz_Sniffs_WhiteSpace_FunctionOpeningBraceSpaceSniff.php',
            'Squiz_Sniffs_WhiteSpace_FunctionSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_LanguageConstructSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_MemberVarSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_ObjectOperatorSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_OperatorSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_PropertyLabelSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_ScopeClosingBraceSniff.php',
            'Squiz_Sniffs_WhiteSpace_ScopeIndentSniff.php',
            'Squiz_Sniffs_WhiteSpace_ScopeKeywordSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_SemicolonSpacingSniff.php',
            'Squiz_Sniffs_WhiteSpace_SuperfluousWhitespaceSniff.php',
            */

            // @todo How to regonize strings dedicated to be output in the control panel ? Any text that is output in the control panel should use language variables in your module's lang file to allow localization.

            // @todo Very hard : Any tables that your add-on might use must use the 'exp_' prefix, followed by a prefix uniquely identifying you as the developer or company
            // @todo Very hard : MySQL keywords are always capitalized: SELECT, INSERT, UPDATE, WHERE, AS, JOIN, ON, IN, etc.
            // @todo Something to reuse ? Break up long queries into multiple lines for legibility, preferably breaking for each clause.
        );
    }//end getIncludedSniffs()


}//end class
?>
