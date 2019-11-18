<?php
/**
 * CodeIgniter_Sniffs_NamingConventions_ValidVariableNameSniff.
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

if (class_exists('PHP_CodeSniffer_Standards_AbstractVariableSniff', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_AbstractVariableSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * CodeIgniter_Sniffs_NamingConventions_ValidVariableNameSniff.
 *
 * Ensures that variable names contain only lowercase letters,
 * use underscore separators.
 * Ensures that class attribute names are prefixed with an underscore,
 * only when they are private.
 * Ensure that variable names are longer than 3 chars except those declared
 * in for loops.
 *
 * @todo Try to avoid overly long and verbose names in using property rule and
 * configuration variable to set limits. Have a look at
 * CodeIgniter_Sniffs_NamingConventions_ValidMethodNameSniff.
 * @todo Use a property rule or a configuration variable to allow users to set
 * minimum variable name length. Have a look at
 * CodeIgniter_Sniffs_Files_ClosingLocationCommentSniff and application root.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Thomas Ernest <thomas.ernest@baoabz.com>
 * @copyright 2010 Thomas Ernest
 * @license   http://thomas.ernest.fr/developement/php_cs/licence GNU General Public License
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CodeIgniter_Sniffs_NamingConventions_ValidVariableNameSniff extends PHP_CodeSniffer_Standards_AbstractVariableSniff
{


    /**
     * Processes class member variables.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    protected function processMemberVar(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // get variable name and properties
        $tokens = $phpcsFile->getTokens();
        $varTk = $tokens[$stackPtr];
        $varName = substr($varTk['content'], 1);
        $varProps = $phpcsFile->getMemberProperties($stackPtr);
        // check(s)
        if ( ! $this->checkLowerCase($phpcsFile, $stackPtr, $varName) ) {
            return;
        }
        if ( ! $this->checkVisibilityPrefix($phpcsFile, $stackPtr, $varName, $varProps)) {
            return;
        }
        if ( ! $this->checkLength($phpcsFile, $stackPtr, $varName)) {
            return;
        }

    }//end processMemberVar()


    /**
     * Processes normal variables.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where this token was found.
     * @param int                  $stackPtr  The position where the token was found.
     *
     * @return void
     */
    protected function processVariable(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // get variable name
        $tokens = $phpcsFile->getTokens();
        $varTk = $tokens[$stackPtr];
        $varName = substr($varTk['content'], 1);
        // skip the current object variable, i.e. $this
        if (0 === strcmp($varName, 'this')) {
            return;
        }
        // check(s)
        if ( ! $this->checkLowerCase($phpcsFile, $stackPtr, $varName)) {
            return;
        }
        if ( ! $this->checkLength($phpcsFile, $stackPtr, $varName)) {
            return;
        }

    }//end processVariable()


    /**
     * Processes variables in double quoted strings.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where this token was found.
     * @param int                  $stackPtr  The position where the token was found.
     *
     * @return void
     */
    protected function processVariableInString(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $stringTk = $tokens[$stackPtr];
        $stringString = $stringTk['content'];
        $varAt = self::_getVariablePosition($stringString, 0);
        while (false !== $varAt) {
            // get variable name
            $matches = array();
            preg_match('/^\$\{?([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}?/', substr($stringString, $varAt), $matches);
            $varName = $matches[1];
            // check(s)
            if ( ! $this->checkLowerCase($phpcsFile, $stackPtr, $varName)) {
                return;
            }
            if ( ! $this->checkLength($phpcsFile, $stackPtr, $varName)) {
                return;
            }
            // prepare checking next variable
            $varAt = self::_getVariablePosition($stringString, $varAt + 1);
        }

    }//end processVariableInString()


    /**
     * Checks that the variable name is all in lower case, else it add an error
     * to $phpcsFile. Returns true if variable name is all in lower case, false
     * otherwise.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $varName   The name of the variable to
     *                                        procced without $, { nor }.
     *
     * @return bool true if variable name is all in lower case, false otherwise.
     */
    protected function checkLowerCase(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $varName)
    {
        $isInLowerCase = true;
        if (0 !== strcmp($varName, strtolower($varName)) && $varName !== 'CI' && $varName !== '_SERVER' && $varName !== '_FILE' && $varName !== '_POST' && $varName !== '_GET' && $varName !== '_PUT' && $varName !== '_PATCH' && $varName !== '_DELETE') {
            // get the expected variable name
            $varNameWithUnderscores = preg_replace('/([A-Z])/', '_${1}', $varName);
            $expectedVarName = strtolower(ltrim($varNameWithUnderscores, '_'));
            // adapts the error message to the error case
            if (strlen($varNameWithUnderscores) > strlen($varName)) {
                $error = 'Variables should not use CamelCasing or start with a Capital.';
            } else {
                $error = 'Variables should be entirely lowercased.';
            }
            $error = $error . 'Please consider "' . $expectedVarName
                . '" instead of "' . $varName . '".';
            // adds the error and changes return value
            $phpcsFile->addError($error, $stackPtr);
            $isInLowerCase = false;
        }
        return $isInLowerCase;
    }//end checkLowerCase()

    /**
     * Checks that an underscore is used at the beginning of a variable only if
     * it is about a private variable. If it isn't a private variable, then it
     * must not be prefixed with an underscore. Returns true if $varName is
     * properly prefixed according to the variable visibility provided in
     * $varProps, false otherwise.
     * 
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $varName   The name of the variable to
     *                                        procced without $, { nor }.
     * @param array                $varProps  Member variable properties like
     *                                        its visibility.
     *
     * @return bool true if variable name is prefixed with an underscore only
     * when it is about a private variable, false otherwise.
     */
    protected function checkVisibilityPrefix(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $varName, $varProps)
    {
        $isVisibilityPrefixRight = true;
        $scope = $varProps['scope'];
        // If it's a private variable, it must have an underscore on the front.
        if ($scope === 'private' && $varName{0} !== '_') {
            $error = "Private variable name \"$varName\" must be prefixed with an underscore";
            $phpcsFile->addError($error, $stackPtr);
            $isVisibilityPrefixRight = false;
        } else if ($scope !== 'private' && $varName{0} === '_') {
            // If it's not a private variable,
            // then it must not start with an underscore.
            if (isset ($scopeSpecified) && true === $scopeSpecified) {
                $error = "Public variable name \"$varName\" must not be prefixed with an underscore";
            } else {
                $error = ucfirst($scope) . " variable name \"$varName\" must not be prefixed with an underscore";
            }
            $phpcsFile->addError($error, $stackPtr);
            $isVisibilityPrefixRight = false;
        }
        return $isVisibilityPrefixRight;
    }//end checkVisibilityPrefix()

    /**
     * Checks that variable name length is not too short. Returns true, if it
     * meets minimum length requirement, false otherwise.
     *
     * A variable name is too short if it is shorter than the minimal
     * length and it isn't in the list of allowed short names nor declared in a
     * for loop (in which it would be nested).
     * The minimal length is defined in the function. It is 3 chars now.
     * The list of allowed short names is defined in the function.
     * It is case-sensitive. It contains only 'ci' now.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $varName   The name of the variable to
     *                                        procced without $, { nor }.
     *
     * @return bool false if variable name $varName is shorter than the minimal
     * length and it isn't in the list of allowed short names nor declared in a
     * for loop (in which it would be nested), otherwise true.
     */
    protected function checkLength(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $varName)
    {
        $minLength = 3;
        $allowedShortName = array('ci', 'CI', 'id', 'ip', 'key', 'log', 'row', 'sql');

        $isLengthRight = true;
        // cleans variable name
        $varName = ltrim($varName, '_');
        if (strlen($varName) <= $minLength) {
            // skips adding an error, if it is a specific variable name
            if (in_array($varName, $allowedShortName)) {
                return $isLengthRight;
            }
            // skips adding an error, if the variable is in a for loop
            if (false !== self::_isInForLoop($phpcsFile, $stackPtr, $varName)) {
                return $isLengthRight;
            }
            // adds the error message finally
            $error = 'Very short'
                . (
                    $minLength > 0 ?
                    ' (i.e. less than ' . ($minLength + 1) . ' chars)'
                    : ''
                )
                . ', non-word variables like "' . $varName
                . '" should only be used as iterators in for() loops.';
            $phpcsFile->addError($error, $stackPtr);
            $isLengthRight = false;
        }
        return $isLengthRight;
    }//end checkLength()

    /**
     * Returns the position of closest previous T_FOR, if token associated with
     * $stackPtr in $phpcsFile is in a for loop, otherwise false.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $varName   The name of the variable to
     *                                        procced without $, { nor }.
     *
     * @return int|bool Position of T_FOR if token associated with $stackPtr in
     *                  $phpcsFile is in the head of a for loop, otherwise false.
     */
    private static function _isInForLoop(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $varName)
    {
        $keepLookingFromPtr = $stackPtr;
        while (false !== $keepLookingFromPtr) {
            // looks if it is in (head or body) of a for loop
            $forPtr = self::_isInForLoopHead($phpcsFile, $keepLookingFromPtr);
            if (false === $forPtr) {
                $forPtr = self::_isInForLoopBody($phpcsFile, $keepLookingFromPtr);
            }
            // checks if it is declared in here and prepares next step
            if (false !== $forPtr) {
                if (false !== self::_isDeclaredInForLoop($phpcsFile, $forPtr, $varName)) {
                    return $forPtr;
                }
                $keepLookingFromPtr = $forPtr;
            } else {
                $keepLookingFromPtr = false;
            }
        }
        return false;
    }//end _isInForLoop()

    /**
     * Returns the position of closest previous T_FOR, if token associated with
     * $stackPtr in $phpcsFile is in the head of a for loop, otherwise false.
     * The head is the code placed between parenthesis next to the key word
     * 'for' : for (<loop_head>) {<loop_body>}.
     * 
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * 
     * @return int|bool Position of T_FOR if token associated with $stackPtr in
     *                  $phpcsFile is in the head of a for loop, otherwise false.
     */
    private static function _isInForLoopHead(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $isInForLoop = false;
        $tokens = $phpcsFile->getTokens();
        $currentTk = $tokens[$stackPtr];
        if (array_key_exists('nested_parenthesis', $currentTk)) {
            $nestedParenthesis = $currentTk['nested_parenthesis'];
            foreach ( $nestedParenthesis as $openParPtr => $closeParPtr) {
                $nonWhitspacePtr = $phpcsFile->findPrevious(
                    array(T_WHITESPACE),
                    $openParPtr - 1,
                    null,
                    true,
                    null,
                    true
                );
                if (false !== $nonWhitspacePtr) {
                    $isFor = T_FOR === $tokens[$nonWhitspacePtr]['code'];
                    if ($isFor) {
                        $isInForLoop = $nonWhitspacePtr;
                        break;
                    }
                }
            }
        }
        return $isInForLoop;
    }//end _isInForLoopHead()

    /**
     * Returns the position of closest previous T_FOR, if token associated with
     * $stackPtr in $phpcsFile is in the body of a for loop, otherwise false.
     * The body are the instructions placed after parenthesis of a 'for'
     * declaration, enclosed with curly brackets usually.
     * 'for' : for (<loop_head>) {<loop_body>}.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return int|bool Position of T_FOR if token associated with $stackPtr in
     *                  $phpcsFile is in the body of a for loop, otherwise false.
     */
    private static function _isInForLoopBody(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $isInForLoop = false;
        $tokens = $phpcsFile->getTokens();
        // get englobing hierarchy
        $parentPtrAndCode = $tokens[$stackPtr]['conditions'];
        krsort($parentPtrAndCode);

        // looks for a for loop having a body not enclosed with curly brackets,
        // which involves that its body contains only one instruction.
        if (is_array($parentPtrAndCode) && ! empty($parentPtrAndCode)) {
            $parentCode = reset($parentPtrAndCode);
            $parentPtr = key($parentPtrAndCode);
            $openBracketPtr = $tokens[$parentPtr]['scope_opener'];
        } else {
            $parentCode = 0;
            $parentPtr = 0;
            $openBracketPtr = 0;
        }
        $openResearchScopePtr = $stackPtr;
        // recursive search, since a for statement may englobe other inline
        // control statement or may be near to function calls, etc...
        while (false !== $openResearchScopePtr) {
            $closeParPtr = $phpcsFile->findPrevious(
                array(T_CLOSE_PARENTHESIS),
                $openResearchScopePtr,
                null,
                false,
                null,
                true
            );
            // is there a closing parenthesis with a control statement before
            // the previous instruction ?
            if (false !== $closeParPtr) {
                // is there no opening curly bracket specific to
                // set of instructions, between the closing parenthesis
                // and the current token ?
                if ($openBracketPtr < $closeParPtr) {
                    // starts the search from the token before the closing
                    // parenthesis, if it isn't a for statement
                    $openResearchScopePtr = $closeParPtr - 1;
                    // is this parenthesis associated with a for statement ?
                    $closeParenthesisTk = $tokens[$closeParPtr];
                    if (array_key_exists('parenthesis_owner', $closeParenthesisTk)) {
                        $mayBeForPtr = $closeParenthesisTk['parenthesis_owner'];
                        $mayBeForTk = $tokens[$mayBeForPtr];
                        if (T_FOR === $mayBeForTk['code']) {
                            return $mayBeForPtr;
                        }
                    }
                } else {
                    // if it is about a for loop, don't go further
                    // and detect it after one more loop execution, do it now
                    if (T_FOR === $parentCode) {
                        return $parentPtr;
                    }
                    // starts the search from the token before the one
                    // englobing the current statement
                    $openResearchScopePtr = $parentPtr - 1;
                    // re-initialize variables about the englobing structure
                    if (is_array($parentPtrAndCode)) {
                        $parentCode = next($parentPtrAndCode);
                        $parentPtr = key($parentPtrAndCode);
                        $openBracketPtr = $tokens[$parentPtr]['scope_opener'];
                    }
                }
            } else {
                $openResearchScopePtr = false;
            }
        }
        // looks for a for loop having a body enclosed with curly brackets
        foreach ($parentPtrAndCode as $parentPtr => $parentCode) {
            if (T_FOR === $parentCode) {
                return $parentPtr;
            }
        }
        return false;
    }//end _isInForLoopBody()

    /**
     * Returns true if a variable declared in the head of the for loop pointed
     * by $forPtr in file $phpcsFile has the name $varName.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $forPtr    The position of the 'for' token
     *                                        in the stack passed in $tokens.
     * @param string               $varName   The name of the variable to
     *                                        procced without $, { nor }.
     *
     * @return int|bool true if a variable declared in the head of the for loop
     * pointed by $forPtr in file $phpcsFile has the name $varName.
     */
    private static function _isDeclaredInForLoop(PHP_CodeSniffer_File $phpcsFile, $forPtr, $varName)
    {
        $isDeclaredInFor = false;
        $tokens = $phpcsFile->getTokens();
        $forVarPtrs = self::_getVarDeclaredInFor($phpcsFile, $forPtr);
        foreach ($forVarPtrs as $forVarPtr) {
            $forVarTk = $tokens[$forVarPtr];
            // get variable name
            $matches = array();
            preg_match('/^\$\{?([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}?/', $forVarTk['content'], $matches);
            $forVarName = $matches[1];
            if (0 === strcmp($forVarName, $varName)) {
                $isDeclaredInFor = $forVarPtr;
                break;
            }
        }
        return $isDeclaredInFor;
    }//end _isDeclaredInForLoop()

    /**
     * Returns list of pointers to variables declared in for loop associated to
     * $forPtr in file $phpcsFile.
     *
     * All pointers in the result list are pointing to token with code
     * T_VARIABLE. An exception is raised, if $forPtr doesn't point a token with
     * code T_FOR.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $forPtr    The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return array List of pointers to variables declared in for loop $forPtr.
     */
    private static function _getVarDeclaredInFor(PHP_CodeSniffer_File $phpcsFile, $forPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $forTk = $tokens[$forPtr];
        if (T_FOR !== $forTk['code']) {
            throw new PHP_CodeSniffer_Exception('$forPtr must be of type T_FOR');
        }
        $openParPtr = $forTk['parenthesis_opener'];
        $openParenthesisTk = $tokens[$openParPtr];
        $endOfDeclPtr = $phpcsFile->findNext(array(T_SEMICOLON), $openParPtr);
        $forVarPtrs = array();
        $varPtr = $phpcsFile->findNext(
            array(T_VARIABLE),
            $openParPtr + 1,
            $endOfDeclPtr
        );
        while (false !== $varPtr) {
            $forVarPtrs [] = $varPtr;
            $varPtr = $phpcsFile->findNext(
                array(T_VARIABLE),
                $varPtr + 1,
                $endOfDeclPtr
            );
        }
        return $forVarPtrs;
    }//end _getVarDeclaredInFor()

    /**
     * Returns the position of first occurrence of a PHP variable starting with
     * $ in $haystack from $offset.
     *
     * @param string $haystack The string to search in.
     * @param int    $offset   The optional offset parameter allows you to
     *                         specify which character in haystack to start
     *                         searching. The returned position is still
     *                         relative to the beginning of haystack.
     *
     * @return mixed The position as an integer
     *               or the boolean false, if no variable is found.
     */
    private static function _getVariablePosition($haystack, $offset = 0)
    {
        $var_starts_at = strpos($haystack, '$', $offset);
        $is_a_var = false;
        while (false !== $var_starts_at && ! $is_a_var) {
            // makes sure that $ is used for a variable and not as a symbol,
            // if $ is protected with the escape char, then it is a symbol.
            if (0 !== strcmp($haystack[$var_starts_at - 1], '\\')) {
                if (0 === strcmp($haystack[$var_starts_at + 1], '{')) {
                    // there is an opening brace in the right place
                    // so it looks for the closing brace in the right place
                    $hsChunk2 = substr($haystack, $var_starts_at + 2);
                    if (1 === preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*\}/', $hsChunk2)) {
                        $is_a_var = true;
                    }
                } else {
                    $hsChunk1 = substr($haystack, $var_starts_at + 1);
                    if (1 === preg_match('/^[a-zA-Z_\x7f-\xff]/', $hsChunk1)) {
                        // $ is used for a variable and not as a symbol,
                        // since what follows $ matchs the definition of
                        // a variable label for PHP.
                        $is_a_var = true;
                    }
                }
            }
            // update $var_starts_at for the next variable
            // only if no variable was found, since it is returned otherwise.
            if ( ! $is_a_var) {
                $var_starts_at = strpos($haystack, '$', $var_starts_at + 1);
            }
        }
        if ($is_a_var) {
            return $var_starts_at;
        } else {
            return false;
        }
    }//end _getVariablePosition()
}//end class

?>
