<?php
class control_ambiente
{
	private $pdo;
    
    public $ID_CONTROL;
    public $ID_AMBIENTE;
    public $ID_USUARIO;
    public $DESCRIPCION_AMBIENTE;  
    public $INCONSISTENCIA;

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
			if ($OPTION == 1) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR1(?,?)");
				$stm->execute(array(
					$F_I,
					$F_F,
				));
			}elseif ($OPTION == 2) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR2(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
				));
			}elseif ($OPTION == 3) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR3(?,?,?)");
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

	public function Listar1($OPTION,$VALUE,$F_I,$F_F)
	{
		try
		{
			$result = array();
			if ($OPTION == 1) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR1(?,?)");
				$stm->execute(array(
					$F_I,
					$F_F,
				));
			}elseif ($OPTION == 2) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR2(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
				));
			}elseif ($OPTION == 3) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTES_USADOS_INSTRUCTOR3(?,?,?)");
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

	public function Listar2($OPTION,$VALUE,$F_I,$F_F)
	{
		try
		{
			$result = array();
			if ($OPTION==1) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDADES_REGISTRADAS_USUARIO1(?,?)");
				$stm->execute(array(
					$F_I,
					$F_F
				));
			}elseif ($OPTION==2) {
				$stm = $this->pdo->prepare(" CALL CONSULTAR_NOVEDADES_REGISTRADAS_USUARIO2(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
					
				));
			}elseif ($OPTION==3) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDADES_REGISTRADAS_USUARIO3(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
				));
			}else{
				$stm = $this->pdo->prepare("CALL CONSULTAR_NOVEDADES_REGISTRADAS_USUARIO4(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
					
				));

			}

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar3($OPTION,$VALUE)
	{
		try
		{
			$result = array();
			if ($OPTION==1) {
				$stm = $this->pdo->prepare("CALL  CONSULTAR_ACTIVO_AMBIENTE_NOVEDAD1(?)");
			}elseif ($OPTION==2) {
				$stm = $this->pdo->prepare("CALL  CONSULTAR_ACTIVO_AMBIENTE_NOVEDAD2(?)");
			}

			$stm->execute(array($VALUE));


			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar4($VALUE,$F_I,$F_F)
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("CALL SEGUIMIENTO_NOVEDAD_A2(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F,
					
				));
			

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar5($VALUE,$F_I,$F_F)
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("CALL SEGUIMIENTO_AMBIENTE2(?,?,?)");
				$stm->execute(array(
					$VALUE,
					$F_I,
					$F_F
				));
			

			return $stm->fetchAll(PDO::FETCH_OBJ);
	}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Obtener($ID_CONTROL)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM D_CONTROL_AMBIENTE WHERE ID_CONTROL = ?");
			          

			$stm->execute(array($ID_CONTROL));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	/*public function Eliminar($ID_control_ambiente)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM control_ambiente WHERE ID_control_ambiente = ?");			          
			$stm->execute(array($ID_control_ambiente));

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}*/

	public function Inactivar($ID_control_ambiente)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_control_ambiente(?)");			          
			$stm->execute(array($ID_control_ambiente));

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
			$sql = "CALL ACTUALIZAR_DETALLE_CONTROL_AMBIENTE(?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_CONTROL,
				    	$data->ID_AMBIENTE, 
                        $data->ID_USUARIO,                        
                        $data->DESCRIPCION_AMBIENTE,
                        $data->INCONSISTENCIA,
					)
				);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{    
		
		$sql = "CALL REGISTRAR_DETALLE_CONTROL_AMBIENTE(?,?,?,?)";

		$this->pdo->prepare($sql)->execute(
			array(
				$data->ID_AMBIENTE,
				$data->ID_USUARIO, 
				$data->DESCRIPCION_AMBIENTE, 
				$data->INCONSISTENCIA
			)
		);

			return 1;

	}

		public function listar_ambiente()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT * FROM ambiente
				");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
