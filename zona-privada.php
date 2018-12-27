<?php
$titulo = "Zona Privada";
include 'templates/inicio.php';
include 'templates/inicio_sesion.php';

$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
$sql = 'SELECT * FROM `promociones`';
$promos = $conexion->query($sql);

if($logado)
{
?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Zona Privada</h2>
							<form method="post">
								<input type="submit" name="desconectar" value="Desconectar" class="primary">
							</form>
						</header>
						<div class="content">
						<div class="row"><form method="post" action="anadir">
							<input type="submit" name="anadir" value="Añadir Promoción">
						</form>
						<form method="post" action="subir">
							<input type="submit" name="anadir" value="Subir fotos nuevas">
						</form>
						<form method="post" action="eliminar_foto">
							<input type="submit" name="eliminar" value="Eliminar fotos">
						</form>
						<form method="post" action="modificar_novedades">
							<input type="submit" name="modificar_novedades" value="Modificar Novedades">
						</form></div>
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
									<p><img class="inner" src="images/promotions/<?=$fila[3]?>"></p>
									<div class="row"><form method="post" action="modificar " style="inline">
										<input type="hidden" name="promo" value="<?=$fila[0]?>">
										<input type="submit" value="Modificar" name="modificar" class="primary">
									</form>
									<form method="post" action="borrar ">
										<input type="hidden" name="id" value="<?=$fila[0]?>">
										<input type="submit" value="Eliminar" name="eliminar" class="primary">
									</form></div>
								</div>
							</section><?php
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