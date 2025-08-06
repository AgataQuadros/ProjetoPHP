<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Calculadora</h1>
    </header>

    <div class="caixa">
        <form action="processa.php" method="POST" id="formulario">

            <label for="val-um">Digite o primeiro número</label>
            <input type="number" id="val-um">

            <label for="val-dois">Digite o segundo número</label>
            <input type="number" id="val-dois">

            <label for="selecao">Selecione uma operação</label>
            <select name="selecao" id="selecao">
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (x)</option>
                <option value="divisao">Divisão (÷)</option>
            </select>
        </form>
    </div>

<script src="js/script.js"></script>
    
</body>
</html>