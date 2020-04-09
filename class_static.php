<?php
/** As variaveis static são exclusivas das Classes e não podem ser atribuidas
 * a instancias, mas podem ser acedidas fora da class
 */
class Car {

        static $wheels = 4; //propriedade exclusiva da class

        function WheelsNumber()
        {
           /** para aceder à propriedade, fazemos referencia à class e usamos ::
            * Bem como temos que usar $ para fazer referencia à variavel Statica
             */
          echo Car::$wheels; 
        }

}


$ford = new Car();

//$ford -> wheels; 
//gera erro porque estamos aceder a uma propriedade statica

Car::WheelsNumber();

/** Gera Erro não podemos atribuir valores Static a propriedades de instancias */
echo $ford -> Car::WheelsNumber();
