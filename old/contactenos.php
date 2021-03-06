<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="estilo.css" type="text/css" media="screen"/>
        <title>El Comercio Paraguayo</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
        <?
        require_once('./include/recaptchalib.php');
//Llaves de la captcha
        $captcha_publickey = "6LdQu-wSAAAAADEOlbRpLnNzGkHZ66Gm7escPe0v";
        $captcha_privatekey = "6LdQu-wSAAAAAJwL9b_Qm6MDhDwKsE9s4gpUbROm";
        $error_captcha = null;

        if ($_POST) {
            $captcha_respuesta = recaptcha_check_answer($captcha_privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
            if ($captcha_respuesta->is_valid) {
                //todo correcto
                //hacemos lo que se deba hacer una vez recibido el formulario válido
                echo "Todo correcto!";
            } else {
                //El código de validación de la imagen está mal escrito.
                echo "Has escrito mal el texto";
                $error_captcha = $captcha_respuesta->error;
            }
        }
        ?>
        <div class="contenido">
            <div class="cabecera">
                <div class="logo"></div>
                <div class="menu">

                    <ul id="button">
                        <li><a href="index.html">INICIO</a></li>
                        <li><a href="empresa.html">LA EMPRESA</a></li>
                        <li><a href="polizas.html">PÓLIZAS</a></li>
                        <li><a href="siniestros.html">SINIESTROS</a></li>
                        <li><a href="reaseguradores.html">REASEGURADORES</a></li>
                        <li><a href="agencias.html">AGENCIAS</a></li>
                        <li><a href="contactenos.html">CONTÁCTENOS</a></li>
                    </ul>
                </div>
            </div>
            <div class="columna_derecha">
                <div class="titulo_columna_derecha">Novedades</div>
                <div class="texto_columna">
                    <table width="294" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="294" height="30" valign="top">
                                    <strong>Responsabilidad Civil Internacional</strong>
                                </td>
                            </tr>
                            <tr>
                                <td height="6" valign="top">
                                    <img src="http://www.elcomercioparaguayo.com.py/images/img_separador_novedades.png" alt="" width="3" height="3" />
                                </td>
                            </tr>
                            <tr>
                                <td height="88" valign="top">
                                    <strong>Carta Verde: </strong>
                                    <p>Póliza única de seguro de responsabilidad civil en viaje internacional para vehículos particulares y/o de paseo (daños causados a personas o cosas no transportadas).</p>
                                </td>
                            </tr>
                            <tr>
                                <td height="88" valign="top">
                                    <strong>Carta Azul:</strong> 
                                    <p>Póliza única de seguro de responsabilidad civil del transportador carretero en viaje internacional (daños causados a personas o cosas transportadas o no, a excepción de la carga).</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Daños a la Carga:</strong> 
                                    <p>Póliza   de responsabilidad civi del transportador carretero en viaje internacional (daños a la carga transportada).</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="columna_izquierda">
                <div class="titulo_columna_derecha">Contactenos</div>
                <div class="texto_columna_izquierda">
                    <table width="540" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>Si ud. desea acercarse a nuestra oficina cetnral, puede encontrarnos en Alberdi Nº 453. Puede visitarnos de lunes a viernes en nuestro horario de atención, a partir de 8:30 hs. a 17:00 hs. También puede enviarnos un mail a las siguientes direcciones en caso de que su consulta sea más específica.</td>
                            </tr>
                            <tr>
                                <td> </td>
                            </tr>
                            <tr>
                                <td><table width="535" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td width="260"><table width="255" border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td height="45" valign="top">
                                                                    <strong>Informaciones Generales</strong><br />
                                                                    <a class="tananhoMail" href="mailto:elcomercioparaguayo@elcomercioparaguayo.com.py">elcomercioparaguayo@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="45" valign="top">
                                                                    <strong>Departamento de Automóviles</strong><br />
                                                                    <a class="tananhoMail" href="mailto:automovil@elcomercioparaguayo.com.py">automovil@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="45" valign="top">
                                                                    <strong>Departamento de Contabilidad</strong>
                                                                    <a class="tananhoMail" href="mailto:contabilidad@elcomercioparaguayo.com.py"><br />
                                                                        contabilidad@elcomercioparaguayo.com.py</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td height="45" valign="top"><strong>Departamento Internacional</strong><br />
                                                                    <a class="tananhoMail" href="mailto:internacional@elcomercioparaguayo.com.py">internacional@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Departamento de Siniestros</strong><br />
                                                                    <a class="tananhoMail" href="mailto:siniestros@elcomercioparaguayo.com.py">siniestros@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table></td>
                                                <td width="35"> </td>
                                                <td width="240" valign="top">
                                                    <table width="235" border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td height="45" valign="top">
                                                                    <strong>Departamento de Cauciones</strong><br />
                                                                    <a class="tananhoMail" href="mailto:cauciones@elcomercioparaguayo.com.py">cauciones@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="45" valign="top">
                                                                    <strong>Producción</strong><br />
                                                                    <a class="tananhoMail" href="mailto:produccion@elcomercioparaguayo.com.py">produccion@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="45" valign="top"><strong>Departamento de Informática</strong><br />
                                                                    <a class="tananhoMail" href="mailto:informatica@elcomercioparaguayo.com.py">informatica@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Sucursal Ciudad del Este</strong><br />
                                                                    <a class="tananhoMail" href="mailto:cde@elcomercioparaguayo.com.py">cde@elcomercioparaguayo.com.py</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table></td>
                            </tr>
                            <tr>
                                <td height="30"> </td>
                            </tr>
                            <tr>
                                <td height="28" valign="top">
                                    <strong>Formulario de Contactos.</strong>
                                </td>
                            </tr>
                            <tr>
                                <td height="10" valign="top"><img src="http://www.elcomercioparaguayo.com.py/images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                            </tr>
                            <tr>
                                <td>También puede utilizar este formulario para realizar cualquier tipo de consultas. Escríbanos todas sus inquietudes, y le responderemos en la brevedad posible todas sus dudas.</td>
                            </tr>
                            <tr>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>
                                    <form id="contacto" name="contacto" method="post" action="http://www.elcomercioparaguayo.com.py/contacto_enviar.php">
                                        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="230" valign="top"><table width="220" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>* Nombre y Apellido:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="nombre_requerido">
                                                                            <label>
                                                                                <input name="nombre" type="text" id="nombre" size="32" autocomplete="off" />
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="28" valign="bottom">Teléfono:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input name="telefono" type="text" id="telefono" size="32" /></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="28" valign="bottom">Empresa/Organización:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input name="empresa" type="text" id="empresa" size="32" /></td>
                                                                </tr>
                                                            </tbody>
                                                        </table></td>
                                                    <td width="40"> </td>
                                                    <td width="230" valign="top"><table width="220" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>* E-mail:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="email_requerido">
                                                                            <label>
                                                                                <input name="email" type="text" id="email" size="32" autocomplete="off" />
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="28" valign="bottom">* Consulta:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span id="mensaje_requerido">
                                                                            <textarea name="mensaje" id="mensaje" cols="25" rows="3" autocomplete="off"></textarea>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- Captcha-->
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="g-recaptcha" data-sitekey="6Lf_PBEUAAAAAF0AMx1asxPRkbqX5tgeS7kf30f_"></div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>

                                                <tr>
                                                    <td height="40" colspan="3" valign="bottom">
                                                        <table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
                                                            <br/>
                                                            <br/>
                                                            <?php
                                                                //escribimos en la página lo que nos devuelve recaptcha_get_html()
                                                                echo recaptcha_get_html($captcha_publickey, $error_captcha);
                                                            ?>
                                                            <br/>
                                                            <tbody>
                                                                <tr>
                                                                    <td width="70" align="center"><label>
                                                                            <input type="reset" name="borrar" id="borrar" value="Limpiar" />
                                                                        </label>
                                                                    </td>
                                                                    <td width="70" align="center"><label>
                                                                            <input type="submit" name="send" id="send" value="Enviar" />
                                                                        </label>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td height="30" valign="bottom">(*) Son campos obligatorios</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="contenido_footer">
        <div class="texto_footer_izquierda">
            Copyright © 2012 - El Comercio Paraguayo S.A.

            <p>Oficina Central: Alberdi Nº 453<br />
                Telefax.: (+595 21) 492 324 Rastreo Automático<br />  
                Mail: elcomercioparaguayo@elcomercioparaguayo.com.py</p>
        </div>
        <div class="texto_footer_derecha"><img src="imagenes_base/pagos.png" width="385" height="82" />
        </div>
        <div class="firma">Desarrollado: por W3 IT Solutions</div>
    </div>
</div>
</body>

</html>
