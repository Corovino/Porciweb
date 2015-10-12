<?php 

//nclude_once "conexion.php";
session_start();

class Consultas{	


    private $con;
	  public function __construct(){
		include_once "conexion.php";
		$this->con = new Conexion();
		$this->con->conectar();
         
        $useremail = $__POST['userEmail'];
        $userPass = $__POST['userPass']; 


	}

    function identificar(){
    	$pass=sha1($password);
    	$sql = "SELECT  Nombre, Pass FROM Usuario WHERE  Nombre='$useremail'AND Pass='$userPass' ";
    	$result = $this->con->query($sql);
    	if($result){
              $_SESSION['userEmail'] = $useremail;
			  $_SESSION['userPass'] = $userPass;
    	}else{
			  echo "<div>Error al ingresar  </div>";
		  }
		

    }


     


	



}

?>