<?php


/**

A palindrome is a word that reads the same backward or forward.

Write a function that checks if a given word is a palindrome. Character case should be ignored.

For example, isPalindrome("Deleveled") should return true as character case should be ignored, resulting in "deleveled", which is a palindrome since it reads the same backward and forward.

 * 
 */

class Palindrome
{
    public static function isPalindrome($word)
    {
        $t = strlen($word);
         
        $add = $t % 2;
        
        
        $first = substr($word, 0, ($t+$add)/2);
        
        $second = strrev(substr($word, ($t)/2, $t));
        
        if (strtolower($first) === strtolower($second)) 
            return true;

        return false;
    }
}

echo Palindrome::isPalindrome('Deleveled');