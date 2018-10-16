<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            This is a promise<br />
            <code>

            </code>
        </div>
        <script>


var p = new Promise(function(resolve, reject){
    resolve(2);
});

//p.then(function(response){
//    console.log(response);
//});

p.then(first)
        .then(second)
        .then(third)
        .then(function(response){
    console.log(response)
});

            function first(value) {
                return value + 2;
            }

            function second(value) {
                return value + 2;
            }

            function third(value) {
                return value + 2;
            }

        </script>
    </body>
</html>
