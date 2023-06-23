<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <hr>    

    <?php 
        // // 0x = hexadecimal. 0b = binario. 0 = Octal
        // $num = 010;
        // echo "o valor da variavel é $num";

        // $v = false;
        // var_dump($v);

        // $num = (integer) 3e2;         //   <- coerção = forçando o numero a ser inteiro
        // var_dump($num);

        // $num = (integer) "950";          //   <- coerção 
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // echo "o valor para casado é $casado";

        // $vet = [6, 2.3, "teste", 3, false];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>