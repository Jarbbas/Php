<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>

    <?php

    /* Fucntions have to declared separated, but you i can use a function to call multiple functions in one step*/
    function init() {
            greetings();
            tell_time();
    };

    function tell_time() {
        echo "Today is " . date("d-m-Y") . "<br>";
    };

    function greetings() {
        echo "Hello World" ."<br>";
    };

    //main function i called 
    init();
        
    ?>

</body>
</html>