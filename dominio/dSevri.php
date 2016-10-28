<?php

  class dSevri {

  	private $mfechaVersion;
  	private $mnombreVersion;

  	function dSevri(){
  	}

  	public function getFechaVersion(){
  		return $this->mfechaVersion;
  	}
  	public function setFechaVersion($pfecha){
  		$this->mfechaVersion = $pfecha;
  	}
  	public function getNombreVersion(){
  		return $this->mnombreVersion;
  	}
  	public function setNombreVersion($pnombre){
  		$this->mnombreVersion = $pnombre;
  	}

  }
?>