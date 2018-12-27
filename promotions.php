<?php 
$titulo = "Promociones de Temporada";
include 'templates/inicio.php';
$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
$sql = 'SELECT * FROM `promociones`';
$promos = $conexion->query($sql);

?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Promociones de Temporada</h2>
						</header>
						<?php
						while($fila = $promos->fetch_row())
						{
							?>
							<section>
								<div class="content">
									<header>
										<h3><?=$fila[1]?></h3>
									</header>
									<p><?=$fila[2]?></p>
									<img class="inner" src="images/promotions/<?=$fila[3]?>">
								</div>
							</section><?php
						}
						?>
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

	</body>
</html>