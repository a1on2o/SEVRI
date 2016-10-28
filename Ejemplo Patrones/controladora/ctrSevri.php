<?php 

	
	include("../dominio/dSevri.php");
	include("../data/dtSevri.php");
	class ctrSevri {
		
		function ctrSevri(){}

		function insertarSevri(){
	      	$msevri = new dSevri;

    		$msevri->setNombreVersion($_POST['nombre']);
    		$msevri->setFechaVersion($_POST['fecha']);
	      
	      	$dataSevri = new dtSevri;
               
	      	if($dataSevri->insertarSevri($msevri) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha creado el SEVRI correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al crear el SEVRI.
					</div>
	      		';
	      	}
		}//DEBAJO

		function insertarSevriParametros(){
			include("../data/dtParametro.php");
    		$mparametroProbabilidad = $_POST['probabilidadDestino'];
    		$mparametroImpacto = $_POST['impactoDestino'];
    		$mparametroCalificacion = $_POST['calificacionDestino'];
	      
	      	$dataParam = new dtParametro;
	      	if(!empty($mparametroProbabilidad)){
	      		for ($i=0;$i<count($mparametroProbabilidad);$i++){
		      		if($dataParam->insertarSevriParametro($mparametroProbabilidad[$i])){
		      			echo 
		      			'	
		      			<div class="alert alert-success">
		      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Perfecto!</strong> Se han agregado los parametros de probabilidad correctamento.
						</div>
	      				';
		      		}
		      		else{
		      			echo 
			      		'	
			      			<div class="alert alert-danger">
			      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Error!</strong> Se ha producido un error al agregar los parametros de probabilidad.
							</div>
			      		';
		      		}
	      		}	
	      	}
	      	else if(!empty($mparametroImpacto)){
	      		for ($i=0;$i<count($mparametroImpacto);$i++){
		      		if($dataParam->insertarSevriParametro($mparametroImpacto[$i])){
		      			echo 
		      			'	
		      			<div class="alert alert-success">
		      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Perfecto!</strong> Se ha creado el SEVRI correctamente.
						</div>
	      				';
		      		}
		      		else{
		      			echo 
			      		'	
			      			<div class="alert alert-danger">
			      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Error!</strong> Se ha producido un error al crear el SEVRI.
							</div>
			      		';
		      		}
	      		}	
	      	}
	      	else if(!empty($mparametroCalificacion)){
	      		for ($i=0;$i<count($mparametroCalificacion);$i++){
		      		if($dataParam->insertarSevriParametro($mparametroCalificacion[$i])){
		      			echo 
		      			'	
		      			<div class="alert alert-success">
		      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Perfecto!</strong> Se ha creado el SEVRI correctamente.
						</div>
	      				';
		      		}
		      		else{
		      			echo 
			      		'	
			      			<div class="alert alert-danger">
			      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Error!</strong> Se ha producido un error al crear el SEVRI.
							</div>
			      		';
		      		}
	      		}	
	      	}
		}

		function insertarSevriDepartamentos(){
			include("../data/dtDepartamento.php");
    		$mdepartamentos = $_POST['departamentosDestino'];
	      
	      	$dataDepar = new dtDepartamento;
	      	if(!empty($mdepartamentos)){
	      		for ($i=0;$i<count($mdepartamentos);$i++){
		      		if($dataDepar->insertarSevriDepartamento($mdepartamentos[$i])){
		      			echo 
		      			'	
		      			<div class="alert alert-success">
		      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Perfecto!</strong> Se han agregado los departamentos correctamente.
						</div>
	      				';
		      		}
		      		else{
		      			echo 
			      		'	
			      			<div class="alert alert-danger">
			      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Error!</strong> Se ha producido un error al agregar los departamentos.
							</div>
			      		';
		      		}
	      		}	
	      	}
		}

		function insertarSevriCategorias(){
			include("../data/dtCategoria.php");
    		$mcategorias = $_POST['categoriasDestino'];
	      
	      	$dataCat = new dtCategoria;
	      	if(!empty($mcategorias)){
	      		for ($i=0;$i<count($mcategorias);$i++){
		      		if($dataCat->insertarSevriCategoria($mcategorias[$i])){
		      			echo 
		      			'	
		      			<div class="alert alert-success">
		      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Perfecto!</strong> Se han agregado las categorias correctamente.
						</div>
	      				';
		      		}
		      		else{
		      			echo 
			      		'	
			      			<div class="alert alert-danger">
			      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Error!</strong> Se ha producido un error al agregar las categorias.
							</div>
			      		';
		      		}
	      		}	
	      	}
		}


	}

	$op = $_POST['opcion'];
	$control = new ctrSevri;
	if($op == 1){
	 	$control->insertarSevri();
	}
	else if($op == 2){
	 	$control->insertarSevriParametros();
	}
	else if($op == 3){
	 	$control->insertarSevriDepartamentos();
	}
	else if($op == 4){
	 	$control->insertarSevriCategorias();
	}

?>