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

$recaptcha = $_POST['g-recaptcha-response'];
if($recaptcha != ''){
  $secret = "6Lcz_xAUAAAAANCqqDPhOKLKfq1YzQftFgy4Mz0-";
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
  <a href="denuncia_por_siniestro.php"> &raquo;volver</a>
<?php  
  //sleep(5000);
  //header('Location: denuncia_por_siniestro.php');
  exit();
}

require("include/class.phpmailer.php");

$foto = $_FILES["foto"];


$mail = new PHPMailer();

$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 4;  // debugging: 1 = errors and messages, 2 = messages only
//SMTP AUTHENTICATION
$mail->SMTPAuth = true;  // authentication enabled
$mail->Host = '72.249.76.184';
$mail->Port = 587;
$mail->Username = "formulario@elcomercioparaguayo.com.py";
$mail->Password = "formulario2018";

//FROM
$mail->From = "formulario@elcomercioparaguayo.com.py";
$mail->FromName = "Web El Comercio Paraguayo";

//TO

$mail->AddAddress("elcomercioparaguayo@elcomercioparaguayo.com.py");
$mail->AddAddress("mmartinez@elcomercioparaguayo.com.py");
$mail->AddAddress("siniestros4@elcomercioparaguayo.com.py"); 


//$mail->AddAddress("melisa@elcomercioparaguayo.com.py"); 
//$mail->AddAddress("jose.avalos@w3.com.py");
//$mail->AddAddress("informatica@elcomercioparaguayo.com.py");

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
                  <strong>Nombre y Apeliido = </strong>
                      <br>
                      <br>                  
                  <strong>Numero de C.I = </strong>
                      <br>
                      <br>                  
                  <strong>Direccion = </strong>
                      <br>
                      <br>                  
                  <strong>Numero de Chapa = </strong>
                      <br>
                      <br>                  
                  <strong>Aseguradora = </strong>
                      <br>
                      <br>                  
                  <strong>Telefono = </strong>
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
$mail->AltBody = "El Comercio Paraguayo - Denuncia de Siniestro";


$denuncia = 1;
if (!$mail->Send()) {
    $denuncia = 0;
    echo '<script type="text/javascript">alert("Su denuncia no ha podido ser enviada - El Comercio Paraguayo");</script>';
}

if ($denuncia == 1) {
    echo '<script type="text/javascript">alert("Su denuncia ha sido enviada - El Comercio Paraguayo");</script>';
}

echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://www.elcomercioparaguayo.com.py/denuncia_por_siniestro.php">';

?>