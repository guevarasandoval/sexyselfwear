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
				
				<h2>Contáctenos</h2>
				<P class="ui-textocualquiera">Si tienes cualquier duda, problema o sugerencia, puedes ponerte en contacto con nosotros rellenando el siguiente formulario, o mandando un email a <a href="mailto:pedidos@sexyselfwear.com" target="_top"> pedidos@sexyselfwear.com</a></P>

				<div class="ui-inicia">
					<div id="response"></div>
					<form name="contacto" action='logic/control.php' method='POST'>
					<input name='pagina' type='hidden' value='confirmar_contacto.php'/>
					<input name='metodo' type='hidden' value='contacto'/>
						<div class="ui_contactenos">
							<div class="labelcampos">
								<label>Nombres:<span>*</span></label><br>
								<input id="nombres" name="nombres" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Apellidos:<span>*</span></label><br>
								<input id="apellidos" name="apellidos" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Email:<span>*</span></label><br>
								<input id="email"  name="email" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Teléfono:<span>*</span></label><br>
								<input id="telefono"  name="telefono" type="text"></input><br>
							</div>
							<div class="labelcampos">
								<label>Mensaje:<span>*</span></label><br>
								<textarea id="mensaje" name="mensaje" rows="10" cols="30">
								</textarea>
							</div>
						</div>
						
						<div class="ui-realiza-confirma">
							<input id="cmdEnviar"  type="button" value="Enviar" class="botones"></input>
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
				

                $("#cmdEnviar").click(function (event){  
                    //$.mobile.loading("show",{html:"<img src='images/cargando.gif' />"});
					
					var formulario = document.contacto;
					var todoCorrecto = true;
                    var nombres = document.getElementById("nombres").value;
					var apellidos = document.getElementById("apellidos").value;
					var email = document.getElementById("email").value;
					var telefono = document.getElementById("telefono").value;
					var mensaje = document.getElementById("mensaje").value;
                    //var numeroDocumento = document.getElementById("numeroDocumento").value;
                    if(nombres == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar sus Nombres.");
						formulario.nombres.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(apellidos == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar sus Apellidos.");
						formulario.apellidos.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(email == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su Email.");
						formulario.email.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(/\S+@\S+\.\S+/.test(email)==false){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar un Email correcto.");
						formulario.email.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(telefono == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su Telefono.");
						formulario.telefono.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(mensaje == ""){
                        //$.mobile.loading("hide");
                        $("#response").css("background-color","#ffefbe");  
						$("#response").text("Debe ingresar su mensaje.");
						formulario.mensaje.focus();
                        todoCorrecto=false;
                        
                    }
					
					
					
					if(todoCorrecto==true){
						formulario.submit();
					}
					
                });

            });

	
	
	</script>


<!-- producto 1 -->
	<div class="popupbox" id="popuprel1">
        <div style="text-align: right;"><a href="#" class="close"><img src="images/close.gif"></a></div>
        <div class="intabdiv">
            <div class="productoimg"><img src="images/catalogo/ac_001_l.png" class="img-slider"></div>
            <div class="prodescrip">
                      <h2>Bolsa de lavado de poliéster S/.29.00</h2>
                      <h3>Descripción:</h3>
                      <p>Con cierre y con dos estructuras para dar mayor soporte, una en la parte superior y otra en la parte inferior.</p> 
            </div>
        </div>
        <div class="btncomprar"><a href="#">Agregar al carrito</a></div>
	</div>
	<!-- producto 2 -->
	<div class="popupbox" id="popuprel2">
		<div style="text-align: right;"><a href="#" class="close"><img src="images/close.gif"></a></div>
        <div class="intabdiv">
            <div class="productoimg"><img src="images/catalogo/ac_002_l.jpg" class="img-slider"></div>
            <div class="prodescrip">
                      <h2>Broches extensores S/.15.00</h2>
                      <h3>Descripción:</h3>
                           <p>Para brasieres con broche doble<br>Para mayor comodidad en la espalda<br>
                           No los tienes que coser<br>
                           PAQUETE x 3<br>
                           Surtido: blanco, negro y beige</p> 
            </div>
        </div>
        <div class="clear"></div>
        <div class="btncomprar"><a href="#">Agregar al carrito</a></div>
	</div>
    


</body>

</html>