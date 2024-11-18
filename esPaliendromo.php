<?php
// Función para determinar si una cadena es un palíndromo
function esPalindromo($texto) {
    // Eliminamos espacios y convertimos el texto a minúsculas para comparación
    $texto = strtolower(str_replace(' ', '', $texto));

    // Invertimos el texto
    $invertido = strrev($texto);

    // Comparamos el texto original con el invertido
    return $texto === $invertido;
}

// Ejmeplo, con la palabra "Orejero" 
echo esPalindromo("Orejero") ? "Es palíndromo" : "No es palíndromo";
?>
