<?php
$titulo = "Eliminar fotos";
include 'templates/inicio.php';
include 'templates/inicio_sesion.php';

$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
/*if(isset($_SESSION['categoria']))
{
	$_POST['categoria']=$_SESSION['categoria'];
	$_POST['aceptar']=true;
}*/

if($logado)
{
	if(isset($_POST['aceptar']))
	{
		$categoria = $_POST['category'];
		$sql = "SELECT * FROM `$categoria`";
		$fotos = $conexion->query($sql);
		?>
		<section id="main" class="wrapper">
				<div class="inner">
								
			<form method="post" action="zona-privada">
				<input type="submit" name="atras" value="Atrás">
			</form>
					<div class="content">
						<header>
							<h2>Eliminar fotos</h2>
						</header>	
				<form method="post" action="eliminar_seleccion_foto">
				<div class="highlights">
				<?php
				while($fila = $fotos->fetch_row())
				{
				?>
				<section>
					<div class="inner">
						<input type="checkbox" name="id[]" id="imagen<?=$fila[0]?>" value="<?=$fila[0]?>">
						<label for="imagen<?=$fila[0]?>"><img class="inner" src="images/<?=$categoria?>/<?=$fila[1]?>"></label>
					</div>
				</section><?php
				}
				?>
			</div>
			<input type="hidden" name="categoria" value="<?=$categoria?>">
			<input type="submit" name="aceptar" value="Eliminar" class="primary">
				</form>					
				</div>
			</div>
		</section>
		<?php
	}
	else
	{	
?>
	<section id="main" class="wrapper">
				<div class="inner">
				<form method="post" action="zona-privada">
						<input type="submit" name="atras" value="Atrás">
					</form>
					<div class="content">
						<header>
							<h2>Fotos en web</h2>
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
								</select><br/>
							<input type="submit" name="aceptar" value="Seleccionar">	
						</form>
					</div>
				</div>
		</section>











<?php include 'templates/pie.php';
	}//else del selector
	?>

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