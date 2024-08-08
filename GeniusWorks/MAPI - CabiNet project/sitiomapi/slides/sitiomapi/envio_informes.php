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

echo "No se ha ingresado una direcci�n de e-mail.";
exit();
}

/* aqu� se especifica la pagina de respuesta en caso de env�o exitoso */
$respuesta="contacto_resp.html";


/* AQUI ESPECIFICAS EL SUJETO DEL EMAIL */
$sujeto = "Solicitud de Informes desde Sitio Web MAPI";

// la respuesta escrita anteriormente es un archivo llamado respuesta.htm que se encuentra...
// ...en la misma carpeta que la p�gina del formulario y el archivo .php (puedes usar como...
// ...respuesta un link externo ejemplo: http://www.google.com)

/* AQU� ESPECIFICAS EL CORREO AL CUAL QUIERES QUE SE ENV�EN LOS DATOS
DEL FORMULARIO, SI QUIERES ENVIAR LOS DATOS A M�S DE UN CORREO,
LOS PUEDES SEPARAR POR COMAS */
$para ="apoyo_admvo@mapi.edu.mx, direccion@mapi.edu.mx";

//"apoyo_admvo@mapi.edu.mx, direccion@mapi.edu.mx";

/* aqu� se construye el encabezado del correo (puedes dejarlo sin modificar)*/ 
$encabezado = "De: $nombre <$email>";
$encabezado .= "\nResponder a: $email"; 
$encabezado .= "\nX-Mailer: PHP/" . phpversion();

/* con esto se captura la IP del que env�o el mensaje (la ip del usuario que envia los datos) */
$ip=$REMOTE_ADDR;

/* las siguientes l�neas arman el mensaje */
// lo que est� en may�sculas aparecer� en su mensaje y lo que est� despues del signo = es lo que escribi� en el campo con el nombre.
// aparecer� mas o menos as� en el email: NOMBRE = aqu� el nombre que escriban en el formulario.

$mensaje .= "NOMBRE DEL PAP� = $nombre_papa\n";
$mensaje .= "NOMBRE DEL NI�O(A) = $nombre_nino\n";
$mensaje .= "EDAD = $edad\n";
$mensaje .= "DIRECCI�N = $direccion\n";
$mensaje .= "GRADO AL QUE ASPIRA= $grado\n";
$mensaje .= "TELEFONO = $telefono\n";
$mensaje .= "E-MAIL = $email\n";
$mensaje .= "�C�MO SE ENTER� DE MAPI? = $entero\n";
$mensaje .= "MENSAJE = $comentario\n";
$mensaje .= "IP = $ip\n";

/* aqui se intenta enviar el correo, si no se
tiene �xito se da un mensaje de error */
if(!mail($para, $sujeto, $mensaje, $encabezado))
{
echo "<h1>No se pudo enviar tu mensaje</h1>";
exit();
}
else
{
/* aqu� redireccionamos a la pagina de respuesta, tienes que cuidar cambiar la direcci�n en las 2 partes del archivo (linea 52 y 93) */

$respuesta="contacto_resp.html";

echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}

?>