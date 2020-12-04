<?php
require_once 'model/activoambiente.php';

class activoambienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new activoambiente();
    }
    
    public function Index(){
        
        require_once 'view/activoambiente/consultarAA.php';
        $this -> model -> Listar();
    }

    public function Index1(){
        
        require_once 'view/activoambiente/ambienteAA.php';
        $this -> model -> Listar1();
    }
    
    public function Crud(){
        $activoambiente = new activoambiente();
        
        if(isset($_REQUEST['ID_AMBIENTE'])){
            $activoambiente = $this->model->Obtener($_REQUEST['ID_AMBIENTE']);
        }
        
        require_once 'view/ambiente/actualizarA.php';
        
    }

    public function Nuevo(){
        $activoambiente = new activoambiente();

        require_once 'view/activoambiente/registrarAA.php';
    }

    
    public function Guardar(){
        $activoambiente = new activoambiente();
        $activoambiente->NOMBRE = $_REQUEST['ID_AMBIENTE'];
        $activoambiente->ID_ACTIVO = $_REQUEST['ID_ACTIVO'];  
  
        require_once 'view/activoambiente/registrarAA.php';

  
            
             $resultado=$this->model->Registrar($activoambiente);

             if ($resultado==1) {
                echo '<script>
                swal({
                   title: "Activo asignado correctamente!",
                   icon: "success",
                   button: "Continuar",
                 });
    
    </script>';	
            }
    }
    public function Editar(){
        $activoambiente = new ambiente();
        $activoambiente->ID_AMBIENTE = $_REQUEST['ID_AMBIENTE'];
        $activoambiente->NOMBRE = $_REQUEST['NOMBRE'];
        $activoambiente->ID_SEDE = $_REQUEST['ID_SEDE'];


        $this->model->Actualizar($activoambiente);

        header('Location: index.php?c=menu');
    }
    
    public function Desactivar(){
        $resultado = $this->model->Inactivar($_REQUEST['ID_ASIGNACION']);

        require_once 'view/activoambiente/consultarAA.php';

        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Tarea realizada correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }
    }

    public function Listus(){
        require_once 'view/ambiente/consultara.php';
    }

}