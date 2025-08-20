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

        <?php
            echo '<hr>';
            echo '<h2> 8 - Somando Array com Entrada de Dados </h2>';

            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $alunos = [
                    'nome' => $_POST['nome'],
                    'nota1' => (float) $_POST['nota1'],
                    'nota2' => (float) $_POST['nota2'],
                    'nota3' => (float) $_POST['nota3'],
                    'nota4' => (float) $_POST['nota4']
                ];
            }
            echo "<hr>";
            echo "<h2>Rsultado</h2>";
            echo "<h3>Aluno: " . htmlspecialchars($aluno['nome']). "</h3>";

            foreach($aluno as $chave => $valor){

                if ($chave !== 'nome' && is_numeric($valor)){
                    echo "$chave: $valor<br>";

                    $soma_notas += $valor;

                    $qnt_notas++;
                }

                

            }
            
            $media = $soma_notas / $qnt_notas;

            echo "<br><strong>Soma das Notas:</strong> $soma_notas</br>";
            echo "<strong>Média:</strong>" . number_format($media, 2, ', ', '.');
        ?>
        
</body>
</html>