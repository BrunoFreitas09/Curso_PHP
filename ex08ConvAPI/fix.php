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

            //
            $inicio = 0;
            $fim = 0;
            $inicio = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao' ;
            
            $dados = json_decode(file_get_contents($url), true);
            
            
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            

            //
            $num = $_GET["num"] ?: 'Valor inválido!';
            $fix = $cotacao;
            $dol = 0;
            $dol = $num / $fix;
            echo ("Seus R\$" . number_format("$num", 2, ",", ".") . " equivalem a U$" . number_format("$dol", 2, ",", "."));
            echo ("<p>O valor do dólar está em: U$" . number_format ("$cotacao", 2, ",", "." ) . " de Acordo com o "  );
            echo ("<a href=\"https://www.bcb.gov.br/estabilidadefinanceira/historicocotacoes\">  <strong>Banco Central do Brasil</strong>  </a>")
            
            ?>
        </main>
    </form>
</body>

</html>