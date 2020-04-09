<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants</title>
</head>
<body>

  <?php
  
  /*  These are the differences between constants and variables:

    Constants do not have a dollar sign ($) before them;
    Prior to PHP 5.3, Constants may only be defined using the define() function, not by simple assignment;
    Constants may be defined and accessed anywhere without regard to variable scoping rules;
    Constants may not be redefined or undefined once they have been set; and
    Constants may only evaluate to scalar values. As of PHP 5.6 it is possible to 
    define array constant using const keywords and as of PHP 7 array constants
    can also be defined using define() You may use arrays in constant scalar expressions
     (for example, const FOO = array(1,2,3)[0];), but the end result must be a value of allowed type.
ED */

define("CONSTANT", "Hello world.". "<br>");

echo CONSTANT; // outputs "Hello world."
//echo Constant; // outputs "Constant" and issues a notice.
echo "<br>";  

/* Works as of PHP 5.3.0
const CONSTANT = 'Hello World';

echo CONSTANT;*/

/* Works as of PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;
echo "<br>";

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat" */

// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));

echo ANIMALS[1]; // outputs "cat"

  ?>

</body>
</html>