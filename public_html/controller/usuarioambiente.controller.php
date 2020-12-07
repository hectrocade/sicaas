<?php
require_once 'model/usuarioambiente.php';

class usuarioambienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new usuarioambiente();
    }
    
    public function Index(){
        
        require_once 'view/asignacionU/consultarAU.php';
       
    }


    public function Nuevo(){
        $usuarioambiente = new usuarioambiente();

        require_once 'view/asignacionU/asignarU.php';
    }

    
    public function Guardar(){
        if($_REQUEST['ID_USUARIO']==0){
            require_once 'view/asignacionU/asignarU.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un cuentadante!",
               icon: "error",
               button: "Continuar",
             });

            </script>';	
        

        }
        
        else if($_REQUEST['ID_AMBIENTE']==0)
        {
            require_once 'view/asignacionU/asignarU.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un ambiente!",
               icon: "error",
               button: "Continuar",
             });

            </script>';	
        }
        
        else{
            $usuarioambiente = new usuarioambiente();
            $usuarioambiente->USUARIO = $_REQUEST['ID_USUARIO'];
            $usuarioambiente->AMBIENTE = $_REQUEST['ID_AMBIENTE'];  
            $resultado=$this->model->Registrar($usuarioambiente);
    
            require_once 'view/asignacionU/asignarU.php';
    
            if ($resultado==1) {
                echo '<script>
                swal({
                   title: "Cuentadante asignado correctamente!",
                   icon: "success",
                   button: "Continuar",
                 });
    
                </script>';	
            }
        }
    }

    public function Desactivar(){
        $resultado = $this->model->Inactivar($_REQUEST['ID_ASIGNACION']);
        require_once 'view/asignacionU/consultarAU.php';

        if ($resultado==1) {
            echo '<script>
            swal({
               title: "Asignacion terminada correctamente!",
               icon: "success",
               button: "Continuar",
             });

</script>';	
        }
        
    }

}