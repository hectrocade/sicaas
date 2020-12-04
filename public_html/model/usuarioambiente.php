<?php
class usuarioambiente
{
	private $pdo;
    
    public $USUARIO;
    public $AMBIENTE;

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

	public function Listar()
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("CALL CONSULTAR_ASIGNACIONU()");


			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function Inactivar($ID_ASIGNACION)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL TERMINAR_ASIGNACION(?)");			          
			$stm->execute(array($ID_ASIGNACION));

			return 1;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Registrar(usuarioambiente $data)
	{ 
			$sql = "CALL REGISTRAR_ASIGNACION(?,?)";

			$this->pdo->prepare($sql)->execute(
				array(                       
                    $data->USUARIO,
                    $data->AMBIENTE
				)
			);



			return 1;

    }
    
    public function listar_cuentadante()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE ID_ROL=2 AND EST_ASIG=0");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_ambiente()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT A.ID_AMBIENTE, A.NOMBRE_A, S.NOMBRE FROM ambientes A INNER JOIN sedes S ON A.ID_SEDE = S.ID_SEDE WHERE ID_AMBIENTE NOT IN (SELECT DISTINCT ID_AMBIENTE FROM d_usuario_ambiente_c1) AND ESTADO = 1;
				");//CONSULTA MODIFICADA, TRAE LOS AMBIENTES QUE NO ESTAN ASIGNADOS - REQUIERE UN OBJETO NUEVO - "VISTA: D_USUARIO_AMBIENTE_C1"

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}
