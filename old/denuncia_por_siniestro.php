<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="estilo.css" type="text/css" media="screen"/>
        <title>El Comercio Paraguayo</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
            $(function() {
                $("#datepicker").datepicker();
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#txtFecha').datepicker(
                        {dateFormat: 'd MM, yy',
                            /*minDate: '+0D',*/
                            maxDate: '+1Y',
                            changeMonth: true,
                            changeYear: true,
                            numberOfMonths: 1,
                            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                'Junio', 'Julio', 'Agosto', 'Septiembre',
                                'Octubre', 'Noviembre', 'Diciembre'],
                            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr',
                                'May', 'Jun', 'Jul', 'Ago',
                                'Sep', 'Oct', 'Nov', 'Dic']
                        });
            });
        </script>
                <script type="text/javascript">
            $(document).ready(function() {
                $('#txtFecha_s').datepicker(
                        {dateFormat: 'd MM, yy',
                            /*minDate: '+0D',*/
                            maxDate: '+1Y',
                            changeMonth: true,
                            changeYear: true,
                            numberOfMonths: 1,
                            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                'Junio', 'Julio', 'Agosto', 'Septiembre',
                                'Octubre', 'Noviembre', 'Diciembre'],
                            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr',
                                'May', 'Jun', 'Jul', 'Ago',
                                'Sep', 'Oct', 'Nov', 'Dic']
                        });
            });
        </script>
        <script>
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("submitted!");
                }
            });
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
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
                                <td width="294" height="30" valign="top"><strong>Responsabilidad Civil Internacional</strong></td>
                            </tr>
                            <tr>
                                <td height="6" valign="top"><img src="http://www.elcomercioparaguayo.com.py/images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                            </tr>
                            <tr>
                                <td height="88" valign="top"><strong>Carta Verde: </strong>Póliza única de seguro de responsabilidad civil en viaje internacional para vehículos particulares y/o de paseo (daños causados a personas o cosas no transportadas).</td>
                            </tr>
                            <tr>
                                <td height="88" valign="top"><strong>Carta Azul</strong>: Póliza única de seguro de responsabilidad civil del transportador carretero en viaje internacional (daños causados a personas o cosas transportadas o no, a excepción de la carga).</td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        <strong>Daños a la Carga:</strong> 
                                        Póliza de responsabilidad civi del transportador carretero en viaje internacional (daños a la carga transportada).
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>&nbsp;</h2>
                </div>
            </div>
            <div class="columna_izquierda">
                <div class="titulo_columna_derecha">Denuncia por siniestro</div>
                <div class="texto_columna_izquierda">
                    <form class="cmxform" id="commentForm" mane="form" method="post" action="send_denuncia.php" enctype="multipart/form-data">
                        <table width="530" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="20" valign="top">
                                    <table width="500" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="135" class="contenido">
                                                <span class="campo_obligatorio">* </span>Fecha del Siniestro:
                                            </td>
                                            <td width="365">
                                                <span id="sprytextfield1"><span id="sprytextfield1">
                                                        <label>
                                                            <p>
                                                                <input type="text" name="fecha_siniestro" id="txtFecha" required/>
                                                            </p>
                                                        </label>
                                                        <span class="textfieldInvalidFormatMsg">dd/mm/aaaa</span></span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" valign="top" class="subtitulos">Datos del Conductor</td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Nombre:</td>
                                            <td width="175" class="contenido"> <span class="campo_obligatorio">*</span> Apellido:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> C&eacute;dula de Identidad:</td>
                                        </tr>
                                        <tr>
                                            <td><span id="sprytextfield2">
                                                    <label>
                                                        <input type="text" name="nombre" id="nombre" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span id="sprytextfield3">
                                                    <label>
                                                        <input type="text" name="apellido" id="apellido" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span id="sprytextfield4">
                                                    <label>
                                                        <input type="text" name="cedula" id="cedula" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="263" class="contenido">
                                                <span class="campo_obligatorio">*</span> 
                                                Direcci&oacute;n Particular:</td>
                                            <td width="262" class="contenido">
                                                <span class="campo_obligatorio">*</span> Ciudad:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span >
                                                    <label>
                                                        <input name="direccion_particular" type="text" id="direccion_particular" size="34" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input name="ciudad" type="text" id="ciudad" size="34" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span> Tel&eacute;fono Fijo:
                                            </td>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span>Celular:
                                            </td>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span>E-mail:
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span id="sprytextfield7">
                                                    <label>
                                                        <input type="text" name="telefono" id="telefono" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span id="sprytextfield13">
                                                    <label>
                                                        <input type="text" name="celular" id="celular" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span id="sprytextfield14">
                                                    <label>
                                                        <input type="email" name="email" id="email" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" valign="top" class="subtitulos">Datos del Veh&iacute;culo</td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Marca:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Modelo:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Tipo:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="marca" id="marca" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="modelo" id="modelo" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="tipo" id="tipo" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span> Color:
                                            </td>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span> A&ntilde;o:
                                            </td>
                                            <td width="175" class="contenido">
                                                <span class="campo_obligatorio">*</span> Matr&iacute;cula N&ordm;:
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span >
                                                    <label>
                                                        <input type="text" name="color" id="color" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="anho" id="anho" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span id="sprytextfield15">
                                                    <label>
                                                        <input type="text" name="matricula" id="matricula" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido">Motor N&ordm;:</td>
                                            <td width="175" class="contenido">Chasis N&ordm;:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="text" name="motor" id="motor" required/>
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="text" name="chasis" id="chasis" required/>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" valign="top" class="subtitulos">Datos del Sinistro</td>
                            </tr>
                            <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Fecha Siniestro:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Lugar:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Ciudad Siniestro:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>
                                                    <label>
                                                        <!--<input type="text" name="fecha_s" id="txtFecha" required/>-->
                                                        <input type="text" name="fecha_s" id="txtFecha_s" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="lugar" id="lugar" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="ciudad_s" id="ciudad_s" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                            <table width="525" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Pais:</td>
                                            <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Intervención:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="pais_s" id="pais_s" required/>
                                                    </label>
                                                </span>
                                            </td>
                                            <td>
                                                <span>
                                                    <label>
                                                        <input type="text" name="intervencion" id="intervencion" required/>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                            <tr>
                                <td>
                                    <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <span class="contenido">
                                                    <span class="campo_obligatorio">*</span> Narraci&oacute;n del Hecho:</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>
                                                    <label>
                                                        <textarea name="narracion" id="narracion" cols="55" rows="5" required></textarea>
                                                    </label>
                                                </span>
                                            </td>
                                        </tr>

                                    </table>
                                    <br />
                                    <br />
                                    <table>
                                        <tr>
                                            <td>Adjuntar archivo: </td>
                                        </tr> 
                                        <tr>
                                            <td>
                                                <input type="file" name="foto">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Captcha-->
                            <tr>
                            	<td>&nbsp;</td>
                            </tr>
                            <tr>
                            	<td>
                            		<div class="g-recaptcha" data-sitekey="6Lcz_xAUAAAAALl5b-AxgOF8Jr8Z-sdsR69KpRZH"></div>
                            	</td>
                            </tr>
                            <tr>
                            	<td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td height="40" valign="bottom">
                                    <table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="70" align="center">
                                                <label>
                                                    <input type="reset" name="borrar" id="borrar" value="Limpiar" />
                                                </label>
                                            </td>
                                            <td width="70" align="center"><label>
                                                    <input type="submit" name="send" id="send" value="Enviar" />
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            

                        </table>
                    </form>
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
