<?php

/* Retorno dos valores através das funções*/

/* Nota IMPORTANTE- valores são designados da direita para a esquerda, e em vez de apenas apenas fazer o print do valor.
  A palavra reservad return faz o retorno do valor e termina a função da mesma forma, 
  o valor fica guardado, para que possa ser reutilzado.
*/

function addNumbers($number1, $number2){
        $sum = $number1 + $number2;
        return $sum;
}

  $result = addNumbers(1,2);
  $result = addNumbers(1, $result);

  echo $result;
