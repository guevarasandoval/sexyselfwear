<?php

include 'carrito.php';
$carrito = new Carrito();

$pagina = $_POST["pagina"];
$metodo = $_POST["metodo"];



if ($metodo=="agregar"){
$id= $_SESSION["id"];
$id=$id+1;
$_SESSION["id"]=$id;

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$talla = $_POST["talla"];
$color = $_POST["color"];

//agregar producto al carrito
//array que crea un producto
$articulo = array(
		"id"			=>		$id,
		"codigo"			=>		$codigo,
		"nombre"		=>		$nombre,
		"precio"		=>		$precio,
		"cantidad"		=>		$cantidad,
		"talla"		=>		$talla,
		"color"		=>		$color
	);
//añadir el producto
$carrito->add($articulo);

$redireccion = 'Location: ..\\'.$pagina;
header($redireccion);
exit();

}else if($metodo=="eliminar"){

$unique_id = $_POST["unique_id"];
$carrito->remove_producto($unique_id);

$redireccion = 'Location: ..\\'.$pagina;
header($redireccion);
exit();

}else if($metodo=="comprar"){

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$distrito = $_POST["distrito"];
$direccion = $_POST["direccion"];
$referencia = $_POST["referencia"];

//obteniendo el precio del flete

if($distrito=="San Miguel"){
$precioflete=5.00;
}else if($distrito=="Los Olivos"){
$precioflete=20.00;
}else if($distrito=="Lima"){
$precioflete=10.00;
}

//calculo del precio final
$preciofinal = $carrito->precio_total() + $precioflete ;


//envio de correos a cliente 

		$to = strip_tags($_POST['email']);
		$numeropedido = rand(0,1000);
		$subject = 'Confirmación de Pedido: '.$numeropedido;

		$headers = "From: pedidos@sexyselfwear.com \r\n";
		$headers .= "Reply-To: pedidos@sexyselfwear.com \r\n";
		$headers .= "BCC: guevarasandoval@gmail.com \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<html><body>';
		$message .= '
		
		<h1>Sexy Selfwear</h1>
		<h3>Confirmación de Pedido Nro: '.$numeropedido.' </h3>
		<p>Hemos recibido correctamente tu pedido, revisalo antes de realizar el pago. Los Gastos de Envío han sido calculados en base a tus Datos de Envío </p>
		
		<h3>Datos de Envío</h3>
		<table>
		<tr>
			<td>Nombres: </td>
			<td>'.$nombres.'</td>
		</tr>
		<tr>
			<td>Apellidos: </td>
			<td>'.$apellidos.'</td>
		</tr>
		<tr>
			<td>Email: </td>
			<td>'.$email.'</td>
		</tr>
		<tr>
			<td>Telefono: </td>
			<td>'.$telefono.'</td>
		</tr>
		<tr>
			<td>Distrito: </td>
			<td>'.$distrito.'</td>
		</tr>
		<tr>
			<td>Direccion: </td>
			<td>'.$direccion.'</td>
		</tr>
		<tr>
			<td>Referencia: </td>
			<td>'.$referencia.'</td>
		</tr>
		</table>
		
		
		<h3>Detalle del Pedido</h3>
		<table>
			<tr>
				<td><u>Codigo</u></td>
				<td><u>Producto</u></td>
				<td><u>Talla</u></td>
				<td><u>Color</u></td>
				<td><u>Precio Unitario</u></td>
				<td><u><center>Cantidad</center></u></td>
				<td><u>Subtotal</u></td>
			</tr>
			
			';
			$carro = $carrito->get_content();
			if($carro)
				{
					foreach($carro as $producto)
					{
					$message .= '	
						
						<tr>
							<td>'.$producto["codigo"].'</td>
							<td>'.$producto["nombre"].'</td>
							<td>'.$producto["talla"].'</td>
							<td>'.$producto["color"].'</td>
							<td><center>S/.'.$producto["precio"].'</center></td>
							<td><center>'.$producto["cantidad"].'</center></td>
							<td>S/.'.number_format((float)$producto["precio"]*$producto["cantidad"], 2, '.', '').'</td>
						</tr>
					';	
					
					}
				}
			
			$message .= '
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>SUBTOTAL: </td>
				<td>S/.'.number_format((float)$carrito->precio_total(), 2, '.', '').'</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>Gastos de envío ('.$distrito.'): </td>
				<td>S/.'.number_format((float)$precioflete, 2, '.', '').'</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><b>TOTAL</b></td>
				<td><b>S/.'.number_format((float)$preciofinal, 2, '.', '').'</></td>
			</tr>			
		
		</table>
		<h3>Forma de pago</h3>
		<p>Depósito en cuenta: deposita en cualquiera de estas cuentas el total de tu compra y envía el voucher escaneado a <a href="mailto:pedidos@sexyselfwear.com">pedidos@sexyselfwear.com</a> con tu número de pedido.</p>
		<p><img src="http://sexyselfwear.com/images/cuentas-banco.jpg"></p>
		
		';
		$message .= '</body></html>';
		
		mail($to, $subject, $message, $headers);


//envio de correos a Proveedor 
		
		$to = 'pedidos@sexyselfwear.com';
		$subject = 'Nuevo Pedido Realizado : '.$numeropedido;
		
		$headers = "From: ".strip_tags($_POST['email'])." \r\n";
		$headers .= "Reply-To: ".strip_tags($_POST['email'])." \r\n";
		$headers .= "BCC: guevarasandoval@gmail.com \r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		
		mail($to, $subject, $message, $headers);

//echo $message;

//acac se implementara para guardar en base de datos


$_SESSION["nombres"]=$nombres;
$_SESSION["apellidos"]=$apellidos;
$_SESSION["email"]=$email;
$_SESSION["telefono"]=$telefono;
$_SESSION["distrito"]=$distrito;
$_SESSION["direccion"]=$direccion;
$_SESSION["referencia"]=$referencia;
$_SESSION["precioflete"]=$precioflete;
$_SESSION["preciofinal"]=$preciofinal;


//$carrito->destroy(); //destruir el carrito
$redireccion = 'Location: ..\\'.$pagina;
header($redireccion);
exit();

}else if($metodo=="contacto"){

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

//enviar correo a cliente
$to = strip_tags($_POST['email']);
$subject = 'Confirmación de Contacto';

$headers = "From: pedidos@sexyselfwear.com \r\n";
$headers .= "Reply-To: pedidos@sexyselfwear.com \r\n";
$headers .= "BCC: guevarasandoval@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= '

<h1>Sexy Selfwear</h1>
<h3>Solicitud de Contacto</h3>

<p>Se ha recibido conforme su solicitud de Contacto , en breve le responderemos.</p>
<p>Gracias.</p>
<p>Sus datos de contacto registrados son:</p>
<table>
<tr>
	<td>Nombres: </td>
	<td>'.$nombres.'</td>	
</tr>
	<td>Apellidos: </td>
	<td>'.$apellidos.'</td>
<tr>
</tr>
	<td>Email: </td>
	<td>'.$email.'</td>
<tr>
	<td>Teléfono: </td>
	<td>'.$telefono.'</td>
</tr>
<tr>
	<td>Mensaje: </td>
	<td>'.$mensaje.'</td>
</tr>
</table>			



';
$message .= '</body></html>';

//echo $message;

mail($to, $subject, $message, $headers);


//enviar correo a proveedor
$to = 'pedidos@sexyselfwear.com';
$subject = 'Nuevo Contacto Realizado ';

$headers = "From: ".strip_tags($_POST['email'])." \r\n";
$headers .= "Reply-To: ".strip_tags($_POST['email'])." \r\n";
$headers .= "BCC: guevarasandoval@gmail.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

// $_SESSION["nombres"]=$nombres;
// $_SESSION["apellidos"]=$apellidos;
// $_SESSION["email"]=$email;
// $_SESSION["telefono"]=$telefono;
// $_POST["mensaje"]=$mensaje;

$redireccion = 'Location: ..\\'.$pagina;
header($redireccion);
exit();


}





//agregar producto al carrito
// //array que crea un producto
// $articulo = array(
		// "id"			=>		14,
		// "cantidad"		=>		3,
		// "precio"		=>		50,
		// "nombre"		=>		"camisetas"
	// );
// //añadir el producto
// //$carrito->add($articulo);

//$carrito->precio_total();//Obtener el precio total del carrito
//$carrito->get_content(); //obtener el contenido del carrito
//$carrito->articulos_total();//obtener el numero de articulos del carrito
//$carrito->remove_producto("45c48cce2e2d7fbdea1afc51c7c6ad26"); //remover producto del carrito por Id
//$carrito->destroy(); //destruir el carrito

//asignamos a $carro el método get_content() que contiene el contenido del carrito y recorrer el contenido del carrito.
// $carro = $carrito->get_content();
// if($carro)
// {
	// foreach($carro as $producto)
	// {
		// echo $producto["id"];
		// echo "<br />";
		// echo $producto["unique_id"];
		// echo "<br />";
		// echo $producto["cantidad"];
		// echo "<br />";
		// echo $producto["precio"];
		// echo "<br />";
		// echo $producto["nombre"];
		// echo "<br />";
	// }
// }







?>