    <?php

    //variavel com o nome do ficheiro
    $file = "exemple.txt";
    //abre um ficheiro, se este não existir cria
    $handler = fopen($file,'w');
    /*validação se o ficheiro existe, 
    se existir escreve, se não mensagem de erro*/
    if($handler)
    {
    //função fwrite vai substituir todo o conteudo do ficheiro            
    fwrite($handler,"i love PHP so much");
    } else {
        echo "we coulnd't find the file you were looking for";
    }

    //boas politicas sugerem que fechemos o ficheiro a seguir
    fclose($handler);