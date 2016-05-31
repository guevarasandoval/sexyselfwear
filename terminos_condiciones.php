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
				
				<h2>Términos y condiciones</h2>
				

				<div class="ui-inicia">
					<p class="textonormal">Las transacciones que se efectúen a través de la Tienda Virtual de Sexy Selfwear. (en adelante, Tienda Virtual SS), mediante el portal web www.sexyselfwear.com, se sujetan a los presentes términos y condiciones, así como a la legislación peruana vigente.</p>
					<ol class="numeracionterminos">
						<li>Es requisito para comprar en la Tienda Virtual Sexy Selfwear la aceptación de los términos y condiciones de ventas descritos a continuación. Cualquier persona que realice una transacción en el sitio www.sexyselfwear.com o a través del email pedidos@sexyselfwear.com . (en adelante, (SS) destine para tal efecto, conoce y acepta todas y cada una de las condiciones descritas a continuación.</li>
						<li>El cliente debe de poner clara la dirección de recepción del producto para el envío del mismo.</li>
						<li>Las compras realizadas en www.sexyselfwear.com están sujetas a disponibilidad de stock.</li>
						<li>Constituye una condición suspensiva para cada compra efectuada en el sitio de www.sexyselfwear.com la validación de datos. Esta validación se realizará, a través de una comunicación telefónica con el titular de la cuenta o a través del medio que Sexy Selfwear disponga en el futuro</li>
						<li>Las condiciones para cambio de artículos son las expresadas en este sitio y para su ejecución es necesario cumplir con los requerimientos solicitados en él.</li>
						<li>Sexy Selfwear no se responsabiliza de información proporcionada por otros sitios web y las consecuencias derivadas de ello, especialmente cuando el acceso al sitio de Tienda Virtual Sexy Selfwear se ha efectuado a través de un link o banner en sitios que no dispongan de contratos o alianzas con www.sexyselfwear.com.</li>
						<li>Sexy Selfwear se reserva el derecho a modificar cualquier información contenida en este sitio.</li>
						<li>Sexy Selfwear podrá dejar sin efecto las compras en las que los datos entregados por el cliente no coincidan con las bases de datos disponibles de Sexy Selfwear, o respecto de las cuales no se hubiere efectuado la validación señalada precedentemente dentro de las 72 horas siguientes a la orden de compra. Esto es, si fuese necesario contactar al titular de una cuenta, y pasadas las 72 horas siguientes a la orden de compra no fuese posible, Tienda Virtual Sexy Selfwear dejará sin efecto dicha transacción (esto como medida de seguridad para el cliente). Los pedidos ejecutados tienen una validez de 5 días útiles para efectuar el pago correspondiente, de lo contrario se dará de baja.</li>
						<li>Se hace constar que en la Tienda Virtual Sexy Selfwear todos los precios de los productos son en moneda nacional, Nuevos Soles (S/.).</li>
					</ol>
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
<script type="text/javascript" src="js/custom-popup.js"></script>


    


</body>

</html>