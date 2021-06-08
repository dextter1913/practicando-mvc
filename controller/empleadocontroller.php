<?php 
    class empleadocontroller  
    {
        public function MostrarEmeplado(){
            require_once 'model/empleado.php';
            $mostrar = new empleado('123','Cristian','Aguirre');
            $mostrarView = $mostrar->mostrarDatos();
            require_once 'view/mostrardatos.php';
        }
        public function IngresandoDatos(){
            require_once 'view/ingresardatos.php';
            if (isset($_GET['btnmostrar'])) {
                require_once 'model/empleado.php';
                $mostrar = new empleado($_GET['id'],$_GET['nombre'],$_GET['apellido']);
                $mostrarView = $mostrar->MostrarDatos();
                require_once 'view/mostrardatos.php';
            }
        }
    }
