<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa e exibe o resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Resultado da Operação</h1>
    </header>

    <main class="caixa">
        <p>
            <?php
                $um = $_POST['valum'];
                $dois = $_POST['valdois'];
                $selecao = $_POST['selecao'];

                if ($selecao === "soma") {
                    $resultado = $um + $dois;
                    echo "A soma é $resultado";
                } elseif ($selecao === "subtracao") {
                    $resultado = $um - $dois;
                    echo "A subtração é $resultado";
                } elseif ($selecao === "multiplicacao") {
                    $resultado = $um * $dois;
                    echo "A multiplicação é $resultado";
                } elseif ($selecao === "divisao") {
                    if($dois == 0){
                        echo "0 não é divisivel por nenhum número alem de 0, adicione um valor valido";
                    }
                    else{
                        $resultado = $um / $dois;
                        echo "A divisão é $resultado";
                    }
                } else {
                    echo "Selecione uma das opções de operação";
                }
            ?>
        </p>

        <a href="index.php">Fazer outro cálculo</a>
    </main>

</body>
</html>