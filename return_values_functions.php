<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return values functions</title>
</head>
<body>
    
<?php

/* Retorno dos valores através das funções*/

/* Nota IMPORTANTE- valores são designados da direita para a esquerda, e em vez de apenas
    apenas fazer o print do valor, o return, faz o retorno do valor e termina a função
    Da mesma forma, o valor fica guardado e pode ser reutilzado.
*/

function addNumbers($number1, $number2){
        $sum = $number1 + $number2;
        return $sum;
}

  $result = addNumbers(1,2);
  $result = addNumbers(1, $result);

  echo $result;



?>

</body>
</html>