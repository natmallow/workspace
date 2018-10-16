<?php
class Pipeline
{
    
    
    
    public static function make_pipeline(...$funcs)
    {
        return function($arg) use ($funcs)
        {
                
         $cv = $arg; 
               
            foreach ($funcs as $f){
                $cv = $f($cv);
            }
            
          return $cv;
        };
    }
}

$fun = Pipeline::make_pipeline(
    function($x) { return $x * 3; }, 
    function($x) { return $x + 1; },
    function($x) { return $x / 2; });
echo $fun(3); # should print 5