<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passing params trough functions</title>
</head>
<body>

    <?php

        function greetings($message){

            echo $message;

        }

        function addNumbers($number1, $number2){

            $sum = $number1 + $number2;
            echo $sum;

        }

        greetings("Hello World" ."<br>");
        addNumbers(1,2);

    ?>

</body>
</html>