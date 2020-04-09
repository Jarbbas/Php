<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    
<?php

/* 
PHP Link for manual reference for string references
https://www.php.net/manual/en/ref.array.php
*/


$list = [343,34,323,23,54,232,453]; //array new mode

echo max($list); //max — encontra o valor mais elevado na array e devolve

echo "<br>";
    
echo min($list); // min - Tal como o Max encontra o mais pequenon e devolve


echo "<br>";

sort($list); //ordena a array
    
echo "<br>";

print_r($list); //print_r — Faz um print para o ecrã de forma a que nós "humanos" possamos "entender"



?>

</body>
</html>