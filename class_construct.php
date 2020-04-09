<?php
/*
As funções "construturas" são metodos especificos das classes,
e estas funções vão sempre correr automáticamente 
sempre que instaciarmos um novo objecto
*/ 
    class Client {

            var $login = "Client haven't yet loged in"; 

            function __construct(){

                $this -> login = "cliente logado"; 
            }
            
    }

    echo "Validação das classes:" . "<br>";
    //validação se a class Pai existe, no PHP é importante haver validações - boas práticas 
    if(class_exists("Client"))
    {
        echo "Class exists" . "<br>";
    } else {
        echo "Class does not exist" . "<br>";
    }

    /** Apesar da propriedade login estar definida a função construtura 
     * assim que instanciarmos um novo objeto, automáticamente
     * fez um update à mesma
     */
$novo_cliente = new Client();
echo $novo_cliente -> login;
