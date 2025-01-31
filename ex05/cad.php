<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <section>
        <main class="guei">
            <?php
            $N = 0;
            $ant = 0;
            $suc = 0;
            //Antecessor 
            $N = $_POST["numero"];
            $ant = $N - 1;

            //sucessor 
            $suc = $N + 1;
            echo ("<p> O seu número: <strong>$N</strong></p>");
            echo ("<p> O antecessor desse número é: $ant </p>");
            echo ("<p> O sucessor desse número é: $suc </p>");
            ?>


        </main>
    </section>

</body>

</html>