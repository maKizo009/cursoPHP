<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resltado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado da sua requisição</h1>
    </header>
    <main>
        <p>
        <?php 
        $numeroo = $_GET["numero"];
        $antecessor = $numeroo - 1;
        $sucessor = $numeroo + 1;
        
        echo "<p>O número enviado foi $numeroo.";
        echo "<p>O antecessor de $numeroo é $antecessor.";
        echo "<p>O sucessor de $numeroo é $sucessor";
        ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        
    </main>
    
</body>
</html>