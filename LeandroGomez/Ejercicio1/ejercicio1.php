<?php

    if  (isset($_POST['color'])){
        $color = $_POST['color'];
        
        echo semaforo_a($color) ." resultado ejecutando semaforo_a. \n";
        echo semaforo_b($color) ." resultado ejecutando semaforo_b. \n";
        echo semaforo_c($color) ." resultado ejecutando semaforo_c. \n";
    }

    function semaforo_a($color){

        if($color == 'rojo'){
            echo 'Frene';
        }
        else if($color == 'amarillo'){
            echo 'precaucion';
        }
        else if($color == 'verde'){
            echo 'avance';
        }
        else{
            return 'Ingrese un color valido a un semaforo';
        }

    }

    function semaforo_b($color){

        echo ($color == 'rojo') ? 'frene' :
             ($color == 'amarillo' ? 'precaucion' :
             ($color == 'verde' ? 'avance' : 'Ingrese un color valido a un semaforo'));

    }

    function semaforo_c($color){

        switch ($color) {
            case 'rojo':
                echo 'frene';
                break;

            case 'amarillo':
                echo 'precaucion';
                break;

            case 'verde':
                echo 'avance';
                break;
            
            default:
                'Ingrese un color valido a un semaforo';
        }

    }
