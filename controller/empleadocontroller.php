<?php 
    class empleadocontroller  
    {
        public function MostrarEmeplado(){
            require_once 'model/empleado.php';
            $mostrar = new empleado('123','Cristian','Aguirre');
            $mostrarView = $mostrar->mostrarDatos();
            require_once 'view/mostrardatos.php';
        }
    }
    
?>