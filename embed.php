<?php echo "hello student"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embeb</title>
</head>
<body>
   <!--
        div.demo>ul>ul*5>a{home}
        
        tipico exemplo do uso do emmet, para cirar automáticamente um div com class demo com 5 <ul> com link's <a> e nome home
    -->
    <div class="demo">
        <ul>
            <ul><a href="">home</a></ul>
            <ul><a href="">home</a></ul>
            <ul><a href="">home</a></ul>
            <ul><a href="">home</a></ul>
            <ul><a href="">home</a></ul>
        </ul>
    </div>
    
</body>
</html>

<?php 
/* NOTAS

usar a nomenclatura <?php ?> sempre, porque podemos ter servidores Apache que não tem as outras nomenclaturas ativas, logo é considerado uma má prática. 

principalmente se estiver a criar adons para clientes com WordPress

<? ?> MAU
<% %> MAU
<?php ?> BOM 
    
PARA ESCREVER STRINGS PODEMOS USAR DOBLE QUOTES " OU SINGLE QUOTES '   

Bem como segundo as boas práticas e as PSRs 2 apenas devemos abrir as TAGS do PHP e não fechar, A NÃO SER, que tenhamos código 
de outra linguagem pelo meio, bem como deixar a última linha sempre livre
    
*/

?> 
