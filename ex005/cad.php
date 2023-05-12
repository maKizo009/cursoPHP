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
        <?php 
        #var_dump($_GET); // $_GET, $_POST, $_COOKIES a superglobal reqeust é uma junção disso tudo
        $n = $_GET ["nome"]?? "bobão sem nome e";
        $s = $_GET ["Sobrenome"] ?? "sem sobrenome";
        echo "<p>É um prazer te conhecer, <strong>$n $s</strong>! esse é o meu site.";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>