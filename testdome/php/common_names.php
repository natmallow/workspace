<?php

/**
 * 

Implement the find_common function. When passed two arrays of names, it will return an array containing the names that appear in either or both arrays. The returned array should have no duplicates.

For example, calling Names::find_common(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']) should return ['Emma', 'Olivia', 'Ava', 'Sophia'] in any order.

 */

class Names
{
    public static function find_common($array1, $array2)
    {
        $rtnArr = array_unique(array_merge($array1, $array2));

        return $rtnArr;
    }
}

$names = Names::find_common(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia