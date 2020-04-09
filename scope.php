<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scope</title>
</head>
<body>

    <?php
    
        $x = "outside"; //Global - value to x

        function convert(){
            global $x; //reserved PHP function, that transforms a argument value into Global
            $x = "insied"; //Local - value with a new value to x 
             return $x;
        }

        echo $x ."<br>"; //Prints tha frist x, that is declared outsied the function, and it can be acessed globally
        convert(); //converts x into a new value and turns into a global variable
        echo $x; //echos the new x
    ?>

</body>
</html>