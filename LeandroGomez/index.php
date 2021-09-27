
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TP1</title>
</head>
<body>
    <div class="w3-container w3-teal w3-center">
        <h1>Leandro Ariel Gomez</h1>
    </div>  

    <div class = "w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 1</h2>
        <h3>Semaforo</h3>
        <form action="" method="POST">
            <label> Ingrese el color del semaforo:</label>
            <input type="text" name="color">
            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Enviar</button>
            <p><textarea name="textarea" id="" cols="50" rows="3" readonly=»readonly»><?php require_once 'Ejercicio1/ejercicio1.php'?></textarea></p>
            
        </form>
    </div>

    <div class = "w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 2</h2>
        <h3>Binomio cuadrado perfecto</h3>
        <form action="" method="post">
            <label> Ingrese el primer numero:</label>
            <input type="text" name="a">

            <label> Ingrese el segundo numero:</label>
            <input type="text" name="b">

            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Enviar</button>
        </form>
            <p><textarea name="" id="" cols="50" rows="2"><?php require_once 'Ejercicio2/ejercicio2.php';?> </textarea></p>
    </div>

    <div class = "w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 3</h2>
        <h3>Concatenar dos textos</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label> Ingrese su nombre:</label>
            <input type="text" name="nombre">
            <label> Ingrese su apellido:</label>
            <input type="text" name="apellido">
            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Enviar</button>
            <p><textarea name="" id="" cols="60" rows="2"> <?php require_once 'Ejercicio3/ejercicio3.php';?> </textarea></p>
        </form>
    </div>
    
    <div class = "w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 4</h2>
        <h3>Incrementar</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label> Ingrese un numero para que sea incrementado:</label>
            <input type="text" name="number"> 
            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Incrementar</button>
            <p><input type="text" value="<?php require_once 'Ejercicio4/ejercicio4.php';?>" readonly=»readonly»></p>
        </form>
    </div>

    <div class = "w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 5</h2>
        <h3>Sumatoria</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label> Ingrese valores para que sean sumados separados por una "'":</label>
            <input type="text" name="numbers"> 
            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Incrementar</button>
            <p><textarea name="" id="" cols="50" rows="2" readonly=»readonly»><?php require_once 'Ejercicio5/ejercicio5.php';?></textarea></p>
        </form>
    </div>

    <div class="w3-container w3-panel w3-card w3-yellow w3-center w3-margin w3-padding">
        <h2>Ejercicio 6</h2>
        <h3>Nombre completo</h3>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label> Ingrese el nombre:</label>
            <input type="text" name="nombre">
            <label> Ingrese el apellido:</label>
            <input type="text" name="apellido">
            <label> Ingrese el horario:</label>
            <input type="number" min="0" max="24" name="horario">
            <button class="w3-button w3-circle w3-xlarge w3-black w3-ripple w3-margin w3-padding" type="submit">Enviar</button>
            <p><textarea name="" id="" cols="50" rows="4"> <?php require_once 'Ejercicio6/ejercicio6.php';?></textarea></p>
        </form>
    </div>

</body>
</html>