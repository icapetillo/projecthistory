<?php

class Usuarios{
    public function __construct() {
        $dbhost = 'localhost';
        $dbuser = 'geniuswo_master';
        $dbpass = 'israel52';
        $dbname = 'geniuswo_guiasalamanca';
        
        mysql_connect($dbhost, $dbuser, $dbpass);
        
        mysql_select_db($dbname);
    }
    
    public function buscarUsuario($nombreUsuario){
        $datos = array();
        $sql = "SELECT * FROM usuarios 
                WHERE nombre LIKE '%$nombreUsuario%'";
        
        $resultado = mysql_query($sql);
        
        while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
            $datos[] = array("value" => $row['nombre'],
                             "usrname" => $row['usrname']);
            
        }
        
        return $datos;
    }
}

?>
