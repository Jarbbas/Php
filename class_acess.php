<?php
/** Existem 3 niveis de controlo de visibilidade para as variaveis */
class Car {

        public $wheels = 4; //public tem a mesmas permissões que var e é visivel em todo o código
        protected $design; //protected é apenas visivel dentro da class e das classes "filhos"
        private $engine; // private é exclusivo dentro da class

        function ShowEngine()
        {
           echo $this -> engine = "This car has a V8 engine" . "<br>";
        }

}

class Suv extends Car {

    function ShowDesign()
    {
       echo $this -> design = "Both car's share the same design lines" . "<br>";
    }

}

$ford = new Car();
$ford_suv = new Suv();

echo "All car's have " . $ford -> wheels . " wheels (public)" . "<br>";

/**Desta através do metodo já é possivel aceder à propriedade protegida
 * sem isso php devolve erro a dizer que não temos permissões
 * $ford_suv -> design; devolve erro
 */

echo $ford_suv -> ShowDesign();

/* echo $ford -> engine; apesar de este objeto pertecer à classe pai
    vai devolver erro igual, porque a permissão private
     e protected apenas abrangem as propriedades e os metodos dentro da ou das respetivas classes
*/

echo $ford -> ShowEngine(); //já devolver valor