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
				
				<h2><img src="images/bolsa-compra.png"> Realizar compra: Datos de Envío</h2>
				

				<div class="ui-inicia">
				<div id="response"></div>
					<form name="comprar" action="logic/control.php" method="POST">
						<input name="pagina" type="hidden" value="confirmar_compra.php"/>
						<input name="metodo" type="hidden" value="comprar"/>

						<div class="ui_registracampo">
							<p class="ui-subti-realizacompra">Datos de destinatario</p>
							<p>Ingrese los datos de la persona que recibirá la compra </p>
							<div class="labelcampos">
								<label>Nombres: <span>*</span></label><br>
								<input id="nombres" name="nombres" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Apellidos: <span>*</span></label><br>
								<input id="apellidos"  name="apellidos" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Email: <span>*</span></label><br>
								<input id="email"  name="email" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Teléfono: <span>*</span></label><br>
								<input id="telefono"  name="telefono" type="text"></input><br>
							</div>
							
						</div>
						<div class="ui_registracampo">
							<p class="ui-subti-realizacompra">Dirección de Envío</p>
							<p>Ingrese la dirección donde quieren que envien su compra </p>
							<!--
							<div class="labelcampos">
								<label>Departamento: <span>*</span></label><br>
								<select name="departamento">
								  <option>Seleccione un departamento</option>
								  <option value="saab">Amazonas</option>
								  <option value="fiat">Cajamarca</option>
								  <option value="audi">Lima</option>
								</select>
							</div>
							<div class="labelcampos">
								<label>Provincia: <span>*</span></label><br>
								<select name="departamento">
								  <option>Seleccione una Provincia</option>
								  <option value="saab">Amazonas</option>
								  <option value="fiat">Cajamarca</option>
								  <option value="audi">Lima</option>
								</select>
							</div>
							-->
							<div class="labelcampos">
								<label>Distrito: <span>*</span></label><br>
								<select id="distrito" name="distrito">
								  <option value="0">Seleccione un Distrito</option>
								  <option value="San Miguel">San Miguel</option>
								  <option value="Los Olivos">Los Olivos</option>
								  <option value="Lima">Lima</option>
								</select>
							</div>
							<div class="labelcampos">
								<label>Dirección: <span>*</span></label><br>
								<input id="direccion"  name="direccion" type="text"></input>
							</div>
							<div class="labelcampos">
								<label>Referencia: </label><br>
								<input id="referencia" name="referencia" type="text"></input>
							</div>
							
						</div>
						<div class="ui-realiza-confirma">
							<input id="cmdComprar"  type="button" value="Confirmar pedido" class="botones"></input>
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
<script type='application/javascript'>
		$(document).ready(function () {
				

                $("#cmdComprar").click(function (event){  
                    //$.mobile.loading("show",{html:"<img src='images/cargando.gif' />"});
					
					var formularioCompra = document.comprar;
					var todoCorrecto = true;
                    var nombres = document.getElementById("nombres").value;
					var apellidos = document.getElementById("apellidos").value;
					var email = document.getElementById("email").value;
					var telefono = document.getElementById("telefono").value;
					var distrito = document.getElementById("distrito").value;
					var direccion = document.getElementById("direccion").value;
					
                    //var numeroDocumento = document.getElementById("numeroDocumento").value;
                    if(nombres == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar sus Nombres.");
						formularioCompra.nombres.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(apellidos == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar sus Apellidos.");
						formularioCompra.apellidos.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(email == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su Email.");
						formularioCompra.email.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(/\S+@\S+\.\S+/.test(email)==false){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar un Email correcto.");
						formularioCompra.email.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(telefono == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su Telefono.");
						formularioCompra.telefono.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(distrito == "0"){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe seleccionar un Distrito.");
						formularioCompra.distrito.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(direccion == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su Dirección.");
						formularioCompra.direccion.focus();
                        todoCorrecto=false;
                        
                    }
					
										
					
					if(todoCorrecto==true){
						formularioCompra.submit();
					}
					
                });

            });

	
	
</script>

    


</body>

</html>