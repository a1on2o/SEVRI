<?php

 dtConnection{

  private static $instancia = NULL;

  private $servidor;
  private $usuario;
  private $password;
  private $basedatos;

  private $conexion;
	
function __construct(){
    $this->servidor = "localhost";
    $this->usuario ="root" ;
    $this->password = "";
    $this->basedatos = "bdsevri";
  }


  
  private function conectar(){
    $this->conexion = ($this->servidor,$this->usuario,$this->password) or DIE(mysql_error());
    mysql_select_db($this->basedatos, $this->conexion);
  }
	
  public function desconectar(){
    mysql_close($this->conexion);
  }
	
  public function ObtenerConsulta($query){
    $this->conectar();
    $res = mysql_query($query) or die (mysql_error());
    return $res;
    
    	
  }
  

static public function getInstancia() {
    if (selfinstancia == NULL) {
      self::$instancia = new dtConnection();
    }
    return self::$instancia;
  }


		
}

?>