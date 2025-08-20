<?php 
    session_start();

    if (!isset($_SESSION['alunos'])){
        $_SESSION['alunos'] = [];
    }

    if (isset($_POST['limpar'])){
        session_destroy();
        session_start();
        $_SESSION['alunos'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])) {
        $novo_aluno = [
            'nome' => $_POST['nome'],
            'nota1' => (float) $_POST['nota1'],
            'nota2' => (float) $_POST['nota2'],
            'nota3' => (float) $_POST['nota3'],
            'nota4' => (float) $_POST['nota4']
        ];

        $_SESSION['alunos'][] = $novo_aluno;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;
        }

        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }

        hr {
            margin: 30px 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Cadastro de Alunos</h1>
    </header>

    <form method="POST">
        
        <label>Nome do Aluno:</label><br>
        <input type="text" nome="nome" required><br>

        <label>Nota 1:</label><br>
        <input type="number" nome="nota1" required><br>

        <label>Nota 2:</label><br>
        <input type="number" nome="nota2" required><br>

        <label>Nota 3:</label><br>
        <input type="number" nome="nota3" required><br>

        <label>Nota 4:</label><br>
        <input type="number" nome="nota4" required><br>

        <input type="submit" value="cadastrar">
    </form>

        <?php if (!empty($_SESSION['alunos'])): ?>
            <hr>
            <h2> 10 - Somando Array com Entrada e Listando os Itens </h2>

            <?php foreach($_SESSION['alunos'] as $aluno): ?>
                <h3><?=htmlspecialchars($aluno['nome'])?></h3>
                <ul>
                    <li>Nota 1: <?= $aluno['nota1'] ?></li>
                    <li>Nota 2: <?= $aluno['nota2'] ?></li>
                    <li>Nota 3: <?= $aluno['nota3'] ?></li>
                    <li>Nota 4: <?= $aluno['nota4'] ?></li>

                    <?php
                        $soma = $aluno['nota1'] + $aluno['nota2'] + $aluno['nota3'] + $aluno['nota4'];
                        $media = $soma / 4
                    ?>
                    <li><strong>Soma:</strong> <?= $soma ?></li>
                    <li><strong>Média:</strong> <?=number_format($media, 2, ', ', '.')?>li>
                </ul>
                <hr>
            <?php endforeach;?>
        <?php endif;?>

</body>
</html>