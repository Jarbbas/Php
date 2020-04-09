<?php

$names = ["emanuel", "carla", "hello world"]; //array of names for validation below

if(isset($_POST['submit'])){ 
    
    $userName = $_POST["userName"];
    $passWord = $_POST["passWord"];

    $form_userName_registration = (strlen($userName) > 1 && strlen($userName) <= 12 ) ? true : false ;

    if($form_userName_registration == true){
        $userName_validation = (in_array($userName, $names)) ? true : false ;
        $message = ($userName_validation == true) ? "This user already exists" : "Welcome ". $userName;
        echo $message;
    } else {
                echo "You're User Name does not meet the requirements";
    }

}
?>