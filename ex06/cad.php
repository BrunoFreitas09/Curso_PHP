<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="teste">
        <section>
            <form action="" method="get">
                <P>Clique no botão para Sortear um número entre 0 e 100</P>
                <?php 
                $min = 0;
                $max = 1000;
                $num = rand(0,100);
                echo ("$num")
                ?>
                 <button onclick="window.location.reload()"> Gerar numero</button>
                  
            </form>

        </section>
    </div>
</body>

</html>