<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>

        <section>

            <p>

                <?php
                    $numero = (int) htmlspecialchars($_POST['entrada']);

                    function multiplicacao($numero) {
                        for ($i = 1; $i < 11; $i++){
                            $multiplicado = $numero * $i;

                            echo "$numero X $i = $multiplicado <br>";
                        }
                    }

                    multiplicacao($numero)
                ?>

            </p>
            
        </section>

        <a href="../index.php">voltar</a>

    </main>

    <footer>
        <p>&copy; Todos os Direiro Reservado a Saint Gaia</p>
    </footer>

</body>
</html>