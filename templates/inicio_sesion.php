<?php 
ini_set('session.gc_maxlifetime', 3600);
session_start();
$conexion =mysqli_connect('localhost', 'root', '', 'asaltacalles');
 if(!$conexion){
 	echo "error al conectar a la base de datos";
 }
 
$logado = $error = false;

if ((isset($_SESSION["logado"])) && (isset($_SESSION["usuario"]))) {
	$catuser = $_SESSION["logado"];
	$usuario = $_SESSION["usuario"];
	$logado = true;
}

if($logado)
{
	if(isset($_POST['desconectar']))
	{		
		session_destroy();
		$logado = false;
		echo "<META HTTP-EQUIV='refresh' CONTENT='0'>"; 
	}
}
else
{
	if(isset($_POST['usuario'])&&isset($_POST['pass'])&&isset($_POST['entrar']))
	{
		if($_POST['usuario'] == "admin" && $_POST['pass'] == "Asaltacalles123*")
		{
			$_SESSION['logado']=true;
			$logado = true;
			$_SESSION['usuario']="admin";
		}
		else
		{
			echo "<META HTTP-EQUIV='refresh' CONTENT='0'>"; 
		}
	}
}
?>