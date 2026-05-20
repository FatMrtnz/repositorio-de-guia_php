<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;

echo "Precio base: " . $precio . "<br>";
echo "IVA: " . $iva . "<br>";
echo "Total con IVA: " . $total;
?>