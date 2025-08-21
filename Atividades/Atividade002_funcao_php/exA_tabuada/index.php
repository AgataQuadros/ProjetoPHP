<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Tabuada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>
            Tabuada em Tabela
        </h1>
    </header>

    <main>
        <section class="caixa">
            <form method="POST" id="formulario">
                <input type="number" name="entrada" id="entrada" placeholder="Entre com um número:">
                <button name="calcular" id="calcular">Calcular</button>
            </form>
        </section>

        <section class="caixa">

            <?php
                include "public/processa.php";
                multiplicacao($numero)
            ?>

        </section>
    </main>

    <script src="public/js/validacao.js"></script>

    <footer>
        <p>&copy; Todos os Direiro Reservado a Saint Gaia</p>
    </footer>
</body>
</html>