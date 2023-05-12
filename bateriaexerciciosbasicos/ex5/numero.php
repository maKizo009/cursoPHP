<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analaisando número real</h1>
        <?php
        echo $_SERVER['HTTP_USER_AGENT'];
        $num = $_POST ["n"] ?? 0;
        $int = (int) $num;
        $fra = $num - $int;

        echo "<P> Analisando o número <strong>".number_format($num, 3, ",", "."). "</strong> passado como parâmetro pelo usuário</p>";
        echo "<ul><li> A parte inteira do número é <strong>".number_format($int, 0, ",", ".")."</strong></li>";  
        echo "<li>A parte fracionária do número é <strong>".number_format($fra, 3, ",", ".")."</strong></li></ul>";
         ?>
         <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>