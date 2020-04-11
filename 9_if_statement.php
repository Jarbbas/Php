    <?php

    /* Os condicionais if, elseif e else, têm como objectivo tomar decisões no código com base no valor devolvido da sua validação */

    /**
     * A validação de um if tem como base o valor o valor de retorno
     * da comparação que lhe foi atribuida.
     * Se algo for verdadeiro, o if corre normalmente, se não, passa para o nivel seguinte,
     * que pode ser um else ou um elseif
     */
    if(2 > 1) { // se for verdadeiro corre, se não próximo

    echo "True, 2 is larger than 1";     

    } elseif(2 < 3) {//Tal como como o if, se for verdadeiro corre, se não passa para o próximo nivel

    echo "duhh, off course 2 is less then 3";

    } else {
    echo "false";
    }

    /** Ainda temos o operador Ternário que funciona também como se fosse um if
     * Atribuimos uma variavel, que será o valor de retorno,
     * e se a validação for verdadeira corre a primeira parte do código,
     * se não : corre a segunda parte
     * 
     * Trata-se de um formato mais limpo, mas nem sempre o mais prático
     */
 
    $variavel = (2 > 1) ? "Verdade" : "Mentira" ; 
    echo $variavel;
