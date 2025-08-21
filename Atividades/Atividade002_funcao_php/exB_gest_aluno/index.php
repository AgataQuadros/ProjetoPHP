<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas de Alunos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>
            Sistema de Notas de Alunos
        </h1>
    </header>

    <main>

        <section class="caixa">
            <form method="POST" id="formulario">
                <input type="text" name="nome" id="nome" placeholder="Entre com o nome do aluno:">
                <input type="number" name="nota1" id="nota1" placeholder="nota1">
                <input type="number" name="nota2" id="nota2" placeholder="nota2">
                <input type="number" name="nata3" id="nota3" placeholder="nota3">
                <input type="number" name="nota4" id="nota4" placeholder="nota4">
                <button name="enviar" id="enviar">Registrar</button>
            </form>
        </section>

        <section>
            <?php
                include "public/processa.php";
                media($alunos)
            ?>
        </section>
    </main>

    <script src="public/js/validacao.js"></script>

    <footer>
        <p>&copy; Todos os Direiro Reservado a Saint Gaia</p>
    </footer>
</body>
</html>