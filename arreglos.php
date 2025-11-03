<?php include('includes/header.php'); ?>

<h2>Ejemplos de arreglos</h2>

<h3>Arreglo indexado</h3>
<?php
$colores = ["Rojo", "Verde", "Azul"];
foreach ($colores as $color) {
    echo "<p>Color: $color</p>";
}
?>

<h3>Arreglo asociativo</h3>
<?php
$persona = ["nombre" => "Ana", "edad" => 22, "ciudad" => "Tuxtla"];
foreach ($persona as $clave => $valor) {
    echo "<p>$clave: $valor</p>";
}
?>

<h3>Arreglo multidimensional</h3>
<?php
$alumnos = [
    ["nombre" => "Luis", "nota" => 85],
    ["nombre" => "María", "nota" => 90],
    ["nombre" => "Carlos", "nota" => 78]
];

foreach ($alumnos as $alumno) {
    echo "<p>{$alumno['nombre']} tiene una nota de {$alumno['nota']}.</p>";
}
?>

<?php include('includes/footer.php'); ?>
