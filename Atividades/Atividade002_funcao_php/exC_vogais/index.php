<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais em uma Frase</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>
            Contador de Vogais em uma Frase
        </h1>
    </header>

    <main>

        <section>

            <form method="POST" id="formulario">

                <input type="text" name="entrada" id="entrada" placeholder="Entre com a palavra/frase:">
                <button name="enviar" id="enviar">Enviar</button>

            </form>
            
        </section>

        <section>

            <?php
                include "public/processa.php";
                vogais($palavra)
            ?>

        </section>

    </main>

    <script src="public/js/validacao.js"></script>
    
    <footer>
        <p>
            &copy; Todos os Direiro Reservado a Saint Gaia
        </p>
    </footer>

</body>
</html>