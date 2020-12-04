<?php
require_once 'model/activo.php';

class activoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new activo();
    }
    
    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];

        if($OPTION==0){
            require_once 'view/activo/activocon.php';

            echo '<script>
            swal({
               title: "¡Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });
            </script>'; 
        
        }
        
        else{
            require_once 'view/activo/activo.php';
        }

        
       $this -> model -> Listar($OPTION,$VALUE);
    }

    public function Index2(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        require_once 'view/activo/activo2.php';
       $this -> model -> Listar($OPTION,$VALUE);
    }
    
    
    public function Crud(){
        $activo = new activo();
        
        if(isset($_REQUEST['ID_ACTIVO'])){
            $activo = $this->model->Obtener($_REQUEST['ID_ACTIVO']);
        }
        
        require_once 'view/activo/actualizarA.php';
        
    }

    public function Nuevo(){
        $activo = new activo();

        require_once 'view/activo/activonuevo.php';
    }

    
    public function Guardar(){
        $activo = new activo();
        $activo->SERIAL_A = $_REQUEST['SERIAL'];
        $activo->MARCA = $_REQUEST['MARCA'];  
        $activo->CATEGORIA = $_REQUEST['ID_CATEGORIA']; 
        $resultado = $this->model->Registrar($activo);
        require_once 'view/activo/activonuevo.php';

        if ($resultado==1) {
                echo '<script>
                swal({
                   title: "Activo registrado correctamente!",
                   icon: "success",
                   button: "Continuar",
                 });
    
                </script>';	
            }
    }

    public function Editar(){
        $activo = new activo();
        $activo->ID_ACTIVO = $_REQUEST['ID_ACTIVO'];
        $activo->SERIAL_A = $_REQUEST['SERIAL'];
        $activo->MARCA = $_REQUEST['MARCA'];  
        $activo->CATEGORIA = $_REQUEST['CATEGORIA']; 

        $resultado = $this->model->Actualizar($activo);
        require_once 'view/activo/activonuevo.php';

        if ($resultado==1) {
                echo '<script>
                swal({
                   title: "Activo actualizado correctamente!",
                   icon: "success",
                   button: "Continuar",
                 });
    
                </script>';	
            }

    
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID_sede']);
        header('Location: ?c=sede&a=Listus');
    }*/
    public function Desactivar(){
        $this->model->Inactivar($_REQUEST['ID_ACTIVO']);
        $resultado = require_once 'view/activo/activonuevo.php';
        if ($resultado==1) {
                echo '<script>
                swal({
                   title: "Activo inactivado correctamente!",
                   icon: "success",
                   button: "Continuar",
                 });
    
                </script>';	
            }

    }
    public function consultarA(){
        require_once 'view/activo/activocon.php';
    }
    public function consultarA2(){
        require_once 'view/activo/activocon.php';
    }

}