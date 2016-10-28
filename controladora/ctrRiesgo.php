<?php 
	include("../dominio/dRiesgo.php");
	include("../data/dtRiesgo.php");
	class ctrSevri {
		
		function ctrRiesgo(){}

		function insertarRiesgo(){
	      	$mriesgo = new dRiesgo;

    		$mriesgo->setIdDepartamento('1');
    		$mriesgo->setIdCategoria($_POST['categoria']);
	      	$mriesgo->setNombre($_POST['nombre']);
	      	$mriesgo->setDescripcion($_POST['descripcion']);
	      	$mriesgo->setMontoEconomico($_POST['monto']);
	      	$mriesgo->setEstaActivo($_POST['estado']);
	      	$mriesgo->setCausa($_POST['causa']);

	      	$dataRiesgo = new dtRiesgo;
               
	      	if($dataRiesgo->insertarRiesgo($mriesgo) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha insertado el riesgo correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al insertar el riesgo.
					</div>
	      		';
	      	}
		}
		function obtenerRiesgo(){
			$idRiesgo->$_POST['idRiesgo'];
			$dtRiesgo = new dtRiesgo;
			$lista =$dtRiesgo->getRiesgo($idRiesgo);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		function eliminarRiesgo(){
    		$idRiesgo = $_POST['idRiesgo'];
	      	$dataRiesgo = new dtRiesgo;
               
	      	if($dataRiesgo->eliminarRiesgo($idRiesgo) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha eliminado el riesgo correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al eliminar el riesgo.
					</div>
	      		';
	      	}
		}
		function modificarRiesgo(){
	      	$mriesgo = new dRiesgo;
	      	$mriesgo->setId($_POST['id']);
    		$mriesgo->setIdDepartamento($_POST['idDepartamento']);
    		$mriesgo->setIdCategoria($_POST['categoria']);
	      	$mriesgo->setNombre($_POST['nombre']);
	      	$mriesgo->setDescripcion($_POST['descripcion']);
	      	$mriesgo->setMontoEconomico($_POST['monto']);
	      	$mriesgo->setEstaActivo($_POST['estado']);
	      	$mriesgo->setCausa($_POST['causa']);

	      	$dataRiesgo = new dtRiesgo;
               
	      	if($dataRiesgo->modificarRiesgo($mriesgo) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha modificado el riesgo correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al modificar el riesgo.
					</div>
	      		';
	      	}
		}
	}

	$op = $_POST['opcion'];
	$control = new ctrSevri;
	if($op == 1){
	 	$control->insertarRiesgo();
	}
	if($op == 2){
	 	$control->obtenerRiesgo();
	}
	if($op == 3){
	 	$control->eliminarRiesgo();
	}
	if($op == 4){
	 	$control->modificarRiesgo();
	}
?>