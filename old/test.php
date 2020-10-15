<?php
// script: recaptcha demo
// author: http://blog.unijimpe.net

require_once('./include/recaptchalib.php');

$publickey = "6LdQu-wSAAAAADEOlbRpLnNzGkHZ66Gm7escPe0v";
$privatekey = "6LdQu-wSAAAAAJwL9b_Qm6MDhDwKsE9s4gpUbROm";

$error = null;

if ($_POST['action'] == "register") {
	$re_ip = $_SERVER["REMOTE_ADDR"];
	$re_challenge = $_POST["recaptcha_challenge_field"];
	$re_response = $_POST["recaptcha_response_field"];
	
	$resp = recaptcha_check_answer($privatekey, $re_ip, $re_challenge, $re_response);
	
    if ($resp->is_valid) {
    	// procesar registro
		echo "Registro completo";
		exit;
    } else {
        $error = $resp->error;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>reCAPTCHA Demo</title>
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333;
	line-height: 18px;
}
.casilla {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #333;
	padding: 2px 4px;
	width: 298px;
	margin-left: 3px;
}
h3 {
	color: #03C;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<h3>Registro</h3>
<form method="post">
	<label for="username">Usuario</label><br />
	<input name="username" type="text" class="casilla" id="username" /><br />
    <label for="usermail">Email</label><br />
	<input name="usermail" type="text" class="casilla" id="usermail" /><br />
    <label for="usercheck">Verificaci&oacute;n</label><br />
	<?php echo recaptcha_get_html($publickey, $error); ?>
    <input type="hidden" name="action" value="register" />
    <input type="submit" name="btsend" value="Enviar" />
</form>
</body>
</html>