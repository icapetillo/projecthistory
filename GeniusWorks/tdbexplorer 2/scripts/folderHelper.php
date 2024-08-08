<?php

include_once("connect.php");

//Get list of folder names and icons
function getFolderDetails() {  

    $sql = "SELECT nombre, icono FROM carpetas";

    $res = mysql_query($sql);

    while ($row = mysql_fetch_array($res)) {
        $folders[] = array (
            "nombre" => $row["nombre"],
            "icono" => $row["icono"]
        );
    }

    return $folders;
}

function getFolderPermissions($userid) {

    $sql = "SELECT carpetas.nombre FROM permisos, carpetas WHERE carpetas.id = permisos.idcarpeta AND permisos.idusuario=$userid";

    $res = mysql_query($sql);

    while ($row = mysql_fetch_array($res)) {
        $permisos[] = array (
            "nombre" => $row["nombre"]
        );
        //echo $row["nombre"];
    }

    return $permisos;
}

?>