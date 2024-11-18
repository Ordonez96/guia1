<?php
// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    // Inicializamos los dos primeros términos de la serie Fibonacci
    $fibonacci = [0, 1];

    // Verificamos si el valor de $n es 1 o menor, en cuyo caso solo devolvemos el primer término
    if ($n <= 1) {
        return [$fibonacci[0]];
    }

    // Bucle para calcular cada término de la serie hasta alcanzar n términos
    for ($i = 2; $i < $n; $i++) {
        // El siguiente término es la suma de los dos anteriores
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Devolvemos el array con los términos de la serie Fibonacci
    return $fibonacci;
}

// Muestra los primeros 20 términos
print_r(generarFibonacci(20));
?>
