<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <header>
        <h1>Calculadora: Operadores aritméticos</h1>
    </header>

    <main class="caixa">
        <form action="processa.php" method="POST" id="formulario">

            <label for="val-um">Digite o primeiro número</label>
            <input type="number" id="val-um" name="valum">

            <label for="val-dois">Digite o segundo número</label>
            <input type="number" id="val-dois" name="valdois">

            <label for="selecao">Selecione uma operação</label>
            <select name="selecao" id="selecao">
                <option value="selecione">-_Selecione_-</option>
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (x)</option>
                <option value="divisao">Divisão (÷)</option>
            </select>

            <button id="calcular">Calcular</button>
        </form>
</main>

<script src="js/script.js"></script>
    
</body>
</html>