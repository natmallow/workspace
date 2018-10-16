<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div>
    Object constructors<br />
    <code>

    </code>
</div>
<div>
    lexical scoping <br />
    <em>
        variables that are defined outside your scope are available. <br>
        but variables inside are not available outside.      
    </em>
    <code>    
        let i = 1; //available
    </code>
    <code>
        const f = () => {<br>
        var t = 2;
        console.log(i);<br>
        }<br>
    </code>
    <code>    
        console.log(t); //not available
    </code>
</div>

<div>
    closures <br />
    <code>
        for (let i = 0; i < 3; i++ ){
            setTimeout( () => {
                console.log(i);
            }, 1000); 
        }
    </code>
</div>

<div>
    Promise <br />
    <code>
        let promiseToCleanTheRoom = new Promise(function(resolve, reject) {

          //cleaning the room

          let isClean = false;

          if (isClean) {
            resolve('Clean');
          } else {
            reject('not Clean');
          }

        });

        promiseToCleanTheRoom.then(function(fromResolve) {
          console.log('the room is' + fromResolve);
        }).catch(function(fromReject){
                console.log('the room is' + fromReject);
        })
    </code>
</div>

<div>
    Event Delegation<br />
    <code>

    </code>
</div>




