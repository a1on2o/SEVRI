<?php 

	include ("dtConnection.php");
	
	class dtSevri {
		
		function dtSevri(){}

		function insertarSevri($Sevri){
			$con = new dtConnection;
			$prueba = $con->conect();
			$nombre = $Sevri->getNombreVersion();
			$fecha = $Sevri->getFechaVersion();

				$result = $prueba->query("CALL insertarSevri('$nombre','$fecha')");

				//mysql_close();

				if (!$result){
					return false;
				} else {
					return true;
				}
			
		}

		
	}	


?>