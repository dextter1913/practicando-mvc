<?php 
require_once 'modelbase.php';
    class empleado  extends modelbase
    {
        public function __construct($id,$nombre,$apellido) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function mostrarDatos(){
            $id = $this->id;
            $nombre = $this->nombre;
            $apellido = $this->apellido;

            return "$id $nombre $apellido";
        }
    }
    
?>