<?php
//It will print from 0 to 10
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
//==================================================================================================================================
//SWITCH_CASE E.G

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//==================================================================================================================================
//FUNCTIONS E.G

function writeMsg()
{
    echo "Hello world!";
}

writeMsg(); // call the function

//==================================================================================================================================
//ARRAYS E.G
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//couting all the stuff inside the array 
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//sorting arrays
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

//sorting arrays in decending order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
