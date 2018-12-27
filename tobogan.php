<?php 
$titulo = "Toboganes Acuáticos";
echo "<link rel=\"stylesheet\" href=\"assets/css/lightbox.min.css\" />";
include 'templates/inicio.php';
$conexion = mysqli_connect('localhost','root','','asaltacalles');
if(!$conexion)
{
	echo "Error al conectar a la Base de Datos";
}
$sql = 'SELECT * FROM `tobogan`';
$fotos = $conexion->query($sql);


?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Toboganes Acuáticos</h2>
						</header>
						<p>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor sit amet dolor feugiat consequat. </p>
						<p>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor sit amet dolor feugiat consequat. </p>
						<hr />
						<h3>Magna odio tempus commodo</h3>
						<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan ac praesent.</p>
						<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus lorem ipsum dolor sit amet nullam.</p>
						<div class="highlights">
							<?php
							while($fila = $fotos->fetch_row())
							{
								?>
							<section>
								<div class="inner">
									<a class="example-image-link" href="images/tobogan/<?=$fila[1]?>" data-lightbox="example-set"><img class="inner" src="images/tobogan/<?=$fila[1]?>" alt="image-1" /></a>
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