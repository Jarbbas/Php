<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</body>
</html>
<!--

Operadores de comparação
      
      igual ==
      idêntico mesmo formato mesmo tipo ===
      comparação > <  >= <= <>
      não igual !=
      não idêntico !==
    

Operadores lógicos
      
     And (e) &&
     Or (ou)  ||
     Not (não) !
      

 Referência importantes

    Concatenação " $var1 . $var2 " cola as duas variáveis
    Atribuição de concatenação " $var1 .= $var2 " semelhante à concatenação normal, mas em vez de juntar, vamos atribuir à variavel

    Incrementação    $var++ aumenta 1 valor, usado normalmente em loops
    Decrementação    $var-- dimminui 1 valor

-->

<?php 
//exemplos
if(4 === 4 && 5 < 10 ) { //4 é identico a 4 e 5 é menor que 10

    echo "Verdade" . "<br>";

}


if(4 !== 4 || 5 < 10 ) { //4 não é identico a 4 (mentira) mas ||(ou) 5 é menor que 10

    echo "Verdade" . "<br>"; // verdade porque basta, haver uma validação verdadeira

}


if(4 <> 5) { //4 não é igual a 5

    echo "Verdade" . "<br>";

}

    $var1 = "Hello";
    $var2 = "World";
    $number = 2;

    echo $concatenate = $var1 . $var2."<br>";
    echo $assignconcatenate = $var1 .= "World"."<br>";
