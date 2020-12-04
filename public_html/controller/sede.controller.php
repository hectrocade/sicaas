<?php
require_once 'model/sede.php';

class sedeController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new sede();
    }
    
    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];

        if($OPTION==0){
            require_once 'view/sede/consultarS.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

            </script>';	 

        }

        else if ($OPTION==3) {
            require_once 'view/sede/sede2.php';


        }else{

            require_once 'view/sede/sede.php';

        }
        
       $this -> model -> Listar($OPTION,$VALUE);
    }
    
    public function Crud(){
        $sede = new sede();
        
        if(isset($_REQUEST['ID_SEDE'])){
            $sede = $this->model->Obtener($_REQUEST['ID_SEDE']);
        }
        
        require_once 'view/sede/actualizarS.php';
        
    }

    public function Nuevo(){
        $sede = new sede();

        require_once 'view/sede/RegistrarS.php';
    }

    
    public function Guardar(){
        $sede = new sede();
        $sede->NOMBRE = $_REQUEST['NOMBRE'];
        $sede->DIRECCION = $_REQUEST['DIRECCION'];  
        $sede->TELEFONO = $_REQUEST['TELEFONO']; 
        $resultado=$this->model->Registrar($sede);
        require_once 'view/sede/RegistrarS.php';

        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Sede registrada correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }
    }
    public function Editar(){
        $sede = new sede();
        $sede->ID_SEDE = $_REQUEST['ID_SEDE'];
        $sede->NOMBRE = $_REQUEST['NOMBRE'];
        $sede->DIRECCION = $_REQUEST['DIRECCION'];
        $sede->TELEFONO = $_REQUEST['TELEFONO'];

        $resultado=$this->model->Actualizar($sede);
        require_once 'view/sede/consultarS.php';

        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Sede actualizada correctamente!",
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
        $res = $this->model->Inactivar($_REQUEST['ID_SEDE']);

        require_once 'view/sede/consultarS.php';

        if ($res == 1) {
            echo '<script>
            swal({
               title: "Sede inactivada correctamente!",
               icon: "success",
               button: "Continuar",
             });

            </script>';	
        }
        
    }

    public function Activar(){
        $res = $this->model->Activar($_REQUEST['ID_SEDE']);

        require_once 'view/sede/consultarS.php';

        if ($res == 1) {
            echo '<script>
            swal({
               title: "Sede activada correctamente!",
               icon: "success",
               button: "Continuar",
             });

            </script>';	
        }
        
    }

    public function consultarS(){
        require_once 'view/sede/consultarS.php';

    }

}