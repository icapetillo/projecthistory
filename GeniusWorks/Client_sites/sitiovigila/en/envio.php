<?
/* aqui se incializan variables de PHP */
if (phpversion() >= "4.2.0") {
if ( ini_get('register_globals') != 1 ) {
$supers = array('_REQUEST',
'_ENV',
'_SERVER',
'_POST',
'_GET',
'_COOKIE',
'_SESSION',
'_FILES',
'_GLOBALS' );

foreach( $supers as $__s) {
if ( (isset($$__s) == true) && (is_array( $$__s
) == true) ) extract( $$__s, EXTR_OVERWRITE );
}
unset($supers);
}
} else {
if ( ini_get('register_globals') != 1 ) {

$supers = array('HTTP_POST_VARS',
'HTTP_GET_VARS',
'HTTP_COOKIE_VARS',
'GLOBALS',
'HTTP_SESSION_VARS',
'HTTP_SERVER_VARS',
'HTTP_ENV_VARS'
);

foreach( $supers as $__s) {
if ( (isset($$__s) == true) && (is_array( $$__s
) == true) ) extract( $$__s, EXTR_OVERWRITE );
}
unset($supers);
}
}

/* DE AQUI EN ADELANTE PUEDES EDITAR EL ARCHIVO, NO MODIFIQUES NADA DE LO ANTERIOR */

/* lo siguiente reclama si no se ha rellenado un campo, por ejemplo email en el formulario */
if($email=="")
{

echo "No ingresaste tu email";
exit();
}

/* aquí se especifica la pagina de respuesta en caso de envío exitoso */
$respuesta="contacto_resp.html";
// la respuesta escrita anteriormente es un archivo llamado respuesta.htm que se encuentra...
// ...en la misma carpeta que la página del formulario y el archivo .php (puedes usar como...
// ...respuesta un link externo ejemplo: http://www.google.com)

/* AQUÍ ESPECIFICAS EL CORREO AL CUAL QUIERES QUE SE ENVÍEN LOS DATOS
DEL FORMULARIO, SI QUIERES ENVIAR LOS DATOS A MÁS DE UN CORREO,
LOS PUEDES SEPARAR POR COMAS */
$para ="servicioaclientes@seguridadvigila.com, ventas@seguridadvigila.com";

/* AQUI ESPECIFICAS EL SUJETO DEL EMAIL */
$sujeto = "Contacto desde SeguridadVigila.com";

/* aquí se construye el encabezado del correo (puedes dejarlo sin modificar)*/ 
$encabezado = "From: $nombre <$email>";
$encabezado .= "\nReply-To: $email";
$encabezado .= "\nX-Mailer: PHP/" . phpversion();

/* con esto se captura la IP del que envío el mensaje (la ip del usuario que envia los datos) */
$ip=$REMOTE_ADDR;

/* las siguientes líneas arman el mensaje */
// lo que está en mayúsculas aparecerá en su mensaje y lo que está despues del signo = es lo que escribió en el campo con el nombre.
// aparecerá mas o menos así en el email: NOMBRE = aquí el nombre que escriban en el formulario.

$mensaje .= "NOMBRE = $nombre\n";
$mensaje .= "E-MAIL = $email\n";
$mensaje .= "MENSAJE = $comentario\n";
$mensaje .= "IP = $ip\n";

/* aqui se intenta enviar el correo, si no se
tiene éxito se da un mensaje de error */
if(!mail($para, $sujeto, $mensaje, $encabezado))
{
echo "<h1>No se pudo enviar tu mensaje</h1>";
exit();
}
else
{
/* aquí redireccionamos a la pagina de respuesta, tienes que cuidar cambiar la dirección en las 2 partes del archivo (linea 52 y 93) */

$respuesta="contacto_resp.html";

echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}

?>