<?php
//Calculadora 2 numeros
$valor1 = 6;
$valor2 = 2;

function suma($val1, $val2)
{
    return $val1 + $val2;

}

function resta($val1, $val2)
{
    return $val1 - $val2;
}

function multiplicar($val1, $val2)
{
    return $val1 * $val2;

}

function dividir($val1, $val2)
{
    return $val1 / $val2;

}

$operacion = "restar";

switch ($operacion) {
    case "suma":
        $resultado = suma($valor1, $valor2);
        break;
    case "restar":
        $resultado = resta($valor1, $valor2);
        break;
    case "multiplicar":
        $resultado = multiplicar($valor1, $valor2);
        break;
        case "dividir":
        $resultado = dividir($valor1, $valor2);
        break;
    default:
        $resultado = "No se ha seleccionado ninguna operacion";
        break;
}

echo $resultado;



