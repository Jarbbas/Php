<?php

/* Tal como o "for loop" temos o foreach que funciona na mesma maneira,
*  mas este aplica-se a array's
*/

    $numbers =[1,2,3,4,5,6,7,8,9];
        /*option 1*/

        foreach ($numbers as $number) {
                echo $number . "<br>";
        }
       
        /*Option 2*/
        foreach ($numbers as $key => $number) {
            echo $key ." ". $number . "<br>";
    }
