<?php
/*
conceito de class em OPP é criar um conjunto de propriedades e metodos que possam ser agrupados em "objectos"
semelhantes para que a sua utilização e manipulação seja mais fácil

para declarar propriedades em class, temos que recorer à palavra reservada var
*/ 
class Car {

        var $wheels = 4; //declaração de uma propriedade da class Car
        var $doors = 5;
        var $radio = 1;
        var $driver;
        var $model;

        function MoveCar(){

            echo "The car is moving";
        }

        function AllocateDriver(){

            /*dentro de uma class, recorremos à palavra reservada "this"
                para nos referirmos a uma das propriedades da mesma
            */

            $this -> driver = 1; 
        }
        
        function TurOnRadio(){

            echo "The radio is on!";
        }
}

/*  Para criarmos um objeto temos que "instanciar" a classe
    E primeiro de forma a que possamos utilizar esse objecto
    declaramos uma variavel e usamos a palavra reservada "new" 
    para instanciar e reutilizar essa classe
*/

$ford = new Car();

// E de forma a podermos usar metodos da class recorremos ao " -> 
$ford -> model = "Ford Fiesta"; //aqui estou atribuir um valor à propriedade model



