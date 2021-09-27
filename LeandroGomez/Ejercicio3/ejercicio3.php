<?php

if(isset($_GET['nombre']) && isset($_GET['apellido'])){

    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];

    echo "el texto concatenado es: " .concatenacionDeTextos($nombre , $apellido);
}

function concatenacionDeTextos($nombre,$apellido){
    return $nombre." ".$apellido;
}