<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Primeiro PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Envie sua Mensagem</h1>

    <form method="POST" action="processa.php">

        <label>Digite sua mensagem:</label><br>

        <input type="text" name="mensagem" require>

        <button type="submit">Enviar</button>
        
    </form>
    
</body>
</html>