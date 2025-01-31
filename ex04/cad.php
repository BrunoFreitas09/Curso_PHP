<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?=<?php echo time();?>">
    <title>Resultado</title>
</head>
<body>
   
    <?php 
        $soma = 0;
        $n1 = $_GET['numero1'];
        $n2 = $_GET['numero2'];
        $soma = $n1 + $n2;
        
        echo("<p class='guei'>A resultado da soma foi de: $soma</p>");
    ?>


</body>
</html>