<?php
/**
 * El Comercio Paraguayo, W3 S.A. - IT Solutions. All Rights Reserved. 2011.
 *
 * @author Endrigo Rivas -  02-feb-2012, 9:23:52.
 * 
 * $Id$
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_el_comercio.dwt.php" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="shortcut icon" href="images/favicon_el_comercio_paraguayo.ico" />
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>El Comercio Paraguayo S.A. - Asegurando su futuro</title>
        <!-- InstanceEndEditable -->
        <link href="estilos.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            <!--
            body {
                margin-top: 0px;
                background-image: url(images/img_background.png);
                background-position:center;
                margin-bottom: 0px;
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            a:active {
                text-decoration: none;
            }
            -->
        </style>
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
        <!-- InstanceBeginEditable name="head" -->
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <!-- InstanceEndEditable -->
    </head>

    <body>
        <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <th height="110" valign="top" scope="col"><script type="text/javascript">
                    AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','778','height','104','src','flash/header','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/header','wmode','opaque' );//end AC code
                    </script><noscript>
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="778" height="104" >
                            <<param name="wmode" value="opaque">
                                <param name="movie" value="flash/header.swf"/>
                                <param name="quality" value="high"/>
                                <embed  wmode="opaque"src="flash/header.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="778" height="104">
                                </embed>
                        </object>
                    </noscript></th>
            </tr>
        </table>
        <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="580" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
                    <table width="580" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="95" valign="top"><img src="images/img_siniestros.jpg" width="580" height="80" /></td>
                        </tr>
                        <tr>
                            <td><table width="540" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="28" valign="top" class="titulos">Denuncia por Siniestro</td>
                                    </tr>
                                    <tr>
                                        <td height="10" valign="top" class="separador"><img src="images/img_separador_novedades.png" width="3" height="3" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="contenido">Complete el siguiente formulario con la informaci&oacute;n del siniestro, y en la brevedad posible nos estaremos comunicando con usted.</span></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><form id="form1" name="form1" method="post" action="enviar_denuncia.php">
                                                <table width="530" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td height="20" valign="top"><table width="500" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="135" class="contenido"><span class="campo_obligatorio">* </span>Fecha del Siniestro:</td>
                                                                    <td width="365"><span id="sprytextfield1"><span id="sprytextfield1">
                                                                                <label>
                                                                                    <input type="text" name="fecha_siniestro" id="fecha_siniestro" />
                                                                                </label>
                                                                                <span class="textfieldInvalidFormatMsg">dd/mm/aaaa</span></span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="contenido">&nbsp;</td>
                                                                    <td><span class="datos_pie">Ej.:dd/mm/aaaa</span></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20" valign="top">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20" valign="top" class="subtitulos">Datos del Conductor</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Nombres:</td>
                                                                    <td width="175" class="contenido"> <span class="campo_obligatorio">*</span> Apellidos:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> C&eacute;dula de Identidad:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextfield2">
                                                                            <label>
                                                                                <input type="text" name="nombre" id="nombre" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield3">
                                                                            <label>
                                                                                <input type="text" name="apellido" id="apellido" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield4">
                                                                            <label>
                                                                                <input type="text" name="cedula" id="cedula" />
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="263" class="contenido"><span class="campo_obligatorio">*</span> Direcci&oacute;n Particular:</td>
                                                                    <td width="262" class="contenido"><span class="campo_obligatorio">*</span> Ciudad:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextfield5">
                                                                            <label>
                                                                                <input name="direccion_particular" type="text" id="direccion_particular" size="34" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield6">
                                                                            <label>
                                                                                <input name="ciudad" type="text" id="ciudad" size="34" />
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Tel&eacute;fono Fijo:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span>Celular:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span>E-mail:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextfield7">
                                                                            <label>
                                                                                <input type="text" name="telefono" id="telefono" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td>
                                                                        <span id="sprytextfield13">
                                                                        <label>
                                                                            <input type="text" name="celular" id="celular" />
                                                                        </label>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="sprytextfield14">
                                                                        <label>
                                                                            <input type="text" name="email" id="email" />
                                                                        </label>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td height="34">&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td height="20" valign="top" class="subtitulos">Datos del Veh&iacute;culo</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Marca:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Modelo:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Tipo:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextfield8">
                                                                            <label>
                                                                                <input type="text" name="marca" id="marca" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield9">
                                                                            <label>
                                                                                <input type="text" name="modelo" id="modelo" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield10">
                                                                            <label>
                                                                                <input type="text" name="tipo" id="tipo" />
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Color:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> A&ntilde;o:</td>
                                                                    <td width="175" class="contenido"><span class="campo_obligatorio">*</span> Matr&iacute;cula N&ordm;:</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextfield11">
                                                                            <label>
                                                                                <input type="text" name="color" id="color" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td><span id="sprytextfield12">
                                                                            <label>
                                                                                <input type="text" name="anho" id="anho" />
                                                                            </label>
                                                                        </span></td>
                                                                    <td>
                                                                        <span id="sprytextfield15">
                                                                        <label>
                                                                            <input type="text" name="matricula" id="matricula" />
                                                                        </label>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="525" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="175" class="contenido">Motor N&ordm;:</td>
                                                                    <td width="175" class="contenido">Chasis N&ordm;:</td>
                                                                    <td width="175" class="contenido">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label>
                                                                            <input type="text" name="motor" id="motor" />
                                                                        </label></td>
                                                                    <td><label>
                                                                            <input type="text" name="chasis" id="chasis" />
                                                                        </label></td>
                                                                    <td><label></label></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td><span class="contenido"><span class="campo_obligatorio">*</span> Narraci&oacute;n del Hecho:</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span id="sprytextarea1">
                                                                            <label>
                                                                                <textarea name="narracion" id="narracion" cols="55" rows="5"></textarea>
                                                                            </label>
                                                                        </span></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>

                                                    <tr>
                                                        <td height="40" valign="bottom"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="70" align="center"><label>
                                                                            <input type="reset" name="borrar" id="borrar" value="Limpiar" />
                                                                        </label></td>
                                                                    <td width="70" align="center"><label>
                                                                            <input type="submit" name="send" id="send" value="Enviar" />
                                                                        </label></td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                </table>
                                            </form></td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <!-- InstanceEndEditable --></td>
                <td width="198" valign="top"><table width="198" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><script type="text/javascript">
                                AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','198','height','216','src','flash/menu_principal','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash/menu_principal', 'wmode','opaque' );

                                //end AC code
                                </script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="198" height="216">
                                        <param name="wmode" value="opaque">
                                            <param name="movie" value="flash/menu_principal.swf" />
                                            <param name="quality" value="high" />
                                            <embed wmode="opaque" src="flash/menu_principal.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="198" height="216"></embed></object></noscript></td>
                        </tr>
                        <tr>
                            <td height="20" background="images/img_puntos_grises.gif">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="50" valign="top" bgcolor="#E5E5E5"><img src="images/img_titulo_novedades.png" width="198" height="42" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#E5E5E5"><!-- InstanceBeginEditable name="EditRegion2" -->
                                <table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="18" valign="top"><strong class="titulos_novedades">Seguro con Franquicia</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="6" valign="top" class="separador"><img src="images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="contenido_novedades">Ud. fija un 
                                            monto hasta donde se hace cargo del siniestro, y cuando 
                                            mayor es ese monto, menor es el costo del seguro.</td>
                                    </tr>
                                    <tr>
                                        <td height="22" class="contenido_novedades">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="32" valign="top" class="titulos_novedades"><strong>Seguro Responsabilidad Compartida</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="6" valign="top" class="separador"><img src="images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="contenido_novedades">Los riesgos son compartidos, 
                                            en una proporcion que Ud. fija, entre el asegurado y 
                                            la compania.</td>
                                    </tr>
                                    <tr>
                                        <td height="22">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="32" valign="top" class="titulos_novedades"><strong>Averig&uuml;e el costo de su veh&iacute;culo</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="6" valign="top" class="separador"><img src="images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                                    </tr>
                                    <tr>
                                        <td height="54" valign="top"><div class="link_contenido"><span class="contenido_novedades">Complete el formulario 
                                                    y en la brevedad le estaremos enviando el presupuesto 
                                                    completo del seguro de su veh&iacute;culo.</span></div></td>
                                    </tr>
                                    <tr>
                                        <td height="22">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td height="18" valign="top" class="titulos_novedades"><strong>P&oacute;lizas Especiales</strong></td>
                                    </tr>
                                    <tr>
                                        <td height="6" valign="top" class="separador"><img src="images/img_separador_novedades.png" alt="" width="3" height="3" /></td>
                                    </tr>
                                    <tr>
                                        <td height="40" valign="top"><div class="link_contenido">
                                                <p><span class="contenido_novedades">Averig&uuml;e m&aacute;s sobre nuestros especiales servicios de: </span><a href="polizas_auto_y_hogar.php">p&oacute;liza auto y p&oacute;liza hogar</a></p>
                                                <p>&nbsp;</p>
                                            </div></td>
                                    </tr>

                                    <tr>
                                        <td height="80">&nbsp;</td>
                                    </tr>
                                </table>
                                <script type="text/javascript">
                                    <!--
                                    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
                                    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
                                    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
                                    var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
                                    var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
                                    var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
                                    var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
                                    var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
                                    var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
                                    var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
                                    var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
                                    var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
                                    var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
                                    var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
                                    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "date", {format:"dd/mm/yyyy"});
                                    var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
                                    //-->
                                </script>
                                <!-- InstanceEndEditable --></td>
                        </tr>
                        <tr>
                            <td height="50" valign="top" bgcolor="#E5E5E5"><img src="images/img_titulo_PAGA-TU-POLIZA.png" width="198" height="42" /></td>
                        </tr>
                        <tr>
                            <td bgcolor="#E5E5E5" height="70">
                                <a href="http://www.webpagos.com.py/"><img src="images/logo-webpagos.png" alt="Ingresar a webpagos"/></a>

                            </td>
                        </tr>
                        <tr>
                    </table></td>
            </tr>
        </table>
        <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="42" background="images/img_fondo_pie.gif"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="18" align="center" class="datos_pie">Copyright &copy; <?php echo date("Y") ?> - El Comercio Paraguayo S.A. - Oficina Central: Alberdi N&ordm; 453</td>
                        </tr>
                        <tr>
                            <td height="18" align="center"><div class="link_mail"><span class="datos_pie">Telefax.: (+595 21) 492   324 Rastreo   Autom&aacute;tico - Mail: <a href="mailto:elcomercioparaguayo@elcomercioparaguayo.com.py" target="_blank">elcomercioparaguayo@elcomercioparaguayo.com.py</a></span></div></td>
                        </tr>
                    </table></td>
            </tr>
            <tr>
                <td height="46" align="center" valign="top" background="images/img_fondo_pie2.png"><table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="25" valign="bottom"><table width="78" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="78" class="datos_pie"><div class="link_mail"><a href="http://www.w3.com.py/" target="_blank">W3 IT Solutions</a></div></td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table></td>
            </tr>

        </table>
        <div id="imagen_bancard"><a href="https://www.bancard.com.py/webbancard/SOL/SelloECommBancard.html?c=rO7x6h.bVEGMA"><img src="images/logo_bancard.jpg" alt="bancard" width="224" height="89" /></a></div>
    </body>
    <!-- InstanceEnd -->
</html>
