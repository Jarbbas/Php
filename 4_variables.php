<?php

/**  As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. 
 * Os nomes de variável são case-sensitive. 
 * Nomes de variável seguem as mesmas regras como outros rótulos no PHP. 
 * Um nome de variável válido inicia-se com uma letra ou sublinhado, 
 * seguido de qualquer número de letras, números ou sublinhados. 
 * Em uma expressão regular, poderia ser representado assim: 
 * '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'  
 * */

    $variavel = 'Emanuel';
    $Variavel = 'Rodrigues';
    echo "$var, $Var";      // exibe "Bob, Joe" porque as variaveis são case-sensitive

    $4site = 'not yet';     // ERRO; variáveis não podem começar com números
    $_4site = 'not yet';    // válido; começa com um sublinhado
    $täyte = 'mansikka';    // válido; 'ä' é um caracter ASCII (extendido) 228
    