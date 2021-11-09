<?php
//Outside function
$msg = "Welcome to Thailand"; //Global Scope
$name = "Mr.Mark";
$x = 5;
$y = 10;
$z =0;
function myTest(){
    //Inside Function
    global $name;
    global $x,$y;
    $msg = 'Hello '; //Local Scope
    
    //$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    $y = $x + $y;
    echo $msg, $name,' ',$y, "<br />";
}

echo $msg . "<br />";
myTest();
