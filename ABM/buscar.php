<?php
    $busqueda=$_GET['busqueda'];
    $op =$_GET['op'];

    require "../src/clases/persona.php";
    require "../src/clases/cliente.php";
    require "../src/clases/empleado.php";

    if($op==2){
        Empleado::buscar($busqueda);
    }
    else{
        Cliente::buscar($busqueda);
    }
?>