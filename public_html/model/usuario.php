<?php
class usuario
{
	private $pdo;
    
    public $ID_USUARIO;
    public $IDENTIFICACION;
    public $CONTRASENA;
    public $NOMBRE;  
    public $CELULAR;
    public $TELEFONO;
    public $DIRECCION;
    public $CORREO;
    public $ID_ROL;
    public $ESTADO;
    public $REGISTRADO_POR;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($OPTION,$VALUE)
	{
		try
		{
			$result = array();
			if ($OPTION==1) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO3(?)");
			}elseif ($OPTION==2) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO4(?)");
			}elseif ($OPTION==3) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO5()");
			}elseif ($OPTION==4) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO6()");
			}elseif ($OPTION==5) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO7()");
			}elseif ($OPTION==6) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO1()");
			}elseif ($OPTION==7) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO2()");
			}else{
				$stm = $this->pdo->prepare("CALL CONSULTAR_USUARIO8()");

			}

			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Listarmi($VALUE)
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE ID_USUARIO=?");


			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function Obtener($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE ID_USUARIO = ?");
			          

			$stm->execute(array($ID_USUARIO));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	public function Inactivar($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_USUARIO(?)");			          
			$stm->execute(array($ID_USUARIO));

			 return 1;

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function admin($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL asignarrol1(?)");			          
			$stm->execute(array($ID_USUARIO));

			return 1;

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function cuenta($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL asignarrol2(?)");			          
			$stm->execute(array($ID_USUARIO));

			return 1;

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function instruc($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL asignarrol3(?)");			          
			$stm->execute(array($ID_USUARIO));
            return 1;
			
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}




	public function Activar($ID_USUARIO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL activar_usuario(?)");			          
			$stm->execute(array($ID_USUARIO));

			return 1;

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "CALL actualizar_usuario(?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_USUARIO,
				    	$data->IDENTIFICACION,                       
                        $data->NOMBRE,
                        $data->CORREO,
                        $data->ID_ROL
					)
				);

			     echo '<script>
		  alert("El usuario ha sido actualizado");
		  window.location = "index.php?c=usuario&a=Listus";
		</script>';	

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar2($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET CELULAR=? , TELEFONO = ? ,DIRECCION = ? WHERE ID_USUARIO = ? ";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	
                         $data->CELULAR,
                        $data->TELEFONO,
                        $data->DIRECCION,
                        $data->ID_USUARIO
                        
					)
				);

        return 1;

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar3($data)
	{
	
		$sql = "SELECT * from usuario where  ID_USUARIO = ? ";

		
        $contador=0;

        
		$stm = $this ->pdo ->prepare($sql);
		$stm -> execute(array($data->ID_USUARIO));
		

		while($registro=$stm->fetch(PDO::FETCH_ASSOC)){			
			
			if (password_verify($data->PASSA, $registro['CONTRASENA'])) {
						$contador++;
					}		
					
			
		}


		
		if ($contador>0) {

			if ($data->PASS1 == $data->PASS2) {

				$ecripta= password_hash($data->PASS1, PASSWORD_DEFAULT);

				$sql2 = "UPDATE usuario SET CONTRASENA=? WHERE ID_USUARIO = ? ";

			$this->pdo->prepare($sql2)
			     ->execute(
				    array(
				    	
                         $ecripta,
                        $data->ID_USUARIO
                        
					)
				);
				
				echo '<script>
				window.location = "index.php?c=login";
	  	  </script>';
			}
			else{

				return 1;

			}





		}
		else {
			return 2;

		}

		

		


	}



	public function cambio($USER,$PASSW1,$PASSW2)
	{
		if ($PASSW1 != $PASSW2) {
	return 1;
		}else{
			try 
		{

			$ecript= password_hash($PASSW2, PASSWORD_DEFAULT);
			$sql = "UPDATE usuario SET CONTRASENA= '$ecript', TOKEN=NULL WHERE IDENTIFICACION = '$USER' ";

			$this->pdo->prepare($sql)
			     ->execute();

   return 2;

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}

		}
		
	}
	public function sesion($IDENTIFICACION){
		$sql = "SELECT * from usuario where IDENTIFICACION = ?";
	$stm = $this ->pdo ->prepare($sql);
	$stm -> execute(array($IDENTIFICACION));
	$result = $stm -> fetchAll(PDO::FETCH_OBJ);
	session_start();
	$_SESSION['IDENTIFICACION'] = $result;
	}
	public function Registrar(usuario $data )
	{    
  
		$sql = "SELECT count(*) FROM usuarios WHERE IDENTIFICACION = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$data->IDENTIFICACION]);
		$userExists = $stmt->fetchColumn();

		if($userExists == 0) {

			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
			$password = "";
			for($i = 0; $i < 8; $i++) {
				$password .= substr($str,rand(0,62),1);
   			}
   			$clave = password_hash($password, PASSWORD_DEFAULT);
			$sql = "CALL REGISTRAR_USUARIO(?,'$clave',?,?,?,?,?)";

			$this->pdo->prepare($sql)->execute(
				array(
					$data->IDENTIFICACION, 
					$data->NOMBRE, 
					$data->CELULAR, 
					$data->TELEFONO,
					$data->DIRECCION, 
					$data->CORREO 
					
				)
			);
				
			$to=$data->CORREO;
			$subject="Datos de acceso SICAAS";
			$message="Bienvenid@ a nuestro sistema " .$data->NOMBRE. ", sus datos de acceso son: <br/>  <b>Numero de documento:</b> ".$data->IDENTIFICACION."<br/> <b>Contraseña:</b>  ".$password;
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$headers .= "From: SICAAS < sicaassena@gmail.com >\r\n";
			mail($to,$subject,$message,$headers);
			return 1;


		}
		else{
			 return 2;
		

		
	}

	}

	public function validar($TOKEN){
		$sql = "SELECT * from usuarios where  TOKEN=?";

		$stm = $this ->pdo ->prepare($sql);
		$stm -> execute(array($TOKEN));
		$result = $stm -> fetchAll(PDO::FETCH_OBJ);
		if (empty($result)) {
		  echo '<script>
		  alert("El token es incorrecto");
		  window.location = "index.php?c=login";
		</script>';
		return false;

		}
		else {


		session_start();

		$_SESSION['IDENTIFICACION'] = $result;



		  echo '<script>
		  window.location = "index.php?c=recuperar&a=Reasignar";
		</script>';
		return true;
		}
		}
	
	public function recuperacion($IDENTIFICACION){
		$sql = "SELECT * from usuario where  IDENTIFICACION = ? ";

		$stm = $this ->pdo ->prepare($sql);
		$stm -> execute(array($IDENTIFICACION,));
		$result = $stm -> fetch(PDO::FETCH_OBJ);
		if (empty($result)) {
           		  echo '<script>
		  alert("El usuario no existe en el sistema");
		  window.location = "index.php?c=recuperar";
		</script>';
		return false;

		}
		else {

			$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
			$token = "";
			for($i = 0; $i < 4; $i++) {
				$token .= substr($str,rand(0,36),1);
   			}

   			try 
		{
			$stm = $this->pdo->prepare("CALL generar_token('$token',?)");			          
			$stm->execute(array($result->ID_USUARIO));

			 

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}



      $NOMBRE=$result->NOMBRE;

       $EMAIL=$result->CORREO;

            $to=$EMAIL;
			$subject="Recuperación de acceso SICAAS";
			$message="Bienvenid@ a nuestro sistema " .$NOMBRE. "<br/> su codigo unico para cambiar su contraseña es: ".$token;
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$headers .= "From: SICAAS < sicaassena@gmail.com >\r\n";
			mail($to,$subject,$message,$headers);
						echo '<script>
		 
		  window.location = "index.php?c=recuperar&a=Verificar";
		</script>';	

		}


		}
		public function ingreso($IDENTIFICACION,$CONTRASENA){
		$sql = "SELECT * from usuario where NOT ID_ROL=4 AND  NOT ESTADO=4  AND IDENTIFICACION = ? ";

		
        $contador=0;

        
		$stm = $this ->pdo ->prepare($sql);
		$stm -> execute(array($IDENTIFICACION));
		

		while($registro=$stm->fetch(PDO::FETCH_ASSOC)){			
			
			if (password_verify($CONTRASENA, $registro['CONTRASENA'])) {
						$contador++;
					}		
					
			
		}


		
		if ($contador>0) {
			$this -> sesion($IDENTIFICACION);
			return 1;

		}
		else {
			return 0;

		}

		

		}

		
}
