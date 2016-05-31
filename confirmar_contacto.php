<!DOCTYPE html>
<?php
include 'logic/carrito.php';
$carrito = new Carrito();
?>
<html>
<head>
	<title>Siéntete tu misma, vístete sexy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scale=no,initial-scale=1">
	<meta name="title" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="shortcut icon" href="ss.ico">
	<link rel="stylesheet" href="estilos/reset.css">
	<link rel="stylesheet" href="estilos/sexyselfwear2.css">
	<link rel="stylesheet" href="estilos/responsivesexy2.css">
	<link rel="stylesheet" href="estilos/custom-popup.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<header class="ui-cabecera">
		<div class="caja-centro">
			
			<h1 class="ui-title">
				<img src="images/logo_internas.png" class="img-slider">
			</h1>
			
			<div class="ui-redes-mobile">
				<div class="ui-cuenta">
					<p class="ui-carrito"><a href="carrito.php"><img src="images/icon-carrito.png"> <span>(<?php echo $carrito->articulos_total(); ?>)</span></a> / <a href="https://www.facebook.com/sexyselfwear/" target="_blank"><img src="images/icon-f.png"></a></p>
				</div>
			</div>

			<div class="ui-nav-site">
				<p class="ui-nav-site-mobile" id="mostrarmenu">
					<img src="images/icon_menu.png">
				</p>
				<ul id="menusite">
					<li><a href="index.php">Home</a></li>
					<li><a href="accesorios.php">Accesorios</a></li>
					<li><a href="">Moda Casual</a></li>
					<li><a href="">Ropa de Baño</a></li>
					<li><a href="">Sleep</a></li>
					<li class="no-borde"><a href="">Moda Sexy</a></li>
				</ul>
			</div>
			<div class="ui-redes">
				<div class="ui-cuenta">
					<p class="ui-carrito"><a href="carrito.php"><span>Carrito (<?php echo $carrito->articulos_total(); ?>)</span> <img src="images/icon-carrito.png"></a></p>
				</div>
				<div class="ui-siguenos">
					<span>Síguenos en</span>
					<a href="https://www.facebook.com/sexyselfwear/" target="_blank"><img src="images/icon-f.png"></a>
				</div>
				
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<section>
		<div class="caja-centro">

			<div class="ui-contenido">
				
				<h2><img src="images/bolsa-compra.png"> Solicitud de Contacto</h2>
				

				<div class="ui-inicia">
					<form action="">

						<div class="ui_confirmacampo">
							<p class="ui-subti-realizacompra">Pedido:</p>
							<p>Se ha recibido conforme su solicitud de Contacto , en breve le responderemos.</p>
													
							
							
							<div class="clear"></div>

							
							
						</div>
						
							
						
						
					</form>
				</div>


			</div>
			
		</div>
		
	</section>

	<footer>
		<div class="caja-centro">
			<div class="ui-footer">
				<p>Síguenos en <span><img src="images/facebook-footer.png"></span></p>
				<p>Sexy Selfwear © 2016 Todos los Derechos Reservados | <a href="mailto:pedidos@sexyselfwear.com.pe">pedidos@sexyselfwear.com.pe</a></p>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="acerca.php">Acerca de Nosotros</a></li>
					<li><a href="">Ropa Íntima</a></li>
					<li><a href="">Ropa de Baño</a></li>
					<li><a href="">Ropa Casual</a></li>
					<li><a href="">Promociones</a></li>
					<li><a href="contactenos.php">Contáctenos</a></li>
				</ul>
				<p><a href="terminos_condiciones.php">Términos y Condiciones</a> | <a href="">Políticas de Privacidad</a></p>
				<p>Powered by: <a href="http://www.paolanaveda.com" target="_blank"><img src="images/pn-footer.png" width="22" height="25"></a> Paola Naveda</p>
			</div>
			
		</div>
	</footer>


<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/main.js"></script>


    


</body>

</html>