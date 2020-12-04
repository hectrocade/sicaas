<?php
class novedad
{
	private $pdo;
    
    public $ID_NOVEDAD;
    public $ID_CONTROL;
    public $ID_TIPO;
    public $ID_ACTIVO;
	public $NOVEDAD;
	public $DESCRIPCION;
    public $NAM;  

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

	public function Listar($OPTION,$VALUE,$F_I,$F_F)
	{
		try
		{
			$result = array();

			if ($OPTION == 1) 
			{
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDAD1(?,?)");
				$stm->execute(array(
					$F_I,
					$F_F,
				));
			}
			
			else if ($OPTION == 2)
			{
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDAD2(?,?,?)");
				$stm->execute(array(
					$F_I,
					$F_F,
					$VALUE
				));
			}
			
			else{
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDAD3(?,?,?)");
				$stm->execute(array(
					$F_I,
					$F_F,
					$VALUE
				));
			}

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listaras($VALUE)
	{
		try
		{
			$result = array();

				$stm = $this->pdo->prepare("CALL CONSUTARNAS(?)");
				$stm->execute(array(
					$VALUE,
				));
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Obtener($ID_NOVEDAD)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM NOVEDADES WHERE ID_NOVEDAD = ?");
			          

			$stm->execute(array($ID_NOVEDAD));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	/*public function Eliminar($ID_novedad)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM novedad WHERE ID_novedad = ?");			          
			$stm->execute(array($ID_novedad));

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}*/

	public function Inactivar($ID_novedad)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_NOVEDAD(?)");			          
			$stm->execute(array($ID_novedad));

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
            $sql = "CALL ACTUALIZAR_NOVEDAD(?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->ID_NOVEDAD,
                        $data->DESCRIPCION, 
                        $data->ID_ACTIVO, 
						$data->ID_TIPO, 
						$data->ID_CONTROL,
						$data->NAM,
					)
					
			);
			return 1;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Registrar(novedad $data )
	{    
		$str = "1234567890";
			$token = 0 ;
			for($i = 0; $i < 5; $i++) {
				$token .= substr($str,rand(0,10),1);
   			}
			$sql = "CALL REGISTRAR_NOVEDAD(?,?,?,?,?,?)";

			$this->pdo->prepare($sql)->execute(
				array(
					$data->DESCRIPCION, 
					$data->ID_ACTIVO, 
					$data->ID_TIPO, 
					$data->ID_CONTROL,
					$data->NAM,
					$token 
				)
			);
			if ($data->NAM==2) {

				$this -> notificar($token);
				return 1;
				
			}else{
				return 2;
			}
			
            



	}
	public function notificar($token){

		$sql = "CALL NOTIFICARNOVEDAD(?)";

		$stm = $this ->pdo ->prepare($sql);
		$stm -> execute(array($token));
		$result = $stm -> fetch(PDO::FETCH_OBJ);
		


      $IDNOVEDAD=$result->ID_NOVEDAD;

	   $DESC=$result->DESCRIPCION;
	   $AMBIENTE=$result->NOMBREA;
	   $SERIAL=$result->NSERIAL;
	   $MARC=$result->MARCA;
	   $CATEGORIA=$result->NOMBRE_CATEGORIA;
	   $TIPO=$result->NOMTI;
	   $POR=$result->NOMBRE;
	   $DIA=$result->USUARIO;

            $to="hectrocade@gmail.com";
			$subject="Novedad SICAAS";
			$message="Registrada el: ".$DIA." por el usuario: ".$POR."<br/> En el ambiente ".$AMBIENTE." <br/> Activo involucrado: ".$CATEGORIA." ".$MARC."
			 ".$SERIAL."<br/> Descripcion: <br/>".$DESC;
			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$headers .= "From: SICAAS < sicaassena@gmail.com >\r\n";
			$bool = mail($to,$subject,$message,$headers);



		
		



	}

	public function listar_control()
	{
		try
		{
			$usersession = $_SESSION['IDENTIFICACION'];
			foreach ($usersession as $user) {

			}

			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT D.ID_AMBIENTE, D.ID_CONTROL, A.NOMBRE_A, S.NOMBRE FROM  detalle_control_ambiente D INNER JOIN ambientes A ON 
				D.ID_AMBIENTE = A.ID_AMBIENTE JOIN ambiente AM ON D.ID_AMBIENTE=AM.ID_AMBIENTE JOIN sede S ON S.ID_SEDE=AM.ID_SEDE  WHERE NOW() <= DATE_ADD(fecha, interval 6 hour) AND ID_USUARIO = '$user->ID_USUARIO';
				");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_tipo()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT * FROM tipo_novedad
				");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listaractivos($VALUE)
	{
		try
		{
			   
			$result = array();
			
				$stm = $this->pdo->prepare("SELECT DE.ID_ACTIVO, AC.SERIAL_A AS NSERIAL , AC.MARCA ,CA.NOMBRE_CATEGORIA , DC.ID_CONTROL FROM detalle_ambiente_activo DE JOIN activo AC 
				ON DE.ID_ACTIVO=AC.ID_ACTIVO JOIN categoria CA ON AC.CATEGORIA=CA.ID_CATEGORIA JOIN detalle_control_ambiente DC ON DC.ID_AMBIENTE=DE.ID_AMBIENTE WHERE DC.ID_CONTROL=?");


			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listarcontrol2($VALUE)
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("SELECT ID_CONTROL FROM DETALLE_CONTROL_AMBIENTE WHERE ID_CONTROL=?");


			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
}
