<?php 

	
	
	class dtRiesgo {
		
		function dtRiesgo(){}

		function insertarRiesgo($Riesgo){

			require_once "dtConnection.php";

			$dtConnection = dtConnection::getInstancia();

			

			$idDepartamento = $Riesgo->getIdDepartamento();
			$idCategoria = $Riesgo->getIdCategoria();
			$nombre = $Riesgo->getNombre();
			$descripcion = $Riesgo->getDescripcion();
			$montoEconomico = $Riesgo->getMontoEconomico();
			$estaActivo = $Riesgo->getEstaActivo();
			$causa = $Riesgo->getCausa();


			$result = $dtConnection -> obtenerConsulta("CALL insertarRiesgo($idDepartamento, $idCategoria, '$nombre', '$descripcion', $montoEconomico, $estaActivo, '$causa')");
			
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function modificarRiesgo($Riesgo){
			$con = new dtConnection;
			$prueba = $con->conect();

			$id = $Riesgo->getId();
			$idDepartamento = $Riesgo->getIdDepartamento();
			$idCategoria = $Riesgo->getIdCategoria();
			$nombre = $Riesgo->getNombre();
			$descripcion = $Riesgo->getDescripcion();
			$montoEconomico = $Riesgo->getMontoEconomico();
			$estaActivo = $Riesgo->getEstaActivo();
			$causa = $Riesgo->getCausa();

			$result = $prueba->query("CALL modificarRiesgo($id, $idDepartamento, $idCategoria, '$nombre', '$descripcion', $montoEconomico, $estaActivo, '$causa')");
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function getRiesgos(){
			include_once ('dtConnection.php');
			include("../../dominio/dRiesgo.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerRiesgos()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			
				$riesgo = new dRiesgo;
				$riesgo->setId($row[0]);
				$riesgo->setIdDepartamento($row[1]);
				$riesgo->setIdCategoria($row[2]);	
				$riesgo->setNombre($row[3]);
				$riesgo->setDescripcion($row[4]);
				$riesgo->setMontoEconomico($row[5]);
				$riesgo->setEstaActivo($row[6]);
				$riesgo->setCausa($row[7]);
				

				array_push($lista, $riesgo);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
		function getRiesgo($idRiesgo){
			include_once ('dtConnection.php');
			include("../../dominio/dRiesgo.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerRiesgo($idRiesgo)";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			
				$riesgo = new dRiesgo;
				$riesgo->setId($row[0]);
				$riesgo->setIdDepartamento($row[1]);
				$riesgo->setIdCategoria($row[2]);	
				$riesgo->setNombre($row[3]);
				$riesgo->setDescripcion($row[4]);
				$riesgo->setMontoEconomico($row[5]);
				$riesgo->setEstaActivo($row[6]);
				$riesgo->setCausa($row[7]);
				
				array_push($lista, $riesgo);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
		function eliminarRiesgo($idRiesgo){
			$con = new dtConnection;
			$prueba = $con->conect();

			$result = $prueba->query("CALL eliminarRiesgo($idRiesgo);");
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
	}
?>