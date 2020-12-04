<?php
require_once 'model/novedad.php';
class novedadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new novedad();
    }
    
    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];

        require_once 'view/header.php';
        require_once 'view/novedad/novedad.php';
       $this -> model -> Listar($OPTION,$VALUE,$F_I,$F_F);
    }

    public function consultaras(){
        $VALUE = $_GET['ID_USUARIO'];
        require_once 'view/novedad/consultarmn.php';
       $this -> model -> Listaras($VALUE);
    }
    
    public function Crud(){
        $novedad = new novedad();
        
        if(isset($_REQUEST['ID_NOVEDAD'])){
            $novedad = $this->model->Obtener($_REQUEST['ID_NOVEDAD']);
        }
        
        require_once 'view/header.php';
        require_once 'view/novedad/actualizarN.php';
        
    }

    public function Nuevo(){
        $novedad = new novedad();

        
        require_once 'view/novedad/control.php';
        
    }

    public function Seleccionar(){
         if($_REQUEST['ID_CONTROL']==1){
             
        require_once 'view/novedad/control.php';
        echo '<script>
            swal({
               title: "Debe seleccionar un control de ambiente",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }else{
        $novedad = new novedad();
        $VALUE = $_REQUEST['ID_CONTROL'];
        require_once 'view/novedad/novedadnuevo.php';
            }
    }

    
    public function Guardar(){

        if($_REQUEST['ID_TIPO']==0){
            $VALUE = $_REQUEST['ID_CONTROL'];
        require_once 'view/novedad/novedadnuevo.php';
        echo '<script>
            swal({
               title: "Debe seleccionar un tipo de novedad",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }elseif($_REQUEST['ID_ACTIVO']==0){
                $VALUE = $_REQUEST['ID_CONTROL'];
        require_once 'view/novedad/novedadnuevo.php';
        echo '<script>
            swal({
               title: "Debe seleccionar un activo",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }elseif($_REQUEST['NAM']==0){
                $VALUE = $_REQUEST['ID_CONTROL'];
        require_once 'view/novedad/novedadnuevo.php';
        echo '<script>
            swal({
               title: "¿Desea notificar a mesa de ayuda?",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }else{
        
        $novedad = new novedad();
        $novedad->ID_CONTROL = $_REQUEST['ID_CONTROL'];
        $novedad->ID_TIPO = $_REQUEST['ID_TIPO'];
        $novedad->ID_ACTIVO = $_REQUEST['ID_ACTIVO'];  
        $novedad->DESCRIPCION = $_REQUEST['DESCRIPCION']; 
        $novedad->NAM = $_REQUEST['NAM'];    

        $res=$this->model->Registrar($novedad);

        require_once 'view/novedad/control.php';


        if ($res==1) {
            echo '<script>
            swal({
               title: "La novedad se ha registrado y notificado",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }else{
                echo '<script>
            swal({
               title: "La novedad se ha registrado",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        }

    }


    public function Editar(){
        $novedad = new novedad();

        $novedad->ID_NOVEDAD = $_REQUEST['ID_NOVEDAD'];
        $novedad->ID_CONTROL = $_REQUEST['ID_CONTROL'];
        $novedad->ID_TIPO = $_REQUEST['ID_TIPO'];
        $novedad->ID_ACTIVO = $_REQUEST['ID_ACTIVO'];  
        $novedad->DESCRIPCION = $_REQUEST['DESCRIPCION']; 
        $novedad->NAM = $_REQUEST['NAM'];    


        $res=$this->model->Actualizar($novedad);
        require_once 'view/header.php';
        require_once 'view/novedad/consultarN.php';
        require_once 'view/includes/footer.php';

        if ($res==1) {
            echo '<script>
            swal({
               title: "La novedad se ha modificado",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID_novedad']);
        header('Location: ?c=novedad&a=Listus');
    }*/
    
    public function Desactivar(){
        $this->model->Inactivar($_REQUEST['ID_novedad']);
        header('Location: ?c=novedad&a=Listus');
    }
    public function ConsultarN(){
        require_once 'view/header.php';
        require_once 'view/novedad/consultarN.php';
        require_once 'view/includes/footer.php';
    }
    
}