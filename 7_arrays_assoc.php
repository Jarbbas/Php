<?php    
  
    $number = [10,20,49];
    
    $names = ["frist_name" =>'Emanuel', "last_name" => 'Rodrigues'];
    
    /*
        Arrays associativas tal como as arrays normais, funcionam à base de index
        mas enquanto que a array 
        $number tem um index númerico
        $names recorre a IDs especificos em vez de números
    */
    
    print_r($number); 
    echo "<br>";
    print_r($names);
    echo "<br>";
    echo $names["frist_name"] ." ". $names["last_name"]; 
