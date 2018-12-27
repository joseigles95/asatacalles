<?php
include 'templates/inicio_sesion.php';
$titulo = "Añadir Promoción";
include 'templates/inicio.php';

if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$titulo = $_POST['titulo'];
		$promo = $_POST['promo'];
		$foto = $_FILES['foto']['name'];
		$cd=$_FILES['foto']['tmp_name'];
		$ruta = "images/promotions/" . $_FILES['foto']['name'];
		$resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
		
		$sql = "INSERT INTO `promociones` (titulo,promo,ruta) VALUES ('$titulo','$promo','$foto')";
		$error=$conexion->query($sql);
		if($error!=1)
		{
			echo "ERROR".$error;
		}
		else
		{
			header('location:zona-privada.php');
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
							<h2>Promociones de Temporada</h2>
						</header>
						<form method="post" enctype="multipart/form-data">
							<label for="titulo">Titulo:</label>
								<input type="text" id="titulo" name="titulo">
							<label for="promo">Promoción:</label>
								<textarea id="promo" name="promo" rows="10"></textarea>
							<label for="foto">Foto:</label>
								<input type="file" name="foto" id="foto" maxlength="150"><br/></br>
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
	