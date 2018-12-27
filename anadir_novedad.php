<?php
$titulo = "Añadir Novedades";
include 'templates/inicio.php';
include 'templates/inicio_sesion.php';

$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
$sql = 'SELECT * FROM `novedades1`';
$novedades1 = $conexion->query($sql);
if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$titulo = $_POST['titulo'];
		$new = $_POST['new'];
		
		$sql = "INSERT INTO `novedades2` (titulo,new) VALUES ('$titulo','$new')";
		$error = $conexion->query($sql);
		
		if($error!=1)
		{
			echo "ERRROR";
		}
		else
		{
			header('location:zona-privada');
		}
	}
?>

	<section id="main" class="wrapper">
		<div class="inner">				
			<form method="post" action="zona-privada">
				<input type="submit" name="atras" value="Atrás">
			</form>
			<div class="content">
				<header>
					<h2>Novedades</h2>
				</header>
				<form method="post">
					<label for="titulo">Titulo:</label>
						<input type="text" name="titulo" id="titulo">
					<label for="new">Novedad:</label>
						<textarea id="new" name="new" rows="10"></textarea></br>
					<input type="submit" name="aceptar" value="Añadir">
					</form>
				</div>
			</div>
		</section>

<?php include 'templates/pie.php';?>

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
