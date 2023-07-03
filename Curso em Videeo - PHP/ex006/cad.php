<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados obtidos do formulário</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento dos formulários</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p> É um prazer te conhecer $nome $sobrenome."
        ?>
        
        <p><a href="javascript:history.go(-1)">ir pra pagina inicial</a></p>
    </main>
</body>
</html>