<?php

 	class dCategoria{

 		private $mNombreCategoria;
 		private $mIdCategoria;
 		private $mDescripcion;
 		

 		function dDepartamento(){}

 	    public function getNombreCategoria(){
  			return $this->mNombreCategoria;
  	 	}
	  	public function setNombreCategoria($pnombre){
	  		$this->mNombreCategoria = $pnombre;
	  	}
	  	public function getIdCategoria(){
  			return $this->mIdCategoria;
  	 	}
	  	public function setIdCategoria($pIdCategoria){
	  		$this->mIdCategoria = $pIdCategoria;
	  	}
	  	public function getDescripcion(){
  			return $this->mDescripcion;
  	 	}
	  	public function setDescripcion($pdescripcion){
	  		$this->mDescripcion = $pdescripcion;
	  	}
 	}

?>