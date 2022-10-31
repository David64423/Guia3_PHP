<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <div id="main">
            <div id="nombre" class="container">

                <h1>ADMINISTRADOR</h1>

            </div>

            <div id="alta">
            
            
                <div id="altaCientes" class="container">

                    <p style="text-align: center;">Alta Clientes</p>
                    <form class="formAlta">
                        <p>Nombre: <input name="nombre" type="text"></p>
                        <p>Apellido:<input name="apellido" type="text"></p>
                        <p>DNI: <input name="dni" type="text"></p>
                        <p>Dirección:<input name="direccion" type="text"></p>
                        <p>Tel: <input name="tel" type="text"></p>
                        <input type="submit" value="Cargar cliente" formaction="ABM/darAltaCliente.php" formmethod="POST">
                    </form>

            
        
                </div>
            
            
                <div id="altaEmpleados" class="container">

                <p>Alta Empleados</p> <br>

                <form class="formAlta">
                        <p>Nombre: <input name="nombre" type="text"></p>
                        <p>Apellido:<input name="apellido" type="text"></p>
                        <p>DNI: <input name="dni" type="text"></p>
                        <p>Dirección:<input name="direccion" type="text"></p>
                        <p>Tel: <input name="tel" type="text"></p>
                        <p>Sueldo<input name="sueldo" type="number" name="" step=0.25></p>
                        <p>Rol</p>
                        <select name="rol">
                            <option value=1>Admin</option>
                            <option value=2>Empleado</option>
                        </select>
                        <p>Fecha de ingreso:<input name="fechaIn" type="date"></p>
                        <input type="submit" value="Cargar Empleado" formaction="ABM/darAltaEmpleado.php" formmethod="POST">
                    </form>


                </div>

            </div>
            
            
            
            <div id="listar" class="container">

                <div>
                    <form>
                    <p>Nombre:<input name="busqueda" type="text"></p>
                    <select name="op">
                        <option value=1>Cliente</option>
                        <option value=2>Empleado</option>
                    </select>
                    <input type="submit" value="Buscar" formmethod="GET" formaction="ABM/buscar.php">
                    </form>
                </div>

                <div>

                    <button><a href="ABM/listarClientes.php">Listar Clientes</a></button>
                    <button><a href="ABM/listarEmpleados.php">Listar Empleados</a></button>


                </div>

            </div>

    </div>
</body>
</html>