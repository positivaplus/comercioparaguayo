<?php
function leer_archivo($archivo)
{
    //Abrimos el archivo y leemos su contenido
    $fp = fopen($archivo,"r"); 
    $contador = fgets($fp, 26); 
    fclose($fp);
    return ($contador) ;

}

function escribir_archivo($archivo, $texto)
{
    $contador= $texto;
    //Actualizamos el archivo con el nuevo valor
    $fp = fopen($archivo,"w+"); 
    fwrite($fp, $contador, 26); 
    fclose($fp);
    return true;
}

?>