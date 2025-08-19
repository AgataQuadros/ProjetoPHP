<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';
            echo '<h2> 6 - Shuffle </h2>';

            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            echo "<pre>";
            print_r($array);
            echo "</pre>";

            shuffle($array);

            echo "<pre>";
            print_r($array);
            echo "</pre>";
        ?>
    </main>
</body>
</html>