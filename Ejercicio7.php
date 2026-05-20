<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if ($numero1 > $numero2) {
        echo "El mayor es el primer número: " . $numero1;
    } else {
        echo "El mayor es el segundo número: " . $numero2;
    }
?>