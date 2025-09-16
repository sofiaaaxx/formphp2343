<?php
// Recibir datos enviados por POST
$nombre = $_POST['nombre'] ?? '';
$curso  = $_POST['curso'] ?? '';
$numero = $_POST['numero'] ?? 0;

// Calcular el cubo del número
$cubo = $numero ** 3;

// Mostrar resultados
echo "<h2>Resultados</h2>";
echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Curso de formación: " . htmlspecialchars($curso) . "<br>";
echo "El cubo del número digitado es: " . $cubo . "<br>";

// Mensaje si el cubo es mayor a 100
if ($cubo > 100) {
    echo "<strong>Eres muy afortunado</strong>";
}
?>
