<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos/portal.css" rel="stylesheet" type="text/css" />
<title>Portal para padres -- Centro Educativo MAPI</title>
</head>

<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="../imagenes/tituloLogin2.png" width="750" height="50" /></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="140" height="400" rowspan="2" valign="top"><form id="form1" name="form1" method="post" action="acceso.php">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="loginForm">
        <tr>
          <td colspan="2">Para obtener la información de su hijo, escriba su número de matrícula y contraseña, tal como le fueron proporcionados por la dirección.</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="75">Matricula:</td>
          <td width="125" align="center"><label>
            <input name="matricula" type="text" id="matricula" size="12" />
          </label></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td width="125" align="center"><input name="password" type="password" id="password" size="12" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label>
            <input type="submit" name="btEnviar" id="btEnviar" value="Obtener datos" />
          </label></td>
          </tr>
      </table>
    </form></td>
    <td width="10" rowspan="2" valign="top">&nbsp;</td>
    <td width="600" align="right" valign="top"><table width="50%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" align="center">Boleta</td>
        <td width="50%" align="center">Tareas encargadas</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="600" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center" class="titulo_boleta">Tabla de avance individual</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr class="encabezados_boleta">
        <td width="150">MATRICULA</td>
        <td width="300">NOMBRE</td>
        <td width="150">PERIODO</td>
      </tr>
      <tr class="datos_alumno">
        <td width="150" height="30">AL001</td>
        <td width="300" height="30">Fernando Gutiérrez Hereida</td>
        <td width="150" height="30">Septiembre 2009</td>
      </tr>
      <tr class="encabezados_boleta">
        <td width="150">GRADO</td>
        <td width="300">GRUPO</td>
        <td width="150">NIVEL</td>
      </tr>
      <tr class="datos_alumno">
        <td width="150" height="30">1</td>
        <td width="300" height="30">A</td>
        <td width="150" height="30">Primaria</td>
      </tr>
    </table>
      <table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr class="titulos_tablas">
          <td width="250" rowspan="2" align="center" valign="middle" bgcolor="#0033CC">Materia</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Cond.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">OyA</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Asist.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Tar.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Part.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Exam.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Total</td>
        </tr>
        <tr class="titulos_tablas">
          <td align="center" valign="middle" bgcolor="#0033CC">10%</td>
          <td height="20" align="center" valign="middle" bgcolor="#0033CC">5%</td>
          <td height="20" align="center" valign="middle" bgcolor="#0033CC">5%</td>
          <td align="center" valign="middle" bgcolor="#0033CC">10%</td>
          <td align="center" valign="middle" bgcolor="#0033CC">2%</td>
          <td height="20" align="center" valign="middle" bgcolor="#0033CC">50%</td>
          <td height="20" align="center" valign="middle" bgcolor="#0033CC">100%</td>
        </tr>
        <tr class="datos_boleta">
          <td width="250" height="20" align="center" valign="middle">Matemáticas</td>
          <td width="50" height="20" align="center" valign="middle">1</td>
          <td width="50" height="20" align="center" valign="middle">0.5</td>
          <td width="50" height="20" align="center" valign="middle">0.5</td>
          <td width="50" align="center" valign="middle">1</td>
          <td width="50" align="center" valign="middle">2</td>
          <td width="50" height="20" align="center" valign="middle">3.5</td>
          <td width="50" height="20" align="center" valign="middle">8.5</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="350" border="0" cellpadding="0" cellspacing="0" class="borde_boleta">
        <tr>
          <td height="20" colspan="2" class="titulos_tablas">Elementos que incluye la tabla de avance:</td>
        </tr>
        <tr>
          <td width="50" class="titulos_tablas">Cond</td>
          <td width="300" class="datos_boleta">Conducta en el aula</td>
        </tr>
        <tr>
          <td class="titulos_tablas">OyA</td>
          <td class="datos_boleta">Orden y aseo personal</td>
        </tr>
        <tr>
          <td class="titulos_tablas">Asist</td>
          <td class="datos_boleta">Asistencias</td>
        </tr>
        <tr>
          <td class="titulos_tablas">Tareas</td>
          <td class="datos_boleta">Tareas entregadas</td>
        </tr>
        <tr>
          <td class="titulos_tablas">Part.</td>
          <td class="datos_boleta">Participación</td>
        </tr>
        <tr>
          <td class="titulos_tablas">Exam.</td>
          <td class="datos_boleta">Examen</td>
        </tr>
        <tr>
          <td class="titulos_tablas">Total.</td>
          <td class="datos_boleta">Calificacion final</td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>