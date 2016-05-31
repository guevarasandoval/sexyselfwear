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
					<li class="activo">Accesorios</li>
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
				<h2>ACCESORIOS</h2>
				<div class="ui-catalogo">
					<div class="ui-catalogo-muestra"><img src="images/catalogo/ac_001_s.png" class="img-slider">
						<div class="lengueta"><img src="images/catalogo_lengueta.png" class="img-slider"></div>
						<div class="ampliar"><a href="#" rel="popuprel1" class="popup"><img src="images/ampliar_mas.gif"></a></div>
					</div>
					
					<p><span>Bolsa de lavado de poliéster</span><br>S/.29.00</p>
				</div>
				<div class="ui-catalogo">
                    <div class="ui-catalogo-muestra"><img src="images/catalogo/ac_002_s.jpg" class="img-slider">
						<div class="lengueta"><img src="images/catalogo_lengueta.png" class="img-slider"></div>
						<div class="ampliar"><a href="#" rel="popuprel2" class="popup"><img src="images/ampliar_mas.gif"></a></div>
					</div>
					<p><span  class="txtsubtitu">Broches extensores</span><br>S/.15.00</p>
				</div>

				<div class="ui-catalogo">
					<div class="ui-catalogo-muestra"><img src="images/catalogo/ac_001_s.png" class="img-slider">
						<div class="lengueta"><img src="images/catalogo_lengueta.png" class="img-slider"></div>
						<div class="ampliar"><a href="#" rel="popuprel1" class="popup"><img src="images/ampliar_mas.gif"></a></div>
					</div>
					
					<p><span>Bolsa de lavado de poliéster</span><br>S/.29.00</p>
				</div>
				<div class="ui-catalogo">
                    <div class="ui-catalogo-muestra"><img src="images/catalogo/ac_002_s.jpg" class="img-slider">
						<div class="lengueta"><img src="images/catalogo_lengueta.png" class="img-slider"></div>
						<div class="ampliar"><a href="#" rel="popuprel2" class="popup"><img src="images/ampliar_mas.gif"></a></div>
					</div>
					<p><span  class="txtsubtitu">Broches extensores</span><br>S/.15.00</p>
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

