<?php
$titulo = "Modificar Novedades";
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
?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
				<form method="post" action="zona-privada">
						<input type="submit" name="atras" value="Atrás">
					</form>
					<div class="content">
						<header>
							<h2>Modificar Novedades</h2>
						</header>
						<div class="content">
						<form method="post" action="anadir_novedad">
							<input type="submit" name="anadir" value="Añadir Novedad">
						</form>
						<?php
						while($fila = $novedades1->fetch_row())
						{
							?>
									<header>
										<h3><?=$fila[1]?></h3>
									</header>
									<p><?=$fila[2]?></p>
									<form method="post" action="modificar_new">
										<input type="hidden" name="new" value="<?=$fila[0]?>">
										<input type="hidden" name="categoria" value="novedades1">
										<input type="submit" value="Modificar" name="modificar" class="primary">
									</form>
									<hr/>
						<?php
						}
							$sql = 'SELECT * FROM `novedades2`';
							$novedades2 = $conexion->query($sql);
						while($fila = $novedades2->fetch_row())
						{
							?>
									<header>
										<h3><?=$fila[1]?></h3>
									</header>
									<p><?=$fila[2]?></p>
									<form method="post" action="modificar_new">
										<input type="hidden" name="new" value="<?=$fila[0]?>">
										<input type="hidden" name="categoria" value="novedades2">
										<input type="submit" value="Modificar" name="modificar" class="primary">
									</form>
									<?php
						}
						?>
						</div>
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