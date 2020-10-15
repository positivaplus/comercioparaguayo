<!DOCTYPE html>
<html>
<head>
	<title>El Comercio Paraguayo</title>
</head>
<body>
<?php  

$recaptcha = $_POST['g-recaptcha-response'];
if($recaptcha != ''){
  $secret = "6Lf_PBEUAAAAAF_KPRse6u8ZD92ki5uD4U3_UXuL";
  $ip = $_SERVER['REMOTE_ADDR'];
  $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
  $array = json_decode($var, true);
  if($array['success']){
    echo "soy un humano";
  }else{
    echo "soy un robot";
  }

}else{
  echo "Por favor rellene todos los campos y verificar que no eres un robot";
  
?>
  <a href="contactenos.html"> &raquo;volver</a>
<?php  

  exit();
}


require("include/class.phpmailer.php");

$foto = $_FILES["foto"];


$mail = new PHPMailer();

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
//SMTP AUTHENTICATION
$mail->SMTPAuth = true;  // authentication enabled
$mail->Host = 'mail.elcomercioparaguayo.com.py';
$mail->Port = 587;
$mail->Username = "formulario@elcomercioparaguayo.com.py";
$mail->Password = "w3@it2014!!";

//FROM
$mail->From = "formulario@elcomercioparaguayo.com.py";
$mail->FromName = "Web El Comercio Paraguayo";

//TO

$mail->AddAddress("elcomercioparaguayo@elcomercioparaguayo.com.py");

/*
$mail->AddAddress("mmartinez@elcomercioparaguayo.com.py");
$mail->AddAddress("siniestros4@elcomercioparaguayo.com.py"); 
*/

//$mail->AddAddress("melisa@elcomercioparaguayo.com.py"); 
//$mail->AddAddress("leo.gaona@w3.com.py");
//$mail->AddAddress("informatica@elcomercioparaguayo.com.py");

$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->CharSet = "ISO-8859-1";

$browser = get_browser(null, true);

$mail->Subject = "Contacto - El Comercio Paraguayo Web";
$fecha = date("d.m.Y, g:i a");
$mensaje = "
		<span style='font-family:Verdana, Geneva, sans-serif'>
		<p><strong><span style='font-size:16px'>El Comercio Paraguayo Web - Formulario Contacto </span></strong><br>
				
		  <strong>Nombre = </strong>" . $_POST['nombre'] . " <br>
				<br>
		  <strong>Telefono = </strong>" . $_POST['telefono'] . "  
                      <br>
		  <strong>Empresa = </strong>" . $_POST['empresa'] . " 
                      <br>
		  <strong>email = </strong>" . $_POST['email'] . " 
                      <br>
		  <strong>Mensaje = </strong>" . $_POST['mensaje'] . " 
                      <br>
                      <br>
		  <strong>INFORMACION EXTRA</strong></p>
		<p><strong>Navegador Web = </strong>" . $_SERVER['HTTP_USER_AGENT'] . " 
                    <br>
		  <strong>IP = </strong>" . $_SERVER['REMOTE_ADDR'] . " 
                      <br>
		  <strong>HOST = </strong>" . $_SERVER['REMOTE_HOST'] . " 
                      <br>   
		</p>
		</span>
		";

$mail->Body = $mensaje;
$mail->AddAttachment($foto["tmp_name"], $foto["name"]);
$mail->AltBody = "El Comercio Paraguayo - Formulario Contacto";


$denuncia = 1;
if (!$mail->Send()) {
    $denuncia = 0;
    echo '<script type="text/javascript">alert("Su mensaje no ha podido ser enviada - El Comercio Paraguayo");</script>';
}

if ($denuncia == 1) {
    echo '<script type="text/javascript">alert("Su mensaje ha sido enviada - El Comercio Paraguayo");</script>';
}

echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://www.elcomercioparaguayo.com.py/contactenos.html">';

?>

</body>
</html>