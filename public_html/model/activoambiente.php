<?php
class activoambiente
{
	private $pdo;
    
    public $ID_DETALLE;
    public $ID_AMBIENTE;
    public $ID_ACTIVO;
    public $FECHA_ENTRADA;  
    public $FECHA_SALIDA; 
    public $DISPONIBILIDAD; 


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
			
				$stm = $this->pdo->prepare("SELECT A.NOMBRE AS NOMBREA , AC.SERIAL_A AS NSERIAL , AC.MARCA ,CA.NOMBRE_CATEGORIA, DE.ID_DETALLE, DE.FECHA_ENTRADA , DE.FECHA_SALIDA , DE.DISPONIBILIDAD FROM detalle_ambiente_activo DE JOIN ambiente A ON
				DE.ID_AMBIENTE=A.ID_AMBIENTE JOIN activo AC ON DE.ID_ACTIVO=AC.ID_ACTIVO JOIN categoria CA ON AC.CATEGORIA=CA.ID_CATEGORIA WHERE DE.FECHA_SALIDA IS NULL");


			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar1()
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("SELECT A.NOMBRE AS NOMBREA , AC.SERIAL_A AS NSERIAL , AC.MARCA ,CA.NOMBRE_CATEGORIA, DE.ID_DETALLE, DE.FECHA_ENTRADA , DE.FECHA_SALIDA , DE.DISPONIBILIDAD FROM detalle_ambiente_activo DE JOIN ambiente A ON
				DE.ID_AMBIENTE=A.ID_AMBIENTE JOIN activo AC ON DE.ID_ACTIVO=AC.ID_ACTIVO JOIN categoria CA ON AC.CATEGORIA=CA.ID_CATEGORIA WHERE DE.FECHA_SALIDA IS NOT NULL");


			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_activo()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO1()");

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
			
			
				$stm = $this->pdo->prepare("SELECT * FROM ambientes A INNER JOIN sedes S ON A.ID_SEDE = S.ID_SEDE;");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function Obtener($ID_AMBIENTE)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM AMBIENTES WHERE ID_AMBIENTE = ?");
			          

			$stm->execute(array($ID_AMBIENTE));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Inactivar($ID_ASIGNACION)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL TERMINAR_ASIGNACION_AA(?)");			          
			$stm->execute(array($ID_ASIGNACION));

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
			$sql = "CALL ACTUALIZAR_AMBIENTE(?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_AMBIENTE,
				    	$data->NOMBRE,                  
                        $data->ID_SEDE
					)
				);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(activoambiente $data )
	{    
		try{
		


				$sql = "INSERT INTO detalle_ambiente_activo(ID_AMBIENTE,ID_ACTIVO,FECHA_ENTRADA,FECHA_SALIDA,DISPONIBILIDAD) VALUES(?,?,NOW(),NULL,1)";

				$this->pdo->prepare($sql)->execute(
					array(
						$data->NOMBRE, 
						$data->ID_ACTIVO 
				
					)
				);

				$sqo = "UPDATE activo SET EST_ASIG=1 WHERE ID_ACTIVO=?";

				$this->pdo->prepare($sqo)->execute(
					array( 
						$data->ID_ACTIVO 
				
					)
				);
					
				
				return 1;
			
		}
			catch(Exception $e){
				die($e->getMessage());
			}

		
	}

}
