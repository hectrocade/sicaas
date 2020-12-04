<?php
require_once 'model/usuario.php';

class usuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new usuario();
    }
    
    public function Index(){
        $VALUE = $_POST['VALUE'];
        $OPTION = $_POST['OPTION'];
        if($OPTION==0){
            require_once 'view/usuario/usuariocon.php';

            echo '<script>
            swal({
               title: "Debe seleccionar un tipo de consulta!",
               icon: "error",
               button: "Continuar",
             });

</script>';	
        

        }
        
        if ($OPTION==7) {
            require_once 'view/usuario/usuarioinactivo.php';
        }else if ($OPTION==6) {
        require_once 'view/usuario/usuarioactivo.php';
        }else if ($OPTION==8) {

        require_once 'view/usuario/sinrol.php';
        }else
        if($OPTION==1 )

        {
        require_once 'view/usuario/usuario.php'; 
        }else
        if($OPTION==2 )

        {
        require_once 'view/usuario/usuario.php'; 
        }
        else
        if($OPTION==3 )

        {
        require_once 'view/usuario/usuario.php'; 
        }
        else
        if($OPTION==4 )

        {
        require_once 'view/usuario/usuario.php'; 
        }
        else
        if($OPTION==5 )

        {
        require_once 'view/usuario/usuario.php'; 
        }

        

       $this -> model -> Listar($OPTION,$VALUE);
    }
    public function Myuser(){
        $USER = $_GET['ID_USUARIO'];
        require_once 'view/usuario/miusuario.php';
        $this -> model -> Listarmi($USER);

    }

    public function Changep(){
        $usuario = new usuario();
        
        if(isset($_REQUEST['ID_USUARIO'])){
            $usuario = $this->model->Obtener($_REQUEST['ID_USUARIO']);
        }
        require_once 'view/usuario/cmipass.php';
        

    }
    
    public function Crud(){
        $usuario = new usuario();
        
        if(isset($_REQUEST['ID_USUARIO'])){
            $usuario = $this->model->Obtener($_REQUEST['ID_USUARIO']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/actualizarU.php';
        
    }

    public function Crud2(){
        $usuario = new usuario();
        
        if(isset($_REQUEST['ID_USUARIO'])){
            $usuario = $this->model->Obtener($_REQUEST['ID_USUARIO']);
        }
        
        require_once 'view/usuario/actmiusuario.php';
        
    }
    
        public function Politica(){

        require_once 'view/usuario/politica.php';
        
    }


    public function Nuevo(){
        $usuario = new usuario();

        require_once 'view/header.php';
        require_once 'view/usuario/RegistrarU.php';
        require_once 'view/includes/footer.php';
    }

    public function NuevoU(){
        $usuario = new usuario();

        
        require_once 'view/usuario/register.php';
        
    }

    
    public function Guardar(){
        $usuario = new usuario();
        $usuario->IDENTIFICACION = $_REQUEST['IDENTIFICACION'];
        $usuario->NOMBRE = $_REQUEST['NOMBRE'];
        $usuario->CELULAR = $_REQUEST['CELULAR'];  
        $usuario->TELEFONO = $_REQUEST['TELEFONO']; 
        $usuario->DIRECCION = $_REQUEST['DIRECCION'];    
        $usuario->CORREO = $_REQUEST['CORREO'];  
        
                

  
            
             $registro=$this->model->Registrar($usuario);
             if ($registro==1) {
            require_once 'view/login/login.php';
            echo '<script>
            swal({
               title: "El usuario ha sido registrado, porfavor verifique su correo electronico",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
            if ($registro==2) {
                require_once 'view/login/login.php';
                echo '<script>
                swal({
                   title: "Lo sentimos , hubo un error",
                   icon: "error",
                   button: "Continuar",
                 });
    
    </script>';	
                }

       
        
    }
    public function Editar(){
        $usuario = new usuario();
        $usuario->ID_USUARIO = $_REQUEST['ID_USUARIO'];
        $usuario->IDENTIFICACION = $_REQUEST['IDENTIFICACION'];
        $usuario->NOMBRE = $_REQUEST['NOMBRE'];
        $usuario->CORREO = $_REQUEST['CORREO'];
        $usuario->ID_ROL = $_REQUEST['ID_ROL'];


        $this->model->Actualizar($usuario);

        
    }

    public function Editar3(){
        $usuario = new usuario();
        $usuario->ID_USUARIO = $_REQUEST['ID_USUARIO'];
        $usuario->PASSA = $_REQUEST['clavea'];
        $usuario->PASS1 = $_REQUEST['clave1'];
        $usuario->PASS2 = $_REQUEST['clave2'];



        $result=$this->model->Actualizar3($usuario);

        if ($result==1) {
            require_once 'view/index.php';
            echo '<script>
            swal({
               title: "Las contraseñas no coinciden",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }
            if ($result==2) {
                require_once 'view/index.php';
                echo '<script>
                swal({
                   title: "La contraseña introducida es incorrecta",
                   icon: "error",
                   button: "Continuar",
                 });
    
    </script>';	
                }

        
    }

    public function Editar2(){
        $usuario = new usuario();
        $usuario->ID_USUARIO = $_REQUEST['ID_USUARIO'];
        $usuario->CELULAR = $_REQUEST['CELULAR'];
        $usuario->TELEFONO = $_REQUEST['TELEFONO'];
        $usuario->DIRECCION = $_REQUEST['DIRECCION'];
        
        


        $usuario=$this->model->Actualizar2($usuario);


        require_once 'view/index2.php';




        
    }
    
    /*public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID_USUARIO']);
        header('Location: ?c=usuario&a=Listus');
    }*/public function Desactivar(){
        $result=$this->model->Inactivar($_REQUEST['ID_USUARIO']);
        if ($result==1) {


            require_once 'view/usuario/usuariocon.php';
    
                echo '<script>
                swal({
                   title: "El usuario ha sido inactivado",
                   icon: "success",
                   button: "Continuar",
                 });
    
    </script>';	
                }
        
    }

    public function Admin(){
        $res=$this->model->admin($_REQUEST['ID_USUARIO']);
        if ($res==1) {


        require_once 'view/usuario/usuariocon.php';

            echo '<script>
            swal({
               title: "El usuario ahora es administrador",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        
    }

    public function Cuenta(){
        $res=$this->model->cuenta($_REQUEST['ID_USUARIO']);
        if ($res==1) {

            require_once 'view/usuario/usuariocon.php';
            echo '<script>
            swal({
               title: "El usuario ahora es cuentadante",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        
    }

    public function Instruc(){
        $res=$this->model->instruc($_REQUEST['ID_USUARIO']);
        if ($res==1) {

            require_once 'view/usuario/usuariocon.php';
            echo '<script>
            swal({
               title: "El usuario ahora es instructor",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        
    }

    public function Activar(){
        $result=$this->model->Activar($_REQUEST['ID_USUARIO']);
        if ($result==1) {


            require_once 'view/usuario/usuariocon.php';
    
                echo '<script>
                swal({
                   title: "El usuario ha sido activado",
                   icon: "success",
                   button: "Continuar",
                 });
    
    </script>';	
                }
    }

    public function Listus(){

        require_once 'view/usuario/usuariocon.php';

    }
        public function ingreso(){

      $IDENTIFICACION = $_POST['IDENTIFICACION'];
      $CONTRASENA = $_POST['CONTRASENA'];
      $res=$this -> model -> ingreso($IDENTIFICACION,$CONTRASENA);
      


        if ($res==0) {

            require_once 'view/login/login.php';
            echo '<script>
            swal({
               title: "Usuario o contraseña incorrectos",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }
            else{
                echo '<script>
	  
                window.location = "index.php?c=menu";
              </script>';
            }
      
    }
    public function Recuperar(){

      $IDENTIFICACION = $_POST['DOCUMENTO'];
      $this -> model -> recuperacion($IDENTIFICACION);
    }

    public function Validar(){

      $TOKEN = $_POST['codigo'];
      $this -> model -> validar($TOKEN);
      require_once 'view/usuario/cambiopass.php';
    }
    public function Cambiar(){

      $USER = $_POST['usuario'];
      $PASSW1 = $_POST['pass1'];
      $PASSW2 = $_POST['pass2'];
      $result=$this -> model -> cambio($USER,$PASSW1,$PASSW2);

     if ($result==1) {

            require_once 'view/login/login.php';
            echo '<script>
            swal({
               title: "Las contraseñas no coinciden",
               icon: "error",
               button: "Continuar",
             });

</script>';	
            }
            else{
 require_once 'view/login/login.php';
            echo '<script>
            swal({
               title: "Contraseña reestablecida correctamente",
               icon: "success",
               button: "Continuar",
             });

</script>';	
            }
        
    }

}