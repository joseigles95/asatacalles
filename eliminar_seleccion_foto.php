<?php
include 'templates/inicio_sesion.php';
$titulo = "Eliminar";
include 'templates/inicio.php';
$categoria = $_POST['categoria'];
if($logado)
{
	echo '<pre>';
	var_dump($_POST);
	echo '</pre>';
	foreach($_POST['id'] as $id)
	{
		echo "id:".$id."<br/>";
		$sql = "SELECT `ruta` FROM `$categoria` WHERE id='$id'";
		$error = $conexion->query($sql);
		$selec = $error->fetch_array();
		$ruta = $selec[0];	
		unlink("images/$categoria/$ruta");
		$sql = "DELETE FROM `$categoria` WHERE id='$id'";
		$error = $conexion->query($sql);
	}

	if($error!=1)
		{
			echo "ERROR".$error;
		}
		else
		{
			$_SESSION['categoria'] = $categoria;
			header('location:eliminar_foto');
		}

	echo '<p>ERROR AL ELIMINAR'.$error.'</p>';
		include 'templates/pie.php';?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
}
else
{
header('location:index.php');
}
?>	
	</body>
</html>