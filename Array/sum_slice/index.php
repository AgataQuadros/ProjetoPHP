<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Soma de Notas: Sum e Slice</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            echo '<h2> 8 - Sum e Slice </h2>';

            $alunos = [
                [
                    'nome' => 'Maria',
                    'nota1' => 10,
                    'nota2' => 9,
                    'nota3' => 8,
                    'nota4' => 10,
                ],

                [
                    'nome' => 'João',
                    'nota1' => 7,
                    'nota2' => 8,
                    'nota3' => 6,
                    'nota4' => 9,
                ]
            ];

            foreach($alunos as $aluno){

                $nome = $aluno['nome'];

                $notas = array_slice($aluno, 1);

                $soma_notas = array_sum($notas);

                $media = $soma_notas / count($notas);


                echo "<h3> Aluno: $nome</h3>";
                echo "Notas:" . implode(', ', $notas). "<br>";
                echo "Soma: $soma_notas<br>";

                echo "Média: " . number_format($media, 2, ', ', '.') . "<hr>";

            }
        ?>
    </main>
    
</body>
</html>