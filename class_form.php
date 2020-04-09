<?php
    include "class_car4.php";

    if(class_exists("Car"))
    {
        $validation_class = "A class Car existe";
    } else {
        $validation_class = "A class não Car existe";
    }

    echo $validation_class . "<br>";

    if(property_exists("Car","model"))
    {
        $validation_property = "A propriedade existe";
    } else {
        $validation_property = "A propriedade não existe";
    }
    
    echo $validation_property . "<br>";
    echo $ford -> model;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 5 </title>
</head>
<body>
    
    <form action="class_car4.php" method="post">
      <input type="text" name="userName" placeholder="Enter the Car model">
      <input type="submit" name="submit">  
    </form>

</body>
</html>
