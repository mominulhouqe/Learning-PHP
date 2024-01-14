<?php

function myNumber(){
   static $qty = 10;
    echo $qty."</br>";
    $qty+=1;

}

myNumber();
myNumber();
myNumber();









?>