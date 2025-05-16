<?php
    $Peso = $_POST ['Peso'];
    $Altura = $_POST ['Altura'];
    $IMC = $Peso/ ($Altura * $Altura);
    $IMC = round($IMC, 2);

    if ($IMC < 18.5) {

     echo " Abaixo do peso normal " .$IMC;

    }

    elseif ($IMC < 25.00 ){

        echo " Peso normal" .$IMC;
    }

    elseif ($IMC < 30.00) {

        echo " Execesso de peso" .$IMC;
    }

    elseif ($IMC < 35.00) {

        echo " Obesidade classe I" .$IMC;
    }

    elseif ($IMC < 40.00) {

        echo " Obesidade classe II" .$IMC;
    }

    else  {

        echo " Obesidade classe III" .$IMC;

    }
?>