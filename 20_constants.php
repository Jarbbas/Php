<?php
  
  /*  
    As CONSTANTES não tem o dollar sign ($) Uma constante é um identificador (nome) para um valor único.
    Como o nome sugere, esse valor não pode mudar durante a execução do script
    (exceto as constantes mágicas, que não são constantes de verdade). 
    As constantes são case-sensitive por padrão. 
    Por convenção, identificadores de constantes são sempre em maiúsculas. 
    E antes do php 5.3, as CONSTANTES apenas poderiam ser defenias através da função
    define();
    As CONSTANTES podem:
    - ser defenidas e acedidas em todo o lado, independentemente das regras do scope das variáveis;
    - NÃO PODEM ser redefenidas depois de terem sido declaradas;
  */

define("CONSTANT", "Hello world."); //Define uma constante

echo CONSTANT; // outputs "Hello world."
echo "<br>";  

/* 

Works as of PHP 5.3.0
const CONSTANT = 'Hello World';
echo CONSTANT;

Works as of PHP 5.6.0
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

Também podemos usar arrays para constantes
*/

define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));

echo ANIMALS[1]; // outputs "cat"