<!-- producto 1 -->
	<div class="popupbox" id="popuprel1">
		
		<form name="productoTipo1" action="logic/control.php" method="POST">
        <div style="text-align: right;"><a href="#" class="close"><img src="images/close.gif"></a></div>
        <div class="intabdiv">
            
            <div class="prodescrip">
                <h2>Bolsa de lavado de poliéster</h2>
				<p class="precioproducto">S/.29.00</p>
                <h3>Descripción:</h3>
                <p>Con cierre y con dos estructuras para dar mayor soporte, una en la parte superior y otra en la parte inferior.</p>
                <input name="pagina" type="hidden" value="accesorios.php"/>
				<input name="metodo" type="hidden" value="agregar"/>
				<input name="codigo" type="hidden" value="AC001"/>
				<input name="nombre" type="hidden" value="Bolsa de lavado de poliéster"/>
				<input name="precio" type="hidden" value="29.00"/>
				<input name="talla" type="hidden" value="-"/>
				<input name="color" type="hidden" value="-"/>
            </div>
            <div class="productoimg">
            	<img src="images/catalogo/ac_001_l.png" class="img-slider"></div>
            <div class="datosproduc">
					<div id="response1"></div>
                	<div class="ui-cantidadproductocarrito">
						Cantidad:
						<select id="cantidad" name="cantidad" >
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">3</option>
						</select>
					</div>
					
				
            </div>
        </div>
        <div class="btncomprar">
        	<input id="cmdAgregarTipo1"  type="button" value="Agregar al carrito" class="botones"></input>
        </div>
		</form> 
	</div>
	<!-- producto 2 -->
	<div class="popupbox" id="popuprel2">
		
		<form name="productoTipo2" action="logic/control.php" method="POST">
        <div style="text-align: right;"><a href="#" class="close"><img src="images/close.gif"></a></div>
        <div class="intabdiv">
            
            <div class="prodescrip">
                <h2>Broches extensores</h2>
				<p class="precioproducto">S/.15.00</p>
                <h3>Descripción:</h3>
			    <p>Para brasieres con broche doble para mayor comodidad en la espalda no los tienes que coser<br>
			    PAQUETE x 3<br>
			    Surtido: blanco, negro y beige</p> 
                <input name="pagina" type="hidden" value="accesorios.php"/>
				<input name="metodo" type="hidden" value="agregar"/>
				<input name="codigo" type="hidden" value="AC002"/>
				<input name="nombre" type="hidden" value="Broches extensores"/>
				<input name="precio" type="hidden" value="15.00"/>				
				
            </div>
            <div class="productoimg">
            	<img src="images/catalogo/ac_002_l.jpg" class="img-slider"></div>
            <div class="datosproduc">
					<div id="response2"></div>
                	<div class="ui-cantidadproductocarrito">
						Cantidad:
						<select name="cantidad" >
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="ui-cantidadproductocarrito">
						Talla:
						<select id="talla" name="talla">
							<option value="0">Selecciona talla</option>
							<option value="34">34</option>
							<option value="36">36</option>
							<option value="38">38</option>
						</select>
					</div>
					<div class="ui-cantidadproductocarrito">
						Color:
						<select id="color" name="color">
							<option value="0">Selecciona color</option>
							<option value="Blanco">Blanco</option>
							<option value="Habano">Habano</option>
							<option value="Negro">Negro</option>
						</select>
					</div>
					
					
            </div>
			
        </div>
		
        <div class="btncomprar">
        	<input id="cmdAgregarTipo2"  type="button" value="Agregar al carrito" class="botones"></input>
        </div>
		
		</form> 
		
		
		
	</div>
    


</body>

<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type='application/javascript'>
		$(document).ready(function () {
				
				$("#cmdAgregarTipo1").click(function (event){  
                    //$.mobile.loading("show",{html:"<img src='images/cargando.gif' />"});
					
					var formularioAgregar = document.productoTipo1;
					var todoCorrecto = true;
                    //var nombres = document.getElementById("nombres").value;
					//var distrito = document.getElementById("distrito").value;
					
					                    
					/*
                    if(nombres == ""){
                        //$.mobile.loading("hide");
                        $("#response1").css("background-color","#ffefbe");  
						$("#response1").text("Debe ingresar sus Nombres.");
						formularioAgregar.nombres.focus();
                        todoCorrecto=false;
                        
                    }
					if(distrito == "0"){
                        //$.mobile.loading("hide");
                        $("#response1").css("background-color","#ffefbe");  
						$("#response1").text("Debe seleccionar un Distrito.");
						formularioAgregar.distrito.focus();
                        todoCorrecto=false;
                        
                    }*/				
															
					if(todoCorrecto==true){
						formularioAgregar.submit();
					}
					
                });

                $("#cmdAgregarTipo2").click(function (event){  
                    //$.mobile.loading("show",{html:"<img src='images/cargando.gif' />"});
					
					var formularioAgregar = document.productoTipo2;
					var todoCorrecto = true;
                    var talla = document.getElementById("talla").value;
					var color = document.getElementById("color").value;
					
					
                    
                    if(talla == "0"){
                        //$.mobile.loading("hide");
                        $("#response2").css("background-color","#ffefbe");  
						$("#response2").text("Debe seleccionar la Talla.");
						formularioAgregar.talla.focus();
                        todoCorrecto=false;
                        
                    }
					
					if(color == "0"){
                        //$.mobile.loading("hide");
                        $("#response2").css("background-color","#ffefbe");  
						$("#response2").text("Debe seleccionar un Color.");
						formularioAgregar.color.focus();
                        todoCorrecto=false;
                        
                    }				
										
					
					if(todoCorrecto==true){
						formularioAgregar.submit();
					}
					
                });

            });

	
	
</script>




</html>