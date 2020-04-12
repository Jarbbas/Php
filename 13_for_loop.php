<?php 
 /**
  * O comparativo for loop, leva 3 parametros,
  * primeiro: definimos um contador; 
  * segundo: a comparação a ter em conta;
  * terceiro: por norma será uma atribuição final, onde por norma irá incrementar o valor do contador
  *
  * Neste caso tal como o cliclo while o contador começa a 1
  * e vai contar até encontrar o último valor menor que 10
  * e a cada passagem incrementa mais 1 valor ao contador.
  */
    for ($counter = 1; $counter < 10 ; $counter ++) { 
       echo $counter . "<br>" ;
    }

 ?>
