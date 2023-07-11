<?php

include 'edad_exacta.html';

const edad_menor = 0;
const edad_mayor = 18;

    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if(($edad_actual >= edad_mayor) && ($edad_actual > edad_menor)){
            echo "Su edad es: " .$edad_actual." años ".$edad_meses." meses ".$edad_dias ." días <br>";
            echo "Por tanto: Es mayor de edad"; 
        }elseif (edad_mayor > $edad_actual){
            echo "Su edad es: " .$edad_actual." años ".$edad_meses." meses ".$edad_dias ." días <br>";
            echo "Por tanto: No es mayor de edad"; 
        }else{
            echo "Ha ingresado una edad invalida";
        }

        // echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;

    }

?>
