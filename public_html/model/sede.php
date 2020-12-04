<?php
class sede
{
	private $pdo;
    
    public $ID_SEDE;
    public $NOMBRE;
    public $DIRECCION;
    public $TELEFONO;  

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
				$stm = $this->pdo->prepare("CALL CONSULTAR_SEDE1()");
            }
            else if($OPTION==2){
				$stm = $this->pdo->prepare("CALL CONSULTAR_SEDE2(?)");

			}else{
				$stm = $this->pdo->prepare("CALL CONSULTAR_SEDE3()");
			}

			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function Obtener($ID_SEDE)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sedes WHERE ID_SEDE = ?");
			          

			$stm->execute(array($ID_SEDE));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	/*public function Eliminar($ID_sede)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM sede WHERE ID_sede = ?");			          
			$stm->execute(array($ID_sede));

		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}*/

	public function Inactivar($ID_SEDE)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_SEDE(?)");			          
			$stm->execute(array($ID_SEDE));

			return 1;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage()); 
		}
	}

	public function Activar($ID_SEDE)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL ACTIVAR_SEDE(?)");			          
			$stm->execute(array($ID_SEDE));

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
			$sql = "CALL ACTUALIZAR_SEDE(?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_SEDE,                       
                        $data->NOMBRE,
                        $data->DIRECCION,
                        $data->TELEFONO
					)
				);

				return 1;

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(SEDE $data)
	{ 
			$sql = "CALL REGISTRAR_SEDE(?,?,?)";

			$this->pdo->prepare($sql)->execute(
				array(
                    $data->NOMBRE, 
                    $data->DIRECCION,
					$data->TELEFONO
				)
			);

			return 1;


		}

    }
