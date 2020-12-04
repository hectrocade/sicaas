<?php
class menu
{
	private $pdo;
    

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

    public function listar_control($ID_USUARIO)
	{
		try
		{
			

			$result = array();
			
			
				$stm = $this->pdo->prepare("SELECT D.ID_AMBIENTE, D.ID_CONTROL, A.NOMBRE_A, S.NOMBRE,D.FECHA ,DATE_ADD(fecha, interval 6 hour) AS FECHA_FIN FROM  detalle_control_ambiente D INNER JOIN ambientes A ON 
				D.ID_AMBIENTE = A.ID_AMBIENTE JOIN ambiente AM ON D.ID_AMBIENTE=AM.ID_AMBIENTE JOIN sede S ON S.ID_SEDE=AM.ID_SEDE  WHERE NOW() <= DATE_ADD(fecha, interval 6 hour) AND ID_USUARIO = '$ID_USUARIO';
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