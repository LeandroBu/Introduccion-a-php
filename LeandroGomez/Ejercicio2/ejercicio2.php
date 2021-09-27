<?php

    if  (isset($_POST['a']) && isset($_POST['b'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
    
        echo binomioCuadradoPerfecto_a($a, $b) ." resultado ejecutando  binomioCuadradoPerfecto_a \n";
        echo binomioCuadradoPerfecto_b($a, $b) ." resultado ejecutando  binomioCuadradoPerfecto_b \n";
    }
    else{
        echo 'No ha ingresado un/los numeros para realizar el calculo';
    }

    function binomioCuadradoPerfecto_a($a, $b){

        return pow($a + $b,2);
    }

    function binomioCuadradoPerfecto_b($a, $b){

        echo (pow($a,2) + 2*$a*$b + pow($b,2));
    }

  ?>  