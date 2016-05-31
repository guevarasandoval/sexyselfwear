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
<?php
$nombres=$_SESSION["nombres"];
$apellidos=$_SESSION["apellidos"];
$email=$_SESSION["email"];
$telefono=$_SESSION["telefono"];
$distrito=$_SESSION["distrito"];
$direccion=$_SESSION["direccion"];
$referencia=$_SESSION["referencia"];
$precioflete=$_SESSION["precioflete"];
$preciofinal=$_SESSION["preciofinal"];

?>
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
				
				<h2><img src="images/bolsa-compra.png"> Realizar compra: Confirmación de Pedido</h2>
				

				<div class="ui-inicia">
					<form action="">

						<div class="ui_confirmacampo">
							<p class="ui-subti-realizacompra">Pedido:</p>
							<p>Revisa tu pedido antes de confirmar tu compra. Los Gastos de Envío han sido calculados en base a tus Datos de Envío </p>
							<div class="ui-carrito-confirmar">
								
								<div class="ui-detalleproductocarrito-confirmar">
									PRODUCTO
								</div>
								<div class="ui-preciouno-confirmar">
									PRECIO UNIT.
								</div>
								<div class="ui-cantidad-confirmar">
									CANT.
								</div>
								<div class="ui-subtotalcarrito-confirmar">
									SUBTOTAL
								</div>
								<p class="ui-carritoconfimar-separacion"></p>

								<!-- nuevo producto -->
								
								<?php
								
								$carro = $carrito->get_content();
								if($carro)
								{
									foreach($carro as $producto)
									{
										echo "
											<div class='ui-detalleproductocarrito-confirmar'>
												<p class='nombrecarrito-confirmar'>
													".
													$producto["nombre"].
													"
												</p>
												<p class='tallaproductocarrito'>
													Talla: <span>
													".
													$producto["talla"].
													"
													</span>
												</p>
												<p class='tallaproductocarrito'>
													Color: <span>
													".
													$producto["color"].
													"
													</span>
												</p>
											</div>
											<div class='ui-preciouno-confirmar'>
												<p class='precioproductocarrito'>
													S/.".
														$producto["precio"].
														"
												</p>
											</div>
											<div class='ui-cantidad-confirmar'>
												<p class='tallaproductocarrito'>
													<span>
													".
													$producto["cantidad"].
													"
													</span>
												</p>
											</div>
											
											<div class='ui-subtotalcarrito-confirmar'>
												<p><span>S/.".number_format((float)$producto["precio"]*$producto["cantidad"], 2, '.', '')."</span></p>
												
											</div>
											<p class='ui-carritoconfimar-separacion'></p>
																														
										";
										
										
									}
								}

								
								?>
								
								
								

								
								<!--fin productos-->
							</div>

							

							
							<div class="ui-subtotalconfirmacarrito">
								<p class="subtotal"><span>S/.<?php echo number_format((float)$carrito->precio_total(), 2, '.', ''); ?></span></p>
								<p class="flete"><span> S/.<?php echo number_format((float)$precioflete, 2, '.', ''); ?></span></p>
								<p class="total">S/.<?php echo number_format((float)$preciofinal, 2, '.', ''); ?></p>
								 
							</div>
							<div class="ui-subtotalconfirmanombres">
								<p class="subtotal">SUBTOTAL:</p>
								<p class="flete">Gastos de envío (<?php echo $distrito; ?>): </p>
								<p class="total">TOTAL</p>
								 
							</div>

							<div class="clear"></div>

							
							
						</div>
						<div class="ui_confirmacampo">
							<p class="ui-subti-realizacompra">Datos de Envío</p>
							<!--
							<div class="labelcampos">
								<label>Departamento: </label> <div>LIMA</div>
							</div>
							<div class="labelcampos">
								<label>Provincia: </label>
								<div>LIMA</div>
							</div>
							-->
							<div class="labelcampos">
								<label>Distrito: </label>
								<div><?php echo $distrito; ?></div>
							</div>
							<div class="labelcampos">
								<label>Dirección: </label>
								<div><?php echo $direccion; ?></div>
							</div>
							<div class="labelcampos">
								<label>Referencia: </label>
								<div><?php echo $referencia; ?></div>
							</div>
							<div class="labelcampos">
								<label>Nombres: </label>
								<div><?php echo $nombres; ?></div>
							</div>
							<div class="labelcampos">
								<label>Apellidos: </label>
								<div><?php echo $apellidos; ?></div>
							</div>
							<div class="labelcampos">
								<label>Email: </label>
								<div><?php echo $email; ?></div>
							</div>
							<div class="labelcampos">
								<label>Teléfono: </label>
								<div><?php echo $telefono; ?></div>
							</div>

							<p class="ui-subti-realizacompra">Forma de pago</p>
							<p><span class="subti">Depósito en cuenta:</span> deposita en cualquiera de estas cuentas el total de tu compra y envía el voucher escaneado a <a mailto="">pedidos@sexyselfwear.com</a></p>

							<p style="text-align:center"><img src="images/cuentas-banco.jpg" class="img-slider"></p>
							
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