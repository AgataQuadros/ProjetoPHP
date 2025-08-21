<?php
    if (isset($_POST['entrada'])) {
        $numero = (int) htmlspecialchars($_POST['entrada']);
    };

    function multiplicacao($numero) {
        for ($i = 1; $i < 11; $i++){
            $multiplicado = $numero * $i;

            echo "$numero X $i = $multiplicado <br>";
        }
    }
?>