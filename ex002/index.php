<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " .date("D/d/m/y");
    echo ", e a hora atual é " .date("G:i:s T");
    ?>

</body>
</html>