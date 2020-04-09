<?php

// Frist letter in a Class has to be in CAPITAL letters
//this is true across all programing languages and its set an norm
class Car {

        function MoveWheels(){

            echo "The car is moving";
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
$ford_fiesta = new Car();
$merceder_benz = new Car();

// E de forma a podermos usar metodos da class recorremos ao " -> "

$ford_fiesta -> MoveWheels();
$merceder_benz -> TurOnRadio();

