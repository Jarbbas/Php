<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach loop</title>
</head>
<body>

    <?php

/* The foreach construct provides an easy way to iterate over arrays. 
foreach works only on arrays and objects, and will issue an error when you try to use it on a variable
with a different data type or an uninitialized variable. */


    $numbers =[1,2,3,4,5,6,7,8,9];
        /*option 1*/
        foreach ($numbers as $number) {
                echo $number . "<br>";
        }
       
        /*Option 2*/
        foreach ($numbers as $key => $number) {
            echo $key ." ". $number . "<br>";
    }

    ?>

</body>
</html>