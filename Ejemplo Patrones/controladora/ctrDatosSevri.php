
<?php

 	class ctrDatosSevri{
		
 		function obtenerParametros(){
 			include('../../data/dtParametro.php');
 			$data = new dtParametro;
 			$lista = $data->getParametros();

 			if(!$lista){
 			return false;
	 		}else{
	 			return $lista;
	 		}
 		}
 		function obtenerCategorias(){
 			include('../../data/dtCategoria.php');
 			$data = new dtCategoria;
 			$lista = $data->getCategorias();		

 			if(!$lista){
 			return false;
	 		}else{
	 			return $lista;
	 		}
 		}
 		function obtenerDepartamentos(){
 			include('../../data/dtDepartamento.php');
 			$data = new dtDepartamento;
 			$lista = $data->getDepartamentos();		

 			if(!$lista){
 			return false;
	 		}else{
	 			return $lista;
	 		}
 		}
 		function obtenerRiesgos(){
 			include('../../data/dtRiesgo.php');
 			$data = new dtRiesgo;
 			$lista = $data->getRiesgos();

 			if(!$lista){
 			return false;
	 		}else{
	 			return $lista;
	 		}
 		}
 	}

?>