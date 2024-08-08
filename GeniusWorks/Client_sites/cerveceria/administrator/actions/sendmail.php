<?
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$coment = $_POST["comentario"];

$respuesta="../../contact_resp.html";
$sujeto = "Contact sur ​​le site Web";

$para ="lesbrasseursbnl@hotmail.com, israel.capetillo@live.com.mx";

$encabezado = "De: $nombre <$email>";
$encabezado .= "\nRépondre à: $email";


$ip=$REMOTE_ADDR;

$mensaje .= "Le visiteur $nombre ($email) a envoyé le message suivant: \n\n";
$mensaje .= "Message = $coment \n\n";
$mensaje .= "S'il vous plaît répondez à l'adresse suivante: $email";


/* aqui se intenta enviar el correo, si no se
tiene éxito se da un mensaje de error */
if(!mail($para, $sujeto, $mensaje, $encabezado))
{
echo "<h1>Votre message n'a pas pu être envoyés en raison d'une erreur inconnue. S'il vous plaît réessayer plus tard.</h1>";
exit();
}
else
{
echo "<meta HTTP-EQUIV='refresh' content='1;url=$respuesta'>";
}

?>
