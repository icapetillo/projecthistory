<? 
include("connect.php");
$sql = "SELECT * FROM Alumnos WHERE memberid = $member";
$datos = mysql_query($sql) or die (mysql_error());
$fila = mysql_fetch_array($datos);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />
        <link rel="stylesheet" type="text/css" href="css/equipo.css" />
        <title>SIPRE</title>
    </head>
    <body>
        <div id="contenedor">
            <div id="top_bar">
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="equipo.php">Eq. Educador</a></li>
                        <li><a href="tutorgrupal.php">Tutor grupal</a></li>
                        <li><a href="preceptorias.php">Preceptorias</a></li>
                        <li><a href="capacitacion.php">Capacitacion</a></li>
                        <li><a href="alumnos.php">Alumnos</a></li>
                        <li><a href="acceso.php">Ingresar</a></li>
                    </ul>
                </div>
                <div id="logo_conalep"><img src="img/logoconalep.png" border="0" align="absmiddle"/>Conalep Celaya</div>
            </div>
            <div class="contenido internas">
                <div id="main">
                    <table width="1020px" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td colspan="4" height="60px">
                                <div class="menu_equipo">
                                    <ul>
                                        <li><a href="equipo.php">Alumnos</a></li>
                                        <li><a href="tutor.php">Tutor de grupo</a></li>
                                        <li><a href="academico.php">Académico</a></li>
                                        <li><a href="reportes.php">Reportes</a></li>
                                    </ul>
                                </div>
                            </td>                            
                        </tr>
                        <tr height="400px">
                            <td width="220px" align="center">
                                <div class="submenu">
                                    <div class="submenu title">Alumnos</div>
                                    <br><div class="submenu item_actual">Consulta general</div>
                                    <br><a href="alumnos_preceptor.php"  class="submenu item">Preceptor</a>
                                    <br><a href="alumnos_gral.php"  class="submenu item">Generalidades</a>
                                    <br><a href="alumnos_asigna_precep.php"  class="submenu item">Asignar preceptor</a>
                                </div>
                            </td>
                            <td width="200px">
                                <div id="foto"><? echo "<img src='img/alumnos/".$fila["Foto"]."''>"; ?></div>
                                <div id="datos">
                                    <br><? echo $fila["Nombre"] + " " + $fila["Ap_Paterno"] + " " $fila["Ap_Materno"]; ?>
                                    <br>Edad:<br>
                                    <br>Semestre: <? echo $fila["Grupo"]; ?><br>
                                    <br>Especialidad:<? echo $fila["Especialidad"]; ?><br>
                                    <br>Turno:<br>
                                    <br><br>Contacto:<? echo $fila["Tutor_Padre"]; ?><br>
                                    <br>Teléfono:<? echo $fila["Telefono"]; ?><br>
                                    
                                </div>
                            </td>
                            <td width="400px">
                                <span class="labels">Familiar:</span>
                                <br><div class="data_box small"></div><br>
                                <span class="labels">Social:</span>
                                <br><div class="data_box small"></div><br>
                                <span class="labels">Académico:</span>
                                <br><div class="data_box small"></div>
                            </td>
                            <td width="200px">
                                <div class="search_box">
                                    <span class="labels">Buscar:</span>
                                    <!--insertar aqui formulario de busqueda-->
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="sub_bar">
                Electromecánica - Mantenimiento Automotriz - Sistemas electrónicos - Contabilidad
            </div>
            <div id="noticias">
                
            </div>
            <div id="footer">
                Copyright &copy; Conalep Celaya, 2012. Todos los derechos reservados.
            </div>
        </div>        
    </body>
</html>
