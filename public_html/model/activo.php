<?php
class activo
{
	private $pdo;
    
    public $ID_ACTIVO;
    public $SERIAL_A;
    public $MARCA;
    public $CATEGORIA;  

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
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO1()");
            }
            else if ($OPTION==2) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO2(?)");
            }
            else if ($OPTION==3) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO3(?)");
            }
            else if ($OPTION==4) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO4(?)");
            }
            else if ($OPTION==5) {
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO5()");
            }
            else if($OPTION==6){
				$stm = $this->pdo->prepare("CALL CONSULTAR_ACTIVO6()");

			}

			$stm->execute(array($VALUE));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function Obtener($ID_ACTIVO)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM activos WHERE ID_ACTIVO = ?");
			          

			$stm->execute(array($ID_ACTIVO));
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

	public function Inactivar($ID_ACTIVO)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL DESHABILITAR_ACTIVO(?)");			          
			$stm->execute(array($ID_ACTIVO));

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
			$sql = "CALL ACTUALIZAR_ACTIVO(?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_ACTIVO,                       
                        $data->SERIAL_A,
                        $data->MARCA,
                        $data->CATEGORIA
					)
				);
			
			return 1;	

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(ACTIVO $data)
	{ 
			$sql = "CALL REGISTRAR_ACTIVO(?,?,?)";

			$this->pdo->prepare($sql)->execute(
				array(                       
                    $data->SERIAL_A,
                    $data->MARCA,
                    $data->CATEGORIA
				)
			);

			return 1;	

    }
    
    public function listar_categoria()
	{
		try
		{
			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT * FROM categorias");

			

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	

}