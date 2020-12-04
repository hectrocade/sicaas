<?php
require_once 'model/control_ambiente.php';

class control_ambienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new control_ambiente();
    }

    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];

        require_once 'view/header.php';
        require_once 'view/control_ambiente/CA.php';
      $this -> model -> Listar($OPTION,$VALUE,$F_I,$F_F);
    }
    
    public function Index1(){
        if($_POST['OPTION']==0){
            require_once 'view/controlambiente/consultas/Ambientesporinstructor.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }else{

        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];

        require_once 'view/controlambiente/resultados/Ambientesporinstructor.php';
     
        }
    }

    public function Index2(){
        if($_POST['OPTION']==0){
            require_once 'view/controlambiente/consultas/Novedadesregistradas.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }else{
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];
        require_once 'view/controlambiente/resultados/Novedadesregistradas.php';
        }
    }

    public function Index3(){
        if($_POST['OPTION']==0){
            require_once 'view/controlambiente/consultas/Activosconnovedad.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }else{
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];

       
        require_once 'view/controlambiente/resultados/Activosconnovedad.php';
        }
    }

    public function Index4(){
        $VALUE = $_POST['VALUE'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];
        require_once 'view/controlambiente/resultados/Seguimientoactivo.php';
    
    }

    public function Index5(){
        $VALUE = $_POST['VALUE'];
        $F_I = $_POST['F_I'];
        $F_F = $_POST['F_F'];

        require_once 'view/controlambiente/resultados/Seguimientoambiente.php';
    }
    
    public function Crud(){
        $control_ambiente = new control_ambiente();
        
        if(isset($_REQUEST['ID_CONTROL'])){
            $control_ambiente = $this->model->Obtener($_REQUEST['ID_CONTROL']);
        }
        
        require_once 'view/header.php';
        require_once 'view/control_ambiente/actualizarCA.php';
        
    }

    public function Nuevo(){
        $control_ambiente = new control_ambiente(); 
        require_once 'view/controlambiente/cambientenuevo.php';
    }

    
    public function Guardar(){

        if($_REQUEST['ID_AMBIENTE']==0){
            require_once 'view/controlambiente/cambientenuevo.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un ambiente!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }else{
            $control_ambiente = new control_ambiente();

        $control_ambiente->ID_AMBIENTE = $_REQUEST['ID_AMBIENTE'];
        $control_ambiente->ID_USUARIO = $_REQUEST['ID_USUARIO'];
        $control_ambiente->DESCRIPCION_AMBIENTE = $_REQUEST['DESCRIPCION_AMBIENTE'];  
        $control_ambiente->INCONSISTENCIA = $_REQUEST['INCONSISTENCIA'];

        $result=$this->model->Registrar($control_ambiente);
        if ($result==1) {
            require_once 'view/controlambiente/cambientenuevo.php';
            echo '<script>
            swal({
               title: "Control de ambiente registrado",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }

        }
        
        

       
        
    }
    public function Editar(){
        $control_ambiente = new control_ambiente();

        $control_ambiente->ID_CONTROL = $_REQUEST['ID_CONTROL'];
        $control_ambiente->ID_USUARIO = $_REQUEST['ID_USUARIO'];
        $control_ambiente->ID_AMBIENTE = $_REQUEST['ID_AMBIENTE'];
        $control_ambiente->DESCRIPCION_AMBIENTE = $_REQUEST['DESCRIPCION_AMBIENTE'];  
        $control_ambiente->INCONSISTENCIA = $_REQUEST['INCONSISTENCIA'];


        $this->model->Actualizar($control_ambiente);

        header('Location: index.php?c=menu');
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID_CONTROL']);
        header('Location: ?c=control_ambiente&a=Listus');
    }*/public function Desactivar(){
        $this->model->Inactivar($_REQUEST['ID_CONTROL']);
        header('Location: ?c=control_ambiente&a=Listus');
    }

    public function List(){
        require_once 'view/header.php';
        require_once 'view/control_ambiente/consultarCA.php';
        require_once 'view/includes/footer.php';
    }

    public function ListAUI(){
        require_once 'view/controlambiente/consultas/Ambientesporinstructor.php';
    }

    public function ListNRPU(){
        require_once 'view/controlambiente/consultas/Novedadesregistradas.php';
    }

    public function ListAAN(){
        require_once 'view/controlambiente/consultas/Activosconnovedad.php';
    }
    
    public function ListSNA(){
        require_once 'view/controlambiente/consultas/Seguimientoactivo.php';
    }

    public function ListSA(){
        require_once 'view/controlambiente/consultas/Seguimientoambiente.php';
    }
    

}