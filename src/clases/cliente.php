<?php

    

    
    class Cliente extends Persona{
        private $nroCliente;
        private $tel;
        private $direccion;

        
        public function __construct($nombre,$apellido,$dni,$tel,$direccion)
        {

            parent::__construct($nombre,$apellido,$dni);
            $this->tel= $tel;
            $this->direccion=$direccion;

            
            }
            

        
        
        

        public static function listar()
        {
            require "conexion.php";
            $sql="select * from clientes;";
            $resulset= mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn)>0){
                
                while($registro=mysqli_fetch_assoc($resulset)){
                    ?>
                    <table>
                        <tr>
                            <th>Nro. Cliente</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>

                        <tr>
                            <td><?php echo $registro['cli_id']; ?></td>
                            <td><?php echo $registro['cli_nombre']; ?></td>
                            <td><?php echo $registro['cli_apellido']; ?></td>
                            <td><?php echo $registro['cli_dni']; ?></td>
                            <td><?php echo $registro['cli_tel']; ?></td>
                            <td> <?php echo $registro['cli_direccion'];?></td>

                        </tr>
                    </table>

                    <?php
                }
            }

            else{
                ?>
                <h2>ERROR AL HACER LA CONSULTA SQL.</h2>
                <?php
            }
            
        }

        public function darDeAlta()
        {
            require "conexion.php";
            $sql="insert into clientes(cli_nombre, cli_Apellido, cli_dni, cli_tel,cli_direccion)values('$this->nombre','$this->apellido', '$this->dni','$this->tel','$this->direccion');";
            $resulset= mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn)>0){
                ?>
                <h2>Cliente cargado con exito.</h2>
                <?php
                
            }

            else{
                ?>
                <h2>ERROR AL HACER LA CONSULTA SQL.</h2>
                <?php
            }

            
        }

        public static function buscar($busqueda)
        {
            require "conexion.php";
            $sql="select * from clientes where cli_nombre='$busqueda' ;";
            $resulset= mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn)>0){
                
                while($registro=mysqli_fetch_assoc($resulset)){
                    ?>
                    <table>
                        <tr>
                            <th>Nro. Cliente</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                        </tr>

                        <tr>
                            <td><?php echo $registro['cli_id']; ?></td>
                            <td><?php echo $registro['cli_nombre']; ?></td>
                            <td><?php echo $registro['cli_apellido']; ?></td>
                            <td><?php echo $registro['cli_dni']; ?></td>
                            <td><?php echo $registro['cli_tel']; ?></td>
                            <td> <?php echo $registro['cli_direccion'];?></td>

                        </tr>
                    </table>

                    <?php
                }
            }

            else{
                ?>
                <h2>NO SE ENCONTRARON RESULTADOS.</h2>
                <?php
            }
            
        }

        public function getNombre(){
            return $this->tel;
        }
        
    }


?>