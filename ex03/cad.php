<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <header><h1>Resultado do processamento</h1></header>
    <main>
        <?php   
        
            $N = $_GET["nome"] ?: "Nome inválido";
            $S = $_GET["Sobrenome"] ?: "Nome inválido";
            echo("O seu nome é: $N $S");
        ?>
        <p>
        <a href="Javascript:history.go(-1)">Página anterior</a>
        </p>
    </main> 
    <Sect>

    </Sect>   
</body>
</html>