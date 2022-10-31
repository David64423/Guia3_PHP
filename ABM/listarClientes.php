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
    <h1>Clientes </h1> <br><br>
    <?php
    require "../src/clases/persona.php";
    require "../src/clases/cliente.php";

    Cliente::listar();
    ?>
    <br><br>
    <a href="../index.php"><button>Volver Al inicio</button></a>
</body>
</html>

