<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Bem-Vindo ao PHP</h1>

    <form method="GET" action="">
        <label>Digite sua mensagem:</label><br>

        <input type="text" name="mensagem" require>

        <button type="submit">Enviar</button>
    </form>

    <p>
        <?php
        if (isset($_GET['mensagem'])) {
            $mensagem = htmlspecialchars($_GET['mensagem']);

            echo "Você digitou: <strong>$mensagem</strong>";
        } else {
            echo "Olá, mundo! Este é meu primeiro código em PHP";
        }
        ?>
    </p>
    
</body>
</html>