    <?php

    //variavel com o nome do ficheiro
    $file = "exemple.txt";
    //abre um ficheiro, mas tenho que ter atenção ao conteudo 
    $handler = fopen($file,'r');
    /*validação se o ficheiro existe, 
    se existir escreve, se não mensagem de erro*/
    if($handler)
    {
    /*função fread vai ler o conteudo do ficheiro, MAS neste caso
    o segundo parametro define o número de bytes que vai ler, neste caso 10 
     fread($handler, 10); // lê só 10 bytes*/
     
    echo $content = fread($handler, filesize($file)); //neste caso lê o ficheiro todo
    } else {
        echo "we coulnd't find the file you were looking for";
    }

    //boas politicas sugerem que fechemos o ficheiro a seguir
    fclose($handler);