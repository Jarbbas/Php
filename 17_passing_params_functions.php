<?php
/**
 * É possivel passar parametros e variaveis às funções, temos é que fazer referencias aos mesmos no inicio da mesma
 * 
 */
        function greetings($message) { //esta função recebe um parametro que é a variavel $message
 
            echo $message;

        }

        function addNumbers($number1, $number2) { //mencionar que a função recebe 2 variàveis $number1 e $number2

            $sum = $number1 + $number2;
            echo $sum;

        }

        //como referiamos quais os valores das variáveis que mencionamos nas funções.
        greetings("Hello World" ."<br>");
        addNumbers(1,2);
