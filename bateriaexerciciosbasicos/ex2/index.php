<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da requisição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
        <?php
        $valoraleatorio = mt_rand(0, 100);
        echo "gerando o número aleatório entre 0 e 100...";
        echo "<br> o número gerado foi <strong>$valoraleatorio<strong/>.";
        ?>
        <button onclick="javascript:document.location.reload()"> &#x1F504; Gerar outro</button>
    </main>
    </header>
</body>
</html>