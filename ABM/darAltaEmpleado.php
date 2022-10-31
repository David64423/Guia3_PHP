<?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $direccion=$_POST['direccion'];
    $tel=$_POST['tel'];
    $fechaIn=$_POST['fechaIn'];
    $rol=$_POST['rol'];
    $sueldo=$_POST['sueldo'];


    require "../src/clases/persona.php";
    require "../src/clases/empleado.php";

    $nuevoEmpleado= new Empleado($nombre,$apellido,$dni,$tel,$fechaIn,$sueldo,$rol,$direccion);
    $nuevoEmpleado->darDeAlta();
?>
<br><br>
<a href="../index.php"><button>Volver Al inicio</button></a>