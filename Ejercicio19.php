<?php
$numero = $_POST['numero'];
echo "Tabla de multiplicar del " . $numero . "<br><br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i . " = " . $resultado . "<br>";
}
?>