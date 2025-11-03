<?php include('includes/header.php'); ?>

<h2>Ejemplos de bucles</h2>

<h3>For</h3>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Número: $i</p>";
}
?>

<h3>While</h3>
<?php
$contador = 1;
while ($contador <= 3) {
    echo "<p>Contador: $contador</p>";
    $contador++;
}
?>

<h3>Foreach</h3>
<?php
$frutas = ["Manzana", "Pera", "Plátano"];
foreach ($frutas as $fruta) {
    echo "<p>Fruta: $fruta</p>";
}
?>

<?php include('includes/footer.php'); ?>
