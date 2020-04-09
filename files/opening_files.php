<?php

//variavel com o nome do ficheiro
$file = "exemple.txt";

//abre um ficheiro, se este não existir cria
$handler = fopen($file,'w');

//boas politicas sugerem que fechemos o ficheiro a seguir
fclose($handler);