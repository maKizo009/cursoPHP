<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    //0x é hexadecimal, 0b é binário e 0 é octal
    #$numero = 0x1A;
    #echo "o valor da variável é $numero";

    #echo "PHP \u{1F418}";
    #echo 'PHP \u{1F418}';
    #$nome = "Lucas";
    #echo "Olá, $nome! ";
    #echo 'Olá, $nome!';
    #echo "Estamos no ano de ".date('Y');
    $professor = "Gustavo";
    $sobren = "Guanabara";
    $apelido = "Gafanhoto";
    echo <<< TESTE
    $professor
    $apelido
    $sobren
    TESTE;



    ?>
</body>
</html>