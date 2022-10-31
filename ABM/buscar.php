<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
    <h1>Buscar</h1> <br><br>

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
<br><br>

<a href="../index.php"><button>Volver Al inicio</button></a>
    
</body>
</html>
