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
        <h1>Delegation</h1>
        <p>
            A way you can add an event listener once for multiple elements
            with support for adding extra children.
        </p>
        <button onclick="addLi('myList')"> add li </button>
        <ul id="myList">
            <li>One </li>
            <li>Two </li>
            <li>Three </li>
        </ul>
        
        <script>
           
            var i = 0;
            function addLi(t){
               var target = document.getElementById(t);
               
               let li = document.createElement("li");
                   li.innerHTML = `buck fo ya! ${i}`;
                   target.appendChild(li);
                   i++;
           }
            
            
            
            const myList = document.getElementById('myList');
            
            myList.addEventListener("click", function(e){
              console.log(e);
              console.log(e.target)
              var target = e.target;
              if(target.matches("li")){
                  //do something
                  target.style.backgroundColor = (target.style.backgroundColor == "red")?"":"red";
                  
              }
            });
        </script>
    </body>
</html>
