<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Estrutura de Repetição en PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>
            Exemplo de Estrutura de Repetição en PHP
        </h1>
    </header>

    <main>

        <section>
            <h2>
                Estrutura FOR
            </h2>

            <div class="caixa">
                <?php
                    include "public/processa.php";
                    exibirFor();
                ?>
            </div>
        </section>

        <section>
            <h2>
                Estrutura WHILE
            </h2>

            <div class="caixa">
                <?php
                    exibirWHILE();
                ?>
            </div>
        </section>

        <section>
            <h2>
                Estrutura FOREACH
            </h2>

            <div class="caixa">
                <?php
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>
    
    <footer>
        <p>
            Exemplo didático de PHP &copy; 2025
        </p>
    </footer>
</body>
</html>