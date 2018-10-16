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
            This is a callback<br />
            <code>
            first(2, function (firstResult, err) {<br />
                if (!err) {<br />
                    second(firstResult, function (secondResult, err) {<br />
                        if (!err) {<br />
                            third(secondResult, function (thirdResult, err) {<br />
                                if (!err) {<br />
                                    console.log(thirdResult);<br />
                                }<br />
                            });<br />
                        }<br />
                    });<br />
                }<br />
            });<br />
<br /><br /><br />



            function first(value, callback) {<br />
                callback(value + 2, false);<br />
            }<br /><br />

            function second(value, callback) {<br />
                callback(value + 2, false);<br />
            }<br />

            function third(value, callback) {<br />
                callback(value + 2, false);<br />
            }<br />
            </code>
        </div>
        <script>
            first(2, function (firstResult, err) {
                if (!err) {
                    second(firstResult, function (secondResult, err) {
                        if (!err) {
                            third(secondResult, function (thirdResult, err) {
                                if (!err) {
                                    console.log(thirdResult);
                                }
                            });
                        }
                    });
                }
            });




            function first(value, callback) {
                callback(value + 2, false);
            }

            function second(value, callback) {
                callback(value + 2, false);
            }

            function third(value, callback) {
                callback(value + 2, false);
            }

        </script>
    </body>
</html>
