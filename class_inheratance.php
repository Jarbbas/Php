<?php
/*
O conceito de herança nas Classes é como na vida real, com algumas nuances
Temos uma class Pai com propriedades e podesmos criar outra que irá "herdar" as suas propriedades
e metodos - através da palavra reservada "extends"
*/ 
    class Pai {

            var $olhos = "verdes"; 
            var $cabelo = "preto";
            var $sexo = "masculino";
            var $constituicao = "magro";
            var $idade;

            function PintarCabelo(){

                $this -> cabelo = "loiro"; 
            }
            
            function Treinar(){

               $this -> constituicao = "atlético";
            }
    }

    //class Filho vai herdar tudo do pai!
    class Filho extends Pai {

    }

    echo "Validação das classes:" . "<br>";
    //validação se a class Pai existe, no PHP é importante haver validações - boas práticas 
    if(class_exists("Pai"))
    {
        echo "Bem vindo pai" . "<br>";
    } else {
        echo "Não é desta que és pai" . "<br>";
    }

    //validação se a class Filho existe 
    if(class_exists("Filho"))
    {
        echo "Parabéns temos um filho" . "<br>";
    } else {
        echo "Nope, still single parent" . "<br>";
    }
    echo "<br>";//fim das validações

    //nova instancia de um objeto com o nome $emanuel baseado na class Pai
    $emanuel = new Pai();

    //nova instancia de um objeto, mas baseado na class Filho, que herdou propriedades e metodos do pai
    $filho_do_emanuel = new Filho();


    echo "O pai tem olhos " . $emanuel -> olhos . "<br>";
    echo "O pai cabelo da cor " . $emanuel -> cabelo . "<br>";
    echo "É do sexo " . $emanuel -> sexo . "<br>";
    echo "E tem um corpo " . $emanuel -> constituicao . "<br><br>";

    $filho_do_emanuel -> PintarCabelo();

    echo "Mas o filho tem a cor do cabelo " . $filho_do_emanuel -> cabelo;
    echo " enquanto que o pai tem a cor " . $emanuel -> cabelo . "<br>";

    echo "Mas como o pai queria ser mais forte, treinou para ficar com um corpo "; 
    $emanuel -> Treinar();
    echo $emanuel -> constituicao . "<br>";

    $emanuel -> idade = 32;

    while($filho_do_emanuel -> idade < $emanuel -> idade)
    {
        $filho_do_emanuel -> idade++;
        echo $filho_do_emanuel -> idade .", ";
    }
    echo "<br>";
    $sucess_message = "Parabéns, já tens a idade do teu pai";
    $fail_message = "Ainda tens que crescer muito"; 

    $idade = ($filho_do_emanuel -> idade == $emanuel -> idade) ?  $sucess_message : $fail_message;
    echo $idade;

    echo "<br>";
    echo "O pai tem olhos " . $emanuel -> olhos . "<br>";
    echo "O pai cabelo da cor " . $emanuel -> cabelo . "<br>";
    echo "É do sexo " . $emanuel -> sexo . "<br>";
    echo "E tem um corpo " . $emanuel -> constituicao . "<br><br>";
    echo "<br>";
    echo "O filho tem olhos " . $filho_do_emanuel -> olhos . "<br>";
    echo "O filho cabelo da cor " . $filho_do_emanuel -> cabelo . "<br>";
    echo "É do sexo " . $filho_do_emanuel -> sexo . "<br>";
    echo "E tem um corpo " . $filho_do_emanuel -> constituicao . "<br><br>";