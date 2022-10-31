<?php

   
    

    
    class Empleado extends Persona{
        private $nroEmpleado;
        private $tel;
        private $rol;
        private $fechaIn;
        private $fechaAn;
        private $direccion;

        
        public function __construct($nombre,$apellido,$dni,$tel,$fechaIn, $sueldo,$rol,$direccion)
        {

            parent::__construct($nombre,$apellido,$dni);
            $this->tel= $tel;
            $this->fechaIn = $fechaIn;
            $this->sueldo= $sueldo;
            $this->rol=$rol;
            $this->direccion=$direccion;
            
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
                            <th>Dirección</th>
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
                            <td><?php echo $registro['emp_direccion']; ?></td>
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
            $sql="insert into empleados(emp_nombre, emp_Apellido, emp_dni, emp_tel,emp_sueldo,emp_fechaIn,rol_id,emp_direccion)values('$this->nombre','$this->apellido', '$this->dni','$this->tel',$this->sueldo,'$this->fechaIn',$this->rol,'$this->direccion');";
            $resulset= mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn)>0){
                ?>
                <h2>Empleado cargado con exito.</h2>
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
            $sql="select * from empleados where emp_nombre='$busqueda' ;";
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
                            <th>Dirección</th>
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
                            <td><?php echo $registro['emp_direccion']; ?></td>
                            <td></td>

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
            return $this->nombre;
        }
        
    }

   
?>