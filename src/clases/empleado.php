<?php

   
    

    
    class Empleado extends Persona{
        private $nroEmpleado;
        private $tel;
        private $rol;
        private $fechaIn;
        private $fechaAn;

        
        public function __construct($nombre,$apellido,$dni,$tel,$fechaIn, $sueldo,$rol)
        {

            parent::__construct($nombre,$apellido,$dni);
            $this->tel= $tel;
            $this->fechaIn = $fechaIn;
            $this->sueldo= $sueldo;
            $this->rol=$rol;
            
            }
            

        
        
        

        public static function listar()
        {
            require "conexion.php";
            $sql="select * from empleados;";
            $resulset= mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn)>0){
                
                while($registro=mysqli_fetch_assoc($resulset)){
                    ?>
                    <table>
                        <tr>
                            <th>Nro. Empleado</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Sueldo</th>
                            <th>Fecha Ingreso</th>
                            <th>Antiguedad</th>
                        </tr>

                        <tr>
                            <td><?php echo $registro['emp_id']; ?></td>
                            <td><?php echo $registro['emp_nombre']; ?></td>
                            <td><?php echo $registro['emp_apellido']; ?></td>
                            <td><?php echo $registro['emp_dni']; ?></td>
                            <td><?php echo $registro['emp_tel']; ?></td>
                            <td><?php echo $registro['emp_sueldo']; ?></td>
                            <td><?php echo $registro['emp_fechaIn']; ?></td>
                            <td></td>

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
            return $this->nombre;
        }
        
    }

   
?>