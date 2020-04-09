<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Texto dinâmico em HTML</title>
</head>
<body>

    <?php   
    //Exemplo de uma página php com contéudo HTML embutido, que é normal bem como o inverso
    
    // $name é uma variavel declarada com uma string
    $name = "Emanuel Rodrigues website";
        
    ?>

    <h1>

    <?php 
    // Aqui temos como código php pode ser embutido dentro de uma tag de HTML H1 
        
    echo $name;  //Aqui fazemos a impressão da variável para o ecrã através do comando echo 

    ?>
    
    </h1>

</body>
</html>
