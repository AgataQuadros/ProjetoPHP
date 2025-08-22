<?php
    if (isset($_POST['entrada'])) {
        $numero = (int) htmlspecialchars($_POST['entrada']);
    };

    function primos($numero){

        if ($numero < 2){
            echo "Esse número não é primo!";
            return;
        }

        for ($i = 2; $i < $numero; $i++){
            if (eprimo($i)){
                echo $i ."<br>";
            }
        }
    }

    function eprimo($n){

        if ($n < 2) return false;

        for ($i = 2; $i <= sqrt($n); $i++){
            if ($n % $i == 0){
                return false;
            }
        }
        return true;
    }
?>