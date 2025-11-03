<?php include('includes/header.php'); ?>

<h2>Ejemplos de condicionales</h2>
<?php
$edad = 20;

if ($edad < 18) {
    echo "<p>Eres menor de edad.</p>";
} elseif ($edad == 18) {
    echo "<p>Tienes justo 18 años.</p>";
} else {
    echo "<p>Eres mayor de edad.</p>";
}

$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "<p>Inicio de semana.</p>";
        break;
    case "viernes":
        echo "<p>Fin de semana cerca.</p>";
        break;
    default:
        echo "<p>Día normal de trabajo.</p>";
}
?>

<?php include('includes/footer.php'); ?>
