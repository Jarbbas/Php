<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IF statement</title>
</head>
<body>
    <?php
    
    /*if statements, can be used to make decisions, based on this returned value, example */
        
    /* in an if, else statement, the normal use, is that the statement is check's the condition and stops, IF it's value is TRUE */
    if(2 > 1){
        echo "True, 2 is larger than 1"; 
        
        /* if not jumps to the next statement, and so on */
    }elseif(2 < 3){
        echo "duhh, off course 2 is less then 3";
        
        /* until finds the end of all statements*/
    }else{
        echo "false";
    }
    ?>
</body>
</html>