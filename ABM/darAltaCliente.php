<?php
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $dni=$_POST['dni'];
   $direccion=$_POST['direccion'];
   $tel=$_POST['tel'];

    require "../src/clases/persona.php";
    require "../src/clases/cliente.php";

    $nuevoCliente= new Cliente($nombre,$apellido,$dni,$tel,$direccion);
    $nuevoCliente->darDeAlta();

?>