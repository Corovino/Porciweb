<?php
  /**
  * 
  */
  include_once"server.php";
  class Conexion 
  {
  	
  	
   public $con;
     
  	 public  function conectar(){
  	 	$con = new mysqli(server, user, pass,mainDataBase);
  	 	if($con->connect_errno){
  	 		return false;
  	 	}else{
  	 		//echo "se conecto correctamente";

  	 		$con->set_charset("utf8");
			  return $con;
			
  	 	}
  	 }
  }
$conectar = new Conexion();
$conectar->conectar();

?>