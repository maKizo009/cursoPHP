<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>
    <main>
        <h1>Resultado da conversão</h1>
    <?php 
    
        $diaInicio = date("m-d,Y", strtotime("-7 days"));
        $diaFim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$diaInicio.'\'&@dataFinalCotacao=\''.$diaFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotaDolar = $dados["value"][0]["cotacaoCompra"];
        $nconversion = $_GET["din"] ?? 0;
        $dolar = $nconversion/$cotaDolar;
    //$padrao = numfmt_create("pt_BR", number_format::CURRENCY);
    //echo "Seus" . numfmt_format_currency($padrao, real, "BRL"). "equivalem a". numfmt_format_currency($padrao, dolar, "USD");

    echo "<p>Seus R/$". number_format($nconversion, 2, ".", ","). " equivalem a U/$". number_format($dolar, 2, ".", ",")."<p/>";
    ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>