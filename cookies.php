<?php



//Cookie paramateres

$cookie_name = "CookieMonster";
$cookie_value = 100;
$cookie_expiration = time() + (60*6*24*7); //this adds a week to the cookie date 

//this is a in built PHP function and takes 3 parameteres
setcookie($cookie_name,$cookie_value,$cookie_expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    
<?Php
  
        //validation if Cookie exists
    if(isset($_COOKIE["CookieMonster"])){
        
     $cookie_variable_name = $_COOKIE["CookieMonster"];
        
        /*this will always display the cookie value and not it's name
            and with cookies we can return a personalized information for the user
        */
        
        echo $cookie_variable_name;
        
        }else{
            die("Cookie not found");
    }
           
?>    
    
</body>
</html>