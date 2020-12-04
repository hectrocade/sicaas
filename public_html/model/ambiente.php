<?php
class ambiente
{
	private $pdo;
    
    public $ID_AMBIENTE;
    public $NOMBRE;
    public $ESTADO;
    public $ID_SEDE;  


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
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTE1(?)");
			}elseif ($OPTION==2) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTE2()");
			}else{
				$stm = $this->pdo->prepare("CALL CONSULTAR_AMBIENTE3()");

			}

			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listarasig($VALUES)
	{
		try
		{
			$result = array();
			
				$stm = $this->pdo->prepare("CALL CONSULTAR_ASIGNACIONU2(?)");


			$stm->execute(array($VALUES));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function listar_sede()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("CALL CONSULTAR_SEDE1()");

			

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
			          ->prepare("CALL CONSULTAR_AMBIENTE(?)");
			          

			$stm->execute(array($ID_AMBIENTE));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	/*public function Eliminar($ID_AMBIENTE)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM usuario WHERE ID_AMBIENTE = ?");			          
			$stm->execute(array($ID_AMBIENTE));

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}*/

	public function Inactivar($ID_AMBIENTE)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_AMBIENTE(?)");			          
			$stm->execute(array($ID_AMBIENTE));

			return 1;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function activar($ID_AMBIENTE)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL ACTIVAR_AMBIENTE(?)");			          
			$stm->execute(array($ID_AMBIENTE));

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
         return 1;

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(ambiente $data )
	{    

		$retorno=0;
		try{
			$sql = "SELECT COUNT(*) FROM ambiente WHERE NOMBRE = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$data->NOMBRE]);
			$userExists = $stmt->fetchColumn();

			if($userExists == 0) {


				$sql = "INSERT INTO ambiente (NOMBRE,ESTADO,ID_SEDE) VALUES (?,1,?)";

				$this->pdo->prepare($sql)->execute(
					array(
						$data->NOMBRE, 
						$data->ID_SEDE 
				
					)
				);
				$retorno=1;

					
		    return 1;

			}
			else{
				return 2;
			}
		}
			catch(Exception $e){
				die($e->getMessage());
			}

		
	}

}
