<?php
class categoria
{
	private $pdo;
    
    public $ID_CATEGORIA;
    public $NOMBRE;
 

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
			$stm = $this->pdo->prepare("CALL CONSULTAR_CATEGORIA()");

			$stm->execute(array());

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function Obtener($ID_CATEGORIA)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM categorias WHERE ID_CATEGORIA = ?");
			          

			$stm->execute(array($ID_CATEGORIA));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Inactivar($ID_CATEGORIA)
	{
		try 
		{
			$stm = $this->pdo->prepare("CALL INACTIVAR_CATEGORIA(?)");			          
			$stm->execute(array($ID_CATEGORIA));

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
			$sql = "CALL ACTUALIZAR_CATEGORIA(?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->ID_CATEGORIA,                       
                        $data->NOMBRE,
					)
				);

			return 1;	

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(CATEGORIA $data)
	{ 
			$sql = "CALL REGISTRAR_CATEGORIA(?)";

			$this->pdo->prepare($sql)->execute(
				array(
                    $data->NOMBRE
				)
			);

			return 1;

		}

    }
