<?php
echo "Hello World!<br>";

// 1. Suma (+)
$numero1 = 5;
$numero2 = 3;
$resultado = $numero1 + $numero2; // $resultado contendrá 8
echo "Suma: $numero1 + $numero2 = $resultado <br>";

// 2. Resta (-)
$numero1 = 10;
$numero2 = 4;
$resultado = $numero1 - $numero2; // $resultado contendrá 6
echo "Resta: $numero1 - $numero2 = $resultado <br>";

// 3. Multiplicación (*)
$numero1 = 7;
$numero2 = 3;
$resultado = $numero1 * $numero2; // $resultado contendrá 21
echo "Multiplicación: $numero1 * $numero2 = $resultado <br>";

// =============================================
// EJEMPLO DE ORDEN DE PRECEDENCIA
// =============================================

// Sin paréntesis: primero * luego +
$resultado = 2 + 3 * 4; // Primero 3*4=12, luego 2+12=14
echo "Sin paréntesis (2 + 3 * 4) = $resultado <br>";

// Con paréntesis: fuerza el orden
$resultado = (2 + 3) * 4; // Primero 2+3=5, luego 5*4=20
echo "Con paréntesis ((2 + 3) * 4) = $resultado <br>";
?>  
