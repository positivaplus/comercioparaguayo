<?php

/**
 * El Comercio Paraguayo, W3 S.A. - IT Solutions. All Rights Reserved. 2011.
 *
 * @author Jose Avalos -  30-May-2013, 10:29:52.
 *
 * $Id$
 */
?>
<?php
date_default_timezone_set('America/Asuncion'); 
require("include/class.phpmailer.php");
$recaptcha = $_POST["g-recaptcha-response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6Ldxx1MUAAAAAO2U7Da4LZYV9EgkU8vjMOBwD6cn',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
		// No eres un robot, continuamos con el env��o del email
		// ...
		// ...
		$foto = $_FILES["foto"];


	$mail = new PHPMailer();

	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	//SMTP AUTHENTICATION
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->Host = 'mail.elcomercioparaguayo.com.py';
	$mail->Port = 587;
	$mail->Username = "formulario@elcomercioparaguayo.com.py";
	$mail->Password = "formulario2018";

	//FROM
	$mail->From = "formulario@elcomercioparaguayo.com.py";
	$mail->FromName = "Web El Comercio Paraguayo";

	//TO

	$mail->AddAddress("vroman@elcomercioparaguayo.com.py");
	$mail->AddAddress("mmartinez@elcomercioparaguayo.com.py");
	$mail->AddAddress("siniestros4@elcomercioparaguayo.com.py");
	$mail->AddAddress("angel.ruiz@elcomercioparaguayo.com.py");
	$mail->AddAddress("cojeda@elcomercioparaguayo.com.py");
	$mail->AddAddress("elcomercioparaguayo@elcomercioparaguayo.com.py");
	



	//$mail->AddAddress("melisa@elcomercioparaguayo.com.py");
	//$mail->AddAddress("jose.avalos@w3.com.py");





	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	$mail->CharSet = "ISO-8859-1";

	$browser = get_browser(null, true);

	$mail->Subject = "Denuncia Siniestro - El Comercio Paraguayo Web";
	$fecha = date("d.m.Y, g:i a");
	$mensaje = "
			<span style='font-family:Verdana, Geneva, sans-serif'>
			<p><strong><span style='font-size:16px'>El Comercio Paraguayo Web - Denuncia de Siniestro </span></strong><br>
					<strong>Ingresado el </strong>" . $fecha . ".
					<br>
					<br>
			  <strong>Fecha de Denuncia del Siniestro = </strong>" . $_POST['fecha_siniestro'] . " <br>
					<br>
			  <strong>DATOS DEL CONDUCTOR </strong><br>
					<br>
			  <strong>Nombre = </strong>" . $_POST['nombre'] . "
						  <br>
			  <strong>Apellido = </strong>" . $_POST['apellido'] . "
						  <br>
			  <strong>C.I. = </strong>" . $_POST['cedula'] . "
						  <br>
			  <strong>Telefono = </strong>" . $_POST['telefono'] . "
						  <br>
			  <strong>Celular = </strong>" . $_POST['celular'] . "
						  <br>
			  <strong>Correo Electronico = </strong>" . $_POST['email'] . "
						  <br>
			  <strong>Direccion Particular = </strong>" . $_POST['direccion_particular'] . "
						  <br>
			  <strong>Ciudad = </strong>" . $_POST['ciudad'] . "
						  <br>
				  <br>
			  <strong>DATOS DEL VEHICULO </strong><br>
						  <br>
			  <strong>Marca = </strong>" . $_POST['marca'] . "
						  <br>
			  <strong>Modelo = </strong>" . $_POST['modelo'] . "
						  <br>
			  <strong>Tipo a </strong>= " . $_POST['tipo'] . "
						  <br>
			  <strong>A&ntilde;o = </strong>" . $_POST['anho'] . "
						  <br>
			  <strong>Color = </strong>" . $_POST['color'] . "
						  <br>
			  <strong>Chapa # = </strong>" . $_POST['matricula'] . "
						  <br>
			  <strong># Motor = </strong>" . $_POST['motor'] . "
						  <br>
			  <strong># Chassis = </strong>" . $_POST['chasis'] . "
						  <br>
						  <br>
					  <strong># Fecha Siniestro = </strong>" . $_POST['fecha_s'] . "
						  <br>
						  <br>
					  <strong># Lugar = </strong>" . $_POST['lugar'] . "
						  <br>
						  <br>
					  <strong># Ciudad = </strong>" . $_POST['ciudad'] . "
						  <br>
						  <br>
					  <strong># Pais = </strong>" . $_POST['pais_s'] . "
						  <br>
						  <br>
					  <strong># Intervencion = </strong>" . $_POST['intervencion'] . "
						  <br>
						  <br>
			  <strong>Narracion del hecho = </strong>" . $_POST['narracion'] . "
						  <br>
						  <br>
			  <strong>DATOS DEL TERCERO</strong></p>
					  <strong>Nombre y Apeliido = </strong>". $_POST['nombreter'] ."
						  <br>
						  <br>
					  <strong>Numero de C.I = </strong>" . $_POST['citer'] . "
						  <br>
						  <br>
					  <strong>Direccion = </strong>" . $_POST['dirter'] . "
						  <br>
						  <br>
					  <strong>Numero de Chapa = </strong>" . $_POST['dirter'] . "
						  <br>
						  <br>
					  <strong>Aseguradora = </strong>" . $_POST['aseter'] . "
						  <br>
						  <br>
					  <strong>Telefono = </strong>" . $_POST['teleter'] . "
						  <br>
						  <br>
			  <strong>INFORMACION EXTRA</strong></p>
			<p><strong>Navegador Web = </strong>" . $_SERVER['HTTP_USER_AGENT'] . "
						<br>
			  <strong>IP = </strong>" . $_SERVER['REMOTE_ADDR'] . "
						  <br>

			</p>
			</span>
			";

	$mail->Body = $mensaje;
	$mail->AddAttachment($foto["tmp_name"], $foto["name"]);
	$mail->AltBody = "El Comercio Paraguayo - Denuncia de Siniestro";


	$denuncia = 1;
	if (!$mail->Send()) {
		$denuncia = 0;
		echo '<script type="text/javascript">alert("Su denuncia no ha podido ser enviada - El Comercio Paraguayo");</script>';
	}

	if ($denuncia == 1) {
		echo '<script type="text/javascript">alert("Su denuncia ha sido enviada - El Comercio Paraguayo");</script>';
	}

	echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://www.elcomercioparaguayo.com.py/index.html">';




        //proceed the form fields validation and sending the e-mail
		
	} else {
		// Eres un robot!
		echo '<script type="text/javascript">alert("No marcaste el Captcha! - El Comercio Paraguayo");</script>';
		
	}
	

			

?>