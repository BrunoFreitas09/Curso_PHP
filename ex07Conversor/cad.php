<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>processamento</title>
</head>

<body>
    <form>
        <main>
            <h2>O valor convertido ficou em </h2>

            <?php
            $num = $_GET["num"];
            $fix = 5.88;
            $dol = 0;
            $dol = $num / $fix;
            echo ("Seus R/$ $num equivalem a U$" . number_format("$dol", 2, ",", "."));

            ?>
        </main>
    </form>
</body>

</html>