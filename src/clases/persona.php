<?php
    abstract class Persona{
        protected $nombre;
        protected $apellido;
        protected $dni;
        
        

        public function __construct($nombre,$apellido,$dni)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dni= $dni;
            

        }

        abstract public static function listar();

        abstract public function darDeAlta();

        abstract  public static function buscar($busqueda);

        protected function saludar (){
            echo "Hola soy ". $this->nombre." ".$this->apellido." y soy de la clase [".strtolower((new ReflectionClass($this))->getShortName())."].";
        }
    }
?>