<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include('conexion.php');

$datos=mysql_query("SELECT * FROM semp_alumnos WHERE id_alumno=$id_alumno");
if (mysql_num_rows($datos)>0){
$fila=mysql_fetch_array($datos);
}
else{
echo "No se encontró el usuario";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
</head>

<body style="margin-top:0; margin-left:0; margin-right:0;">

<!--barra superior-->
<div id="barraSup" class="barraSup">
<table width="800" valign="middle" align="center" cellpadding="0" cellspacing="0">
	<tr heigth="40">
	<td width="30%" align="left" class="logo">[ cabinet ]</td>
	<td width="70%" align="right" class="usuario">Bienvenido, <? echo $usuario; ?><br><a href="index.php" class="loginstatus">cerrar sesión</a></td>
	</tr>
</table>
</div>

<!--contenido-->
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td bgcolor="#FFC71F">&nbsp;</td></tr>
<tr><td bgcolor="#FFC71F" width="150">&nbsp;</td><td width="650" align="right" class="secciones">[ Administración de Alumnos ]</td></tr>
  <tr valign="top">
	<td width="150" rowspan="2" bgcolor="#FFC71F">
	<table width="130" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td height="30" class="secciones">Acciones</td>
	      </tr>
	      <tr>
	        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/add.png" alt="" width="16" height="16" /><a href="registraralumnos.php" class="controles">Agregar...</a></span></td>
	      </tr>
	      <tr><td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/search.png" alt="" width="16" height="16" /><a href="buscaralumnos.php" class="controles">Buscar...</a></span></td>
	      </tr>
	      <tr><td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/back.png" width="16" height="16" /><a href="admonalumnos.php" class="controles">Volver al menú</a></td>
	      </tr>
	      <tr><td valign="middle">&nbsp;</td>
      	      </tr>
	</table>
	</td>
	<td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_alumno.php">
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="right"><big>[ Datos de alumnos ]</big></td>
        </tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
        <tr>
          <td colspan="3" align="left" class="textos">A continuación se muestran los datos del alumno de <em><strong>MAPI</strong></em> que ha seleccionado. Puede editar estos datos o incluso borrar el registro del alumno.</td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Apellido Paterno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApPat" type="text" id="txApPat" size="30" value="<? echo utf8_encode($fila['appaterno']); ?>" />
            </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Apellido Materno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApMat" type="text" id="txApMat" size="30" value="<? echo utf8_encode($fila['apmaterno']); ?>" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Nombre(s):</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txNombres" type="text" id="txNombres" size="30" value="<? echo utf8_encode($fila['nombres']); ?>" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Nivel:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <select name="nivel" class="controles" id="nivel">
                  <option value="0">--Seleccione un nivel--</option>
                  <option value="1" <? if ($fila['nivel']=="1") echo "selected";  ?> >Maternal</option>
                  <option value="2" <? if ($fila['nivel']=="2") echo "selected";  ?> >Preescolar</option>
              </select>
              </label>
            </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Grupo:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <select name="grupo" class="controles" id="grupo">
                <option value="0">--MATERNAL--</option>
                <option value="A" <? if ($fila['grupo']=="A") echo "selected";  ?> >A</option>
                <option value="B1" <? if ($fila['grupo']=="B1") echo "selected";  ?> >B1</option>
                <option value="B2" <? if ($fila['grupo']=="B2") echo "selected";  ?>>B2</option>
                <option value="1">--PREESCOLAR--</option>
                <option value="FANTASIA" <? if ($fila['grupo']=="FANTASIA") echo "selected";  ?> >FANTASIA</option>
                <option value="SILVESTRE" <? if ($fila['grupo']=="SILVESTRE") echo "selected";  ?> >SILVESTRE</option>
                <option value="NEWTON" <? if ($fila['grupo']=="NEWTON") echo "selecteed";  ?> >NEWTON</option>
                <option value="EINSTEIN" <? if ($fila['grupo']=="EINSTEIN") echo "selected";  ?> >EINSTEIN</option>
				 <option value="PRINCIPITO" <? if ($fila['grupo']=="PRINCIPITO") echo "selected";  ?> >PRINCIPITO</option>
				  <option value="CASCANUECES" <? if ($fila['grupo']=="CASCANUECES") echo "selected";  ?> >CASCANUECES</option>
				 
                <option value="N/A" <? if ($fila['grupo']=="N/A") echo "selected";  ?> >N/A</option>              
              </select>
            </label>
          </span></td>
        </tr>
	<tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380">&nbsp;</td>
        </tr>
        <tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="button" type="button" onclick="if (confirm('¿Seguro que desea eliminar a este alumno? Esta acción NO se puede deshacer.')){ this.form.action='borrar_alumno.php'; this.disabled=true; this.value='Eliminando...'; this.form.submit() }" class="botones" id="button" value="Eliminar alumno" />
		<input name="button" type="button" onclick="if (confirm('¿Seguro que desea guardar los cambios?')) { this.form.action='actualizar_alumno.php'; this.disabled=true; this.value='Guardando cambios...'; this.form.submit() }" class="botones" id="button" value="Actualizar datos" />
          </span></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<!--termina contenido-->

</body>
</html>
