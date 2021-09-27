<?php

    if(isset($_GET['number'])){

        $number = $_GET['number'];
        $numeroIncrementado = incrementar($number);
        echo $numeroIncrementado;
    }

    function incrementar($number){
        return $number + 1;
    }