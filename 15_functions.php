<?php
/**
 * 
 * Uma função é um bloco de instruções que podem ser usadas repetidamente em um programa.
 * Uma função não será executada automaticamente quando uma página for carregada.
 * Uma função será executada por uma chamada para a função.
 * Importantes em qualquer linguagem de programação, principalmente no php
 * uma vez que php tenta, reutilizar o máximo código possivel,
 * e tal como as PSRs defendem, o php deve decalar ou causar efeitos
 * e as funções permitem isso 
 */

    function init() { //declaração de uma função
            greetings(); //outras funções
            tell_time();
    };

    function tell_time() {
        echo "Today is " . date("d-m-Y") . "<br>";
    };

    function greetings() {
        echo "Hello World" ."<br>";
    };

    //como chamamos uma função
    init(); 
        