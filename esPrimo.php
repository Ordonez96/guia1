<?php
// Función para determinar si un número es primo
function esPrimo($numero) {
    // Casos especiales -> los números menores que 2 no son primos
    if ($numero < 2) {
        return false;
    }

    // Bucle para verificar divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        // Si el número es divisible por cualquier valor en este rango, no es primo
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no encontramos divisores, el número es primo
    return true;
}

// Verificamos si el número 29 es primo
echo esPrimo(29) ? "Es primo" : "No es primo";
?>
