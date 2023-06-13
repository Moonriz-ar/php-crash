<h1>02 - variables</h1>

<!-- php data types -->
<!-- 
- string: series of characters surrounded by quotes
- integer: whole numbers
- float: decimal numbers
- boolean: true or false
- array: special variable, which can hold more than one value
- object: a class
- NULL: empty variable
- resource: special variable that holds a resource
-->

<!-- variable rules -->
<!-- 
- variables must be prefixed with $
- variables must start with a letter or the underscore character
- variables can't start with a number
- variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _)
- variables are case sensitive ($name and $NAME are two different variables)
-->

<?php
$name = "Andrea"; // string
$age = 30; // int
$hasKids = false; // boolean 
$cash_on_hand = 20.75; //float

echo $cash_on_hand;
var_dump($cash_on_hand);

echo $name . ' is ' . $age . ' years old'; // use period to concatenate
echo "$name is $age years old";

echo 5 + 5;
$x = '5' + '5';
var_dump($x);
echo 5 * 6;

// constants
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
