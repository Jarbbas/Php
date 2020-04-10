<?php

    //Formato antigo de declarar uma array
    //$numberList = array();
        
    //Este é como se declara arrays neste momemnto, e inclusivo é a forma transversal a muitas linguagens web      
    $numberList = [1,2,3,4,'teste','<h1>Hello</h1>'];

    // print_r é uma função core que imprimi a array num formato que "nós" humanos conseguimos ler             
    print_r ($numberList);

    /*as arrays começam a sua contagem no index 0, logo neste caso que estamos 
    a pedir com o index 1, o conteudo da array na 2 posição
    */
    echo $numberList[1];    
