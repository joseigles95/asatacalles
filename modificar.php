<?php 
include 'templates/inicio_sesion.php';
$titulo = "Modificar Promoción";
include 'templates/inicio.php';
$idpromo = $_POST['promo'];

$sql = "SELECT * FROM `promociones` WHERE id='$idpromo'";
$mod = $conexion->query($sql);
$fila = $mod->fetch_array();
$old_title=$fila['titulo'];
$old_promo = $fila['promo'];

if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$titulo = $_POST['titulo'];
		$promo = $_POST['promo'];
		$id = $_POST['id'];
		
		$sql = "UPDATE `promociones` SET titulo='$titulo',promo='$promo' WHERE id='$id'";
		$error=$conexion->query($sql);
		if($error!=1)
		{
			echo "ERROR".$error;
		}
		else
		{
			header('location:zona-privada');
		}
		
	}
?>
		<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Promociones de Temporada</h2>
						</header>
						<form method="post">
							<label for="titulo">Titulo:</label>
								<input type="text" id="titulo" name="titulo" value="<?=$old_title?>">
								<label for="promo">Promoción:</label>
							<textarea id="promo" name="promo" rows="10"><?=$old_promo?></textarea><br/>
							<input type="hidden" name="id" value="<?=$idpromo?>">
							<input type="submit" name="aceptar" value="Modificar" class="primary">	
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