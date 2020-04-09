<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associaty Arrays</title>
</head>
<body>
    
<?php    
  
    $number = [10,20,49];
    
    $names = ["frist_name" =>'Emanuel', "last_name" => 'Rodrigues'];
    
    //print_r here to see array structed, associaty array, insted of calling by it's index number, i call by it ID or name that was associated. 
    
   /* print_r($number); 
    echo "<br>";
    print_r($names);*/
    
    echo $names["frist_name"] ." ". $names["last_name"]; 
?>    
</body>
</html>