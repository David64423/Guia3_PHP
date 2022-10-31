<?php

    

    
    class Cliente extends Persona{
        private $nroCliente;
        private $tel;

        
        public function __construct($nombre,$apellido,$dni,$tel)
        {

            parent::__construct($nombre,$apellido,$dni);
            $this->tel= $tel;

            
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
                        </tr>

                        <tr>
                            <td><?php echo $registro['cli_id']; ?></td>
                            <td><?php echo $registro['cli_nombre']; ?></td>
                            <td><?php echo $registro['cli_apellido']; ?></td>
                            <td><?php echo $registro['cli_dni']; ?></td>
                            <td><?php echo $registro['cli_tel']; ?></td>

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
            
        }

        public static function buscar()
        {
            require "conexion.php";
            
        }

        public function getNombre(){
            return $this->tel;
        }
        
    }


?>