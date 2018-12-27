<?php
$titulo = "Subir Fotos Nuevas";
include 'templates/inicio.php';
include 'templates/inicio_sesion.php';



if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$categoria = $_POST['category'];
		$foto = $_FILES['foto']['name'];
		$cd=$_FILES['foto']['tmp_name'];
		$ruta = "images/".$categoria."/" . $_FILES['foto']['name'];
		$resultado = @move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta);
		
		$sql = "INSERT INTO `$categoria` (ruta) VALUES ('$foto')";
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
							<select name="category" id="category">
									<option value="">- Select -</option>
									<option value="parques">Parques Infantiles</option>
									<option value="tobogan">Tobogán Acuático</option>
									<option value="hinchables_acuaticos">Hinchables Acuáticos</option>
									<option value="encierros">Encierros de Carretones</option>
									<option value="discomovil">Discotecas Móviles</option>
									<option value="fiesta-espuma">Fiestas de la Espuma</option>
									<option value="color-party">Color Party</option>
									<option value="pintacaras">Pintacaras y Talleres</option>
									<option value="ludoteca">Ludoteca</option>
									<option value="new">Novedades</option>
								</select>
							<label for="foto">Foto:</label>
								<input type="file" name="foto" id="foto" maxlength="150"><br/></br>
							<input type="submit" name="aceptar" value="Añadir">	
						</form>
					</div>
				</div>
		</section>

















<?php include 'templates/pie.php';



}
else
{?>
<section id="main" class="wrapper">
	<div class="inner">
		<div class="content">
			<form method="post">
				<label for="usuario">Usuario:</label>
					<input type="text" name="usuario">
				<label for="pass">Contraseña:</label>
					<input type="password" name="pass"><br/>	
					<input type="submit" name="entrar" value="Entrar" class="primary">
			</form>
		</div>
	</div>
</section>
<?php
}
?>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>