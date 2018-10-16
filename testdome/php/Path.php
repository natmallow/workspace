<?php


/**
 * 

Write a function that provides change directory (cd) function for an abstract file system.

Notes:

    Root path is '/'.
    Path separator is '/'.
    Parent directory is addressable as '..'.
    Directory names consist only of English alphabet letters (A-Z and a-z).
    The function should support both relative and absolute paths.
    The function will not be passed any invalid paths.
    Do not use built-in path-related functions.

For example:

$path = new Path('/a/b/c/d');
$path->cd('../x')
echo $path->currentPath;

should display '/a/b/c/x'.

 */

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
        
        $opperators = ['./','../','/'];
        
        $cp = explode('/', $this->currentPath);
        $np = explode('/', $newPath);
        
        foreach($np as $k) {
           
            if ($k == '..') {
                 array_pop($cp);
            } elseif (preg_match('/[0-9a-zA-Z]+$/', $k)) {
                 array_push($cp, $k);  
            } else {
                echo '<br><br>Wrong opperation!<br>';
            }
        }
                
        $this->currentPath = implode('/', $cp);
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;