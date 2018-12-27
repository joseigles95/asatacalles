<?php 
include 'templates/inicio_sesion.php';
$titulo = "Modificar Novedad";
include 'templates/inicio.php';
$idnew = $_POST['new'];
$categoria = $_POST['categoria'];

$sql = "SELECT * FROM `$categoria`";
$mod = $conexion->query($sql);
$fila = $mod->fetch_array();
$old_title=$fila['titulo'];
$old_new = $fila['new'];

if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$titulo = $_POST['titulo'];
		$new = $_POST['new'];
		$id = $_POST['id'];
		$categoria = $_POST['categoria'];
		
		$sql = "UPDATE `$categoria` SET titulo='$titulo',new='$new' WHERE id='$id'";
		$error=$conexion->query($sql);
		if($error!=1)
		{
			echo "ERROR".$error;
		}
		else
		{
			header('location:modificar_novedades');
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
							<textarea id="promo" name="new" rows="10"><?=$old_new?></textarea><br/>
							<input type="hidden" name="id" value="<?=$idnew?>">
							<input type="hidden" name="categoria" value="<?=$categoria?>">
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