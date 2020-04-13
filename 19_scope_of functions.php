<?php
    /**
     * Talvez dos consceitos mais complicados de entender e dos erros mais comuns
     * As variáveis no PHP só têm um single scopt, dentro do ficheiro em que estas foram declaradas,
     * no entanto se recorrermos ao include e ao require estas podem ser acedidas em outros ficheiros.
     * 
     * No entanto o mesmo não se passa dentro das funções, as funções tem 2 scopes
     * Global e Local, no sentido que as variáveis vivem dentro do scope da função, e não têm acesso às
     * varieis que vive, fora dela, a não ser que sejam assim declaradas como globais, "dento da função"
     */
        $x = "outside"; //Global - valor de x

        function convert(){
            global $x; //Palavra reservada no PHP de forma a dizer que esta variável é global
            $x = "insied"; //Local - variável local 
             return $x;
        }

        echo $x."<br>"; //Mostra o primeiro x, que é declarado fora da função logo é global
        convert(); //chamamos a função que como tem o valor de X mencionado como global vai converter o valor do mesmo
        echo $x; //imprime o novo valor de x
 