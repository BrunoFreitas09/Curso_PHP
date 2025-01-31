<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        PHP example 
    </h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo " Today is day ". date("d/M/Y");
        echo " Today is day ". date("G:i:s:T");
    ?>
    
</body>
</html> 