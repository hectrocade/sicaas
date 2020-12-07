<?php
require_once 'model/ambiente.php';

class ambienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ambiente();
    }
    
    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];

        if($OPTION==0){
            require_once 'view/ambiente/ambientecon.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }
        if ($OPTION==1||$OPTION==2) {
        require_once 'view/ambiente/ambiente.php';
        }
        if($OPTION==3){
            require_once 'view/ambiente/ambiente2.php';
        }
        
       $this -> model -> Listar($OPTION,$VALUE);
    }
    public function Index2(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
         if($OPTION==0){
            require_once 'view/ambiente/ambientecon2.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }else{

        require_once 'view/ambiente/ambiente3.php';
       $this -> model -> Listar($OPTION,$VALUE);
        }
    }
    
    
    public function Crud(){
        $ambiente = new ambiente();
        
        if(isset($_REQUEST['ID_AMBIENTE'])){
            $ambiente = $this->model->Obtener($_REQUEST['ID_AMBIENTE']);
        }
        
        
        require_once 'view/ambiente/ambienteedit.php';
        
    }

    public function Nuevo(){
        $ambiente = new ambiente();
        $mensaje=0;
        
        require_once 'view/ambiente/ambientenuevo.php';
        
    }

    
    public function Guardar(){

        if($_REQUEST['ID_SEDE']==0){
            require_once 'view/ambiente/ambientenuevo.php';

            echo '<script>
            swal({
               title: "Debe seleccionar una sede!",
               icon: "error",
               button: "Continuar",
             });

            </script>';	
        

        }
        
        else
        {
            $ambiente = new ambiente();
            $ambiente->NOMBRE = $_REQUEST['NOMBRE'];
            $ambiente->ID_SEDE = $_REQUEST['ID_SEDE'];  
    
            $ambiente =$this->model->Registrar($ambiente);
                
    
            require_once 'view/ambiente/ambientenuevo.php';
                if ($ambiente==1) {
                    echo '<script>
                    swal({
                       title: "Ambiente registrado correctamente!",
                       icon: "success",
                       button: "Continuar",
                     });
        
                    </script>';	
                    }
                else{
        
                        echo '<script>
                        swal({
                           title: "El ambiente ya existe!",
                           icon: "error",
                           button: "Continuar",
                         });
            
                         </script>';	
                        
                    }
            
        
    }
   
                             

        
    }
    public function Editar(){
        $ambiente = new ambiente();
        $ambiente->ID_AMBIENTE = $_REQUEST['ID_AMBIENTE'];
        $ambiente->NOMBRE = $_REQUEST['NOMBRE'];
        $ambiente->ID_SEDE = $_REQUEST['ID_SEDE'];


        $ambiente =$this->model->Actualizar($ambiente);

        require_once 'view/ambiente/ambientecon.php';
        if ($ambiente==1) {
            echo '<script>
            swal({
               title: "Ambiente actualizado correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }
        
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID_ambiente']);
        header('Location: ?c=ambiente&a=Listus');
    }*/public function Desactivar(){
        $res=$this->model->Inactivar($_REQUEST['ID_AMBIENTE']);


        require_once 'view/ambiente/ambientecon.php';

        if ($res==1) {
            echo '<script>
            swal({
               title: "Ambiente inactivado correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }

        
    }
    public function activar(){
        $res=$this->model->activar($_REQUEST['ID_AMBIENTE']);


        require_once 'view/ambiente/ambientecon.php';
        if ($res==1) {
            echo '<script>
            swal({
               title: "Ambiente activado correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }
        
    }
    public function Listus(){
        require_once 'view/ambiente/ambientecon.php';

    }

    public function Listus2(){
require_once 'view/ambiente/ambientecon2.php';
    }

    public function Listus3(){
        $VALUES = $_GET['ID_USUARIO'];
        require_once 'view/ambiente/misambientes.php';

        $this -> model -> Listarasig($VALUES);

    }


    

}