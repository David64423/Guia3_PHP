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
    <?php
    require "../src/clases/persona.php";
    require "../src/clases/empleado.php";

    Empleado::listar();
    ?>
</body>
</html>
