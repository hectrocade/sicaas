<?php
require_once 'model/categoria.php';

class categoriaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new categoria();
    }
    
    public function Index(){

        require_once 'view/categoria/consultarC.php';
        $this -> model -> Listar();

        
    }
    
    public function Crud(){
        $categoria = new categoria();
        
        if(isset($_REQUEST['ID_CATEGORIA'])){
            $categoria = $this->model->Obtener($_REQUEST['ID_CATEGORIA']);
        }
        
        require_once 'view/categoria/actualizarC.php';
        
    }

    public function Nuevo(){
        $categoria = new categoria();

        require_once 'view/categoria/registrarC.php';
    }

    
    public function Guardar(){
        $categoria = new categoria();
        $categoria->NOMBRE = $_REQUEST['NOMBRE'];
        $resultado = $this->model->Registrar($categoria);
        require_once 'view/categoria/registrarC.php';

        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Categoría registrada correctamente!",
               icon: "success",
               button: "Continuar",
             });

            </script>';	
        }
       
        
    }
    public function Editar(){
        $categoria = new categoria();
        $categoria->ID_CATEGORIA = $_REQUEST['ID_CATEGORIA'];
        $categoria->NOMBRE = $_REQUEST['NOMBRE'];
        $resultado = $this->model->Actualizar($categoria);
        require_once 'view/categoria/consultarC.php';
        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Categoría actualizada correctamente!",
               icon: "success",
               button: "Continuar",
             });

            </script>';	
        }


    }
    
    public function Desactivar(){
        $res = $this->model->Inactivar($_REQUEST['ID_CATEGORIA']);

        require_once 'view/categoria/consultarC.php';

        if ($res == 1) {
            echo '<script>
            swal({
               title: "Categoría inactivada correctamente!",
               icon: "success",
               button: "Continuar",
             });

            </script>';	
        }

    }

    public function consultarC(){
        require_once 'view/categoria/consultarC.php';
    }
}