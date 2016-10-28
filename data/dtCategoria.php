<?php 

	

	class dtCategoria {
		
		function dtCategoria(){}

		function getCategorias(){

			require_once "dtConnection.php";
			
			include("../../dominio/dCategoria.php");

		
			$dtConnection=dtConnecti¿¿on::getInstancia();

			$lista = array();
			
			$query = "CALL obtenerCateas(0)";
			
			$result = $dtConnection ->obtenerConsulta($query);

			while($row = mysql_fetch_array($result, MYSQLI_ASSOC)){

				$categoria = new dCategoria;
					
				$categoria->setNombreCategoria($row['Nombre']);
				$categoria->setIdCategoria($row['Id']);	
				$categoria->setDescripcion($row['Descripcion']);
									
				

				array_push($lista, $categoria);
			}
		
			
		

			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}

	
		
	}	

?>