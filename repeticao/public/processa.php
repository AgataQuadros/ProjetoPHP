<?php
    function exibirFor() {
        for ($i = 1; $i <= 5; $i++){
            echo "Contagem com FOR: $i<br>";
        }
    }

    function exibirWhile(){
        $i = 1;
        while ($i <= 5) {
            echo "Contagem com WHILE: $i<br>";
            $i++;
        }
    }

    function exibirForeach() {
        $frutas = [ "Maçã", "Banana", "Laranja", "Uva"];
        foreach ($frutas as $fruta){
            echo "Fruta: $fruta<br>";
        }
    }
?>