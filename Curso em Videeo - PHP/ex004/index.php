<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings com PHP</title>
</head>
<body>
    <?php 
    const NOME = "Andrey";
    const ESTADO = "RJ";
    echo "me chamo " . NOME;
    echo " e moro no " . ESTADO;
    echo ", estamos no ano " .date('Y') . ".";
    ?>
</body>
</html>