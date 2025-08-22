<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>
            Gerador de Números Primos
        </h1>
    </header>

    <main>

        <section>

            <form method="POST" id="formulario">

                <input type="number" name="entrada" id="entrada" placeholder="Entre com o número:">
                <button name="enviar" id="enviar">Enviar</button>

            </form>

        </section>

        <section>

            <?php
                include "public/processa.php";
                primos($numero)
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