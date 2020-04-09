<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    
    <?php
        print_r($_GET);
    

        $id = random_int(1,9);
        $button_name = "submit GET";
    ?>
        <a href="get.php?id=<?php echo $id; ?>" class="btn"><?php echo $button_name; ?></a>

</body>
</html>