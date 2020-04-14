<?php

/* a informação recebida do form.html 
 os dados são enviados através da variável $_POST 
Um array associativo de variáveis passados para o script atual via método HTTP POST 
quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor
do cabeçalho HTTP Content-Type na requisição.
$HTTP_POST_VARS contém a mesma informação inicial, 
mas não é uma superglobal. (Note que $HTTP_POST_VARS e $_POST são variáveis diferentes
e que o PHP manuseia-as diferentemente)
*/
$names = ["emanuel", "carla", "hello world"]; //array de nomes para validar

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
