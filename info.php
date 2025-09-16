<?php
// Recibir datos del formulario
$nombre = $_POST['nombre'];
$curso  = $_POST['curso'];
$numero = $_POST['numero'];

// Calcular el cubo del número
$cubo = $numero ** 3;

// Mostrar los datos
echo "<h2>Resultados</h2>";
echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Curso de formación: " . htmlspecialchars($curso) . "<br>";
echo "El cubo del número digitado es: " . $cubo . "<br>";

// Verificar si el cubo es mayor a 100
if ($cubo > 100) {
    echo "<strong>Eres muy afortunado</strong>";
}
?>
