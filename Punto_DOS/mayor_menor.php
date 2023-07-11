<?php

include 'mayor_menor.html';

    $edad = 0;
    const mayor = 18;
    const menor = 0;
    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= mayor) {
            echo "<h2>Es mayor de edad</h2>";
        }
        else if (mayor > $edad && menor < $edad) {
            echo "<h2>Es menor de edad</h2>";
        }else{
            echo "<h2>No valido</h2>";
        }

    }

?>

