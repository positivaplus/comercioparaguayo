<?php

/**
 * El Comercio Paraguayo, W3 S.A. - IT Solutions. All Rights Reserved. 2011.
 *
 * @author Endrigo Rivas -  02-feb-2012, 9:23:52.
 * 
 * $Id$
 */
?>
<?php

require("include/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
$mail->IsHTML(true);

//SMTP AUTHENTICATION
$mail->SMTPAuth = true;  // authentication enabled
$mail->Host = 'mail.w3.com.py';
$mail->Port = 587;
$mail->Username = "smtp@w3.com.py";
$mail->Password = "$%asdf2357r#";

//FROM
$mail->From = $_POST['email'];
$mail->FromName = $_POST['nombre'];

//TO
//$mail->AddAddress("endrigo.rivas@w3.com.py");
$mail->AddAddress("elcomercioparaguayo@elcomercioparaguayo.com.py");

$mail->WordWrap = 50;
$mail->CharSet = "ISO-8859-1";

$mail->Subject = "Consulta On-Line - El Comercio Paraguayo";

$browser = get_browser(null, true);

$mail->Body = "
		Contacto Online - El Comercio Paraguayo
		<br><br>
		Nombre: " . $_POST['nombre'] . "<br>
		Telefono: " . $_POST['telefono'] . "<br>
		Empresa: " . $_POST['empresa'] . "<br>
		E-mail: " . $_POST['email'] . "<br>
		Consulta: " . $_POST['mensaje'] . "<br>
		<br>
		<br>
		Informacion Extra
		<br>
		Navegador Web = " . $browser['parent'] . " <br>
		Sistema Operativo = " . $browser['platform'] . " <br>
		IP = " . $_SERVER['REMOTE_ADDR'] . " <br>
		HOST = " . $_SERVER['REMOTE_HOST'] . " <br>
		
		";

$mail->AltBody = "El Comercio Paraguayo - Contactos On-Line";

if (!$mail->Send()) {
    Header("Location: contactenos_fallido.php");
}

Header("Location: contactenos_mensaje_enviado.php");
?>