<?php
    abstract class Persona{
        protected $nombre;
        protected $apellido;
        protected $dni;
        protected $tel;

        public function __construct($nombre,$apellido,$dni,$tel)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dni= $dni;
            $this->tel=$tel;
        }

        abstract public function mostrarDatos();

        abstract public function darDeAlta();

        abstract  public static function buscar();

        protected function saludar (){
            echo "Hola soy ". $this->nombre." ".$this->apellido." y soy de la clase [".strtolower((new ReflectionClass($this))->getShortName())."].";
        }
    }
?>