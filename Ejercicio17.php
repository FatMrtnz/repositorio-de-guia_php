<?php
$monto = $_POST['monto'];
$descuento = 0;

if ($monto > 100) {
    $descuento = $monto * 0.50;
}

$total = $monto - $descuento;
echo "Monto original: " . $monto . "<br>";
echo "Descuento aplicado: " . $descuento . "<br>";
echo "Total a pagar: " . $total;
?>