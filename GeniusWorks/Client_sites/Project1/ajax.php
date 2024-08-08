<?php
include_once'usuarios.class.php';

$usuario = new Usuarios();

$type = $_GET['type'];

switch ($type) {
    
    case 1:
        echo json_encode($usuario->buscarUsuario($_GET['term']));
    break;
    
    case 2:
?>

<label for="nombre_usuario">Nombre: </label><br/>
<input type="text" id="nombre_usuario" name="nombre_usuario" /><br/>

<label for="nombre_usuario">Nombre de usuario: </label><br/>
<input type="text" id="usrname" name="usrname" /><br/>

            
<?php
    break;

    case 3:
    break;

    default:
    break;
}



?>
