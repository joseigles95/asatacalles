<?php 
$titulo = "Novedades";
echo "<link rel=\"stylesheet\" href=\"assets/css/lightbox.min.css\" />";
include 'templates/inicio.php';
$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
$sql = 'SELECT * FROM `new`';
$fotos = $conexion->query($sql);

$sql = 'SELECT * FROM `novedades1`';
$novedades = $conexion->query($sql);
?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Novedades</h2>
						</header>
						<?php
						$fila = $novedades->fetch_array();
						?>
						<h3><?=$fila[1]?></h3>
						<p><?=$fila[2]?></p>
						<hr />
						<?php
							$sql = 'SELECT * FROM `novedades2`';
							$novedades = $conexion->query($sql);
							while($fila = $novedades->fetch_array())
							{
						?>
						<h3><?=$fila[1]?></h3>
						<p><?=$fila[2]?></p>
						<?php
							}
						?>
						<div class="highlights">
							<?php
							while($fila = $fotos->fetch_row())
							{
								?>
							<section>
								<div class="inner">
									<a class="example-image-link" href="images/new/<?=$fila[1]?>" data-lightbox="example-set"><img class="inner" src="images/new/<?=$fila[1]?>" alt="image-1" /></a>
								</div>
							</section><?php
							}
							?>
						</div>
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
			<script src="assets/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>