<?php
    if (isset($_POST['entrada'])) {
            $entrada = (string) htmlspecialchars($_POST['entrada']);
    };

    $convertida = strtolower($entrada);
    $palavra = trim($convertida, " ");

    function vogais($palavra){
        $contadas = str_split($palavra);

        while($contadas){
            if("a", "e", "i", "o", "u"){
            }
        }
    };

    function consoantes($palavra) {

    };
?>
<!-- encontrar um jeito de quebrar a minha frase em caquinhos em um array [X}-->
<!-- passar palavra para caixa baixa e retirar os espaços [X]
 contar os elementos em palavra modificado e retirar as vogais
 usar o resultado da contagem menos as vogais e usa para contar as consoantes-->