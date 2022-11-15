<?php
//Calculadora 2 numeros
$valor1 = 6;
$valor2 = 30;
//Ingrese sumar, restar, multiplicar o dividir
$operacion = "restar";

function sumar($val1, $val2)
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


switch ($operacion) {
    case "sumar":
        $resultado = sumar($valor1, $valor2);
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

echo "Calculadora de 2 numeros";
echo "<br>";
echo "El tipo de operacion es $operacion";
echo "<br>";
echo "El resultado es $resultado";



