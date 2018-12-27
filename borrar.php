<?php
include 'templates/inicio_sesion.php';
$titulo = "Eliminar";
include 'templates/inicio.php';
$id = $_POST['id'];
if($logado)
{
	$sql = "DELETE FROM `promociones` WHERE id='$id'";
	$error = $conexion->query($sql);
	if($error!=1)
		{
			echo "ERROR".$error;
		}
		else
		{
			header('location:zona-privada');
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