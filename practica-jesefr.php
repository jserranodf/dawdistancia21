<?php

/**
*
* Función para mostrar un texto que pasa como parámetro
*
* @author Jesús Serrano del Fresno
* @version 1.0
* @param string $texto 
* @return string con el valor del parámetro de entrada $texto
* @internal
*
*/

function mostrarTexto($texto) {

echo "<strong>El texto a mostrar es el siguiente: </strong>";

echo $texto;

}

mostrarTexto("Me gusta mucho la web de aprenderaprogramar.com");

/**
*
* Función con las operaciones suma, resta y multiplicación
*
* @author Jesús Serrano del Fresno
* @version 1.0
* @param $n1 para el primer número a operar
* @param $n2 para el segundo número a operar
* @param $operacion para la operación a realizar
* @return $resultado con el valor del resultado de la operación
* @internal
*
*/

function operaciones($n1, $n2, $operacion) {

$resultado = 0;

if($operacion == "Sumar") {

$resultado = $n1 + $n2;

}else if($operacion == "Restar") {

$resultado = $n1 - $n2;

}else if($operacion == "Multiplicar") {

$resultado = $n1 * $n2;

}

return $resultado;

}

?>
