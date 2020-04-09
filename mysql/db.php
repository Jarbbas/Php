<?php 

$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 

    if (!$connection) {
        die("DB connect Failed! Please, check you DataBase connections");         
    }

?>
