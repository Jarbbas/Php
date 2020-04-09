<?php

// Frist letter in a Class has to be in CAPITAL letters
//this is true across all programing languages and its set an norm
class Car {

        function MoveWheels(){

            echo "the wheels are moving";
        }

}

if(method_exists("Car","MoveWheels")){

    echo "Method exists";

}   else  {

    echo "Nope";
}

?>