<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Soma de Notas: Shuffle</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            echo '<h2> 7 - Shuffle </h2>';

            $alunos = [
                'nome' => 'Maria',
                'nota1' => 10,
                'nota2' => 10,
                'nota3' => 10,
                'nota4' => 10
            ];

            echo "<pre>";
            print_r($alunos);
            echo "</pre>";

            $soma_notas = 0;

            foreach($alunos as $chave => $valor){
                if(is_numeric($valor)){
                    $soma_notas += $valor;
                }
            }

            echo "<hr>";
            print_r("Soma de Notas: " . $soma_notas);
            echo "<hr>"; 
            
        ?>
    </main>
    
</body>
</html>