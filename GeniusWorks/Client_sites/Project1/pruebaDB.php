<?php
require 'dbUtils.class.php';
require 'Conf.class.php';

/*Creamos la instancia del objeto. Ya estamos conectados*/
$bd=  dbUtils::getInstance();

/*Creamos una query sencilla*/
$sql='SELECT * FROM usuarios';

/*Ejecutamos la query*/
$stmt=$bd->ejecutar($sql);

/*Realizamos un bucle para ir obteniendo los resultados*/
while ($x=$bd->obtener_fila($stmt,0)){
   echo $x['nombre'].'<br />';
}
?>
