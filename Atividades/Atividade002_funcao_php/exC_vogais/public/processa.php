<?php
    if (isset($_POST['entrada'])) {
            $entrada = (string) htmlspecialchars($_POST['entrada']);
    };

    $convertida = strtolower($entrada);
    $palavra = trim($convertida, " ");

    function vogais($palavra, $entrada){
        $qnt_a = 0;
        $qnt_e = 0;
        $qnt_i = 0;
        $qnt_o = 0;
        $qnt_u = 0;

        foreach(count_chars($palavra, 1) as $i => $letra){

            if(chr($i) == 'a'){
                $qnt_a += $letra;
            }
            if(chr($i) == 'e'){
                $qnt_e += $letra;
            }
            if(chr($i) == 'i'){
                $qnt_i += $letra;
            }
            if(chr($i) == 'o'){
                $qnt_o += $letra;
            }
            if(chr($i) == 'u'){
                $qnt_u += $letra;
            }

        }

        echo "ha $qnt_a A na frase/palavra.<br>";
        echo "ha $qnt_e E na frase/palavra.<br>";
        echo "ha $qnt_i I na frase/palavra.<br>";
        echo "ha $qnt_o O na frase/palavra.<br>";
        echo "ha $qnt_u U na frase/palavra.<br>";
        echo "$entrada";
    };
?>