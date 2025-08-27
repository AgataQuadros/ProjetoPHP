<?php
    if (isset($_POST['entrada'])) {
        $entrada = $_POST['entrada'];
        switch ($_POST['selecao']) {
            case "ck":
                $resultado = celsiusKelvin($entrada);
                break;
            case "cf":
                $resultado = celsiusFahrenheit($entrada);
                break;
            case "fc":
                $resultado = fahrenheitCelsius($entrada);
                break;
            case "fk":
                $resultado = fahrenheitKelvin($entrada);
                break;
            case "kc":
                $resultado = kelvinCelsius($entrada);
                break;
            case "kf":
                $resultado = kelvinFahrenheit($entrada);
                break;
            default:
                $resultado = "Nenhuma opção selecionada!";
                break;
        }
    }
    
    function celsiusKelvin ($entrada) {
        $convertido = $entrada + 273;
        $resultado = "$entrada Celsius° equivale a $convertido Kelvin°!";
        return $resultado;
    }

    function celsiusFahrenheit ($entrada) {
        $convertido = (($entrada * 9) / 5) + 32;
        $resultado = "$entrada Celsius° equivale a $convertido Fahrenheit°!";
        return $resultado;
    }

    function fahrenheitCelsius ($entrada) {
        $convertido = (($entrada - 32) *5) / 9;
        $resultado = "$entrada Fahrenheit° equivale a $convertido Celsius°!";
        return $resultado;
    }

    function fahrenheitKelvin ($entrada) {
        $convertido = ((($entrada - 32) *5) / 9) + 273;
        $resultado = "$entrada Fahrenheit° equivale a $convertido Kelvin°!";
        return $resultado;
    }

    function kelvinCelsius ($entrada) {
        $convertido = $entrada -273;
        $resultado = "$entrada Kelvin° equivale a $convertido Celsius°!";
        return $resultado;
    }

    function kelvinFahrenheit ($entrada) {
        $convertido = ((($entrada - 273)) * (9/5)) + 32;
        $resultado = "$entrada Kelvin equivale a $convertido °Fahrenheit!";
        return $resultado;
    }
   
?>