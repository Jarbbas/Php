<?php
/**
 * O while loop vai correr dentro de um ciclo até devolver um valor falso, 
 * e ai salta fora.
 * deste caso o contador vai correr até o valor 9 e depois termina
 */
    $counter = 0;
    while($counter < 10) {
        echo "Let's count ".$counter." <br>";
        $counter++; //increments 1 value to counter variable
    }
