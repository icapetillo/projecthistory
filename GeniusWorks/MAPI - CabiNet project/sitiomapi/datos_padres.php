<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="estilos/map.css" rel="stylesheet" type="text/css" />
<title>Ficha de datos de alumnos</title>
</head>

<body>
<form id="ficha" name="ficha" method="post" action="">
  <p class="titulos_ficha">Ficha de datos de alumnos </p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="100" class="etiquetas_ficha">Fecha:</td>
      <!-- Codigo para mostrar la fecha -->
      <td width="100"><? echo date("j/m/Y",time()); ?></td>
      <td width="100" class="etiquetas_ficha">Nivel:</td>
      <td width="100"><select name="nivel" id="nivel">
        <option value="1">Maternal</option>
        <option value="2">Preescolar</option>
        <option value="3">Primaria</option>
      </select></td>
      <td width="100" class="etiquetas_ficha">Grado:</td>
      <td width="100"><select name="grado" id="grado">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select></td>
    </tr>
  </table>
  <p class="titulos_ficha">Datos del alumno</p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="100" class="etiquetas_ficha">Ap. Paterno:</td>
      <td width="200"><input name="appaterno" type="text" id="appaterno" /></td>
      <td width="100" class="etiquetas_ficha">Calle:</td>
      <td width="200"><input type="text" name="calle" id="calle" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Ap. Materno:</td>
      <td width="200"><input type="text" name="apmaterno" id="apmaterno" /></td>
      <td width="100" class="etiquetas_ficha">Número:</td>
      <td width="200"><input type="text" name="numero" id="numero" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Nombre(s):</td>
      <td width="200"><input type="text" name="nombres" id="nombres" /></td>
      <td width="100" class="etiquetas_ficha"><p>Entre calles:</p></td>
      <td width="200"><input type="text" name="entre_calles" id="entre_calles" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Fecha Nac.:</td>
      <td width="200"><input type="text" name="fnac" id="fnac" /></td>
      <td width="100" class="etiquetas_ficha">Colonia:</td>
      <td width="200"><input type="text" name="colonia" id="colonia" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Lugar Nac.:</td>
      <td width="200"><input type="text" name="lnac" id="lnac" /></td>
      <td width="100" class="etiquetas_ficha">Codigo Postal:</td>
      <td width="200"><input name="codpostal" type="text" id="codpostal" maxlength="5" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Nacionalidad:</td>
      <td width="200"><input type="text" name="nacionalidad" id="nacionalidad" /></td>
      <td width="100" class="etiquetas_ficha">Municipio:</td>
      <td width="200"><input type="text" name="municipio" id="municipio" /></td>
    </tr>
    <tr>
      <td width="100" class="etiquetas_ficha">Religión:</td>
      <td width="200"><input type="text" name="religion" id="religion" /></td>
      <td width="100" class="etiquetas_ficha">Teléfono:</td>
      <td width="200"><input type="text" name="telefono" id="telefono" /></td>
    </tr>
    <tr>
      <td colspan="4" class="etiquetas_ficha">Escuela de procedencia:
      <input name="escuela_proc" type="text" id="escuela_proc" size="65" /></td>
    </tr>
    <tr>
      <td colspan="4"><p class="etiquetas_ficha">Padecimientos y/o alergias:<br />
          <textarea name="padecimientos" id="padecimientos" cols="90" rows="5"></textarea>
      </p></td>
    </tr>
  </table>
  <p class="titulos_ficha">Datos de los padres</p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="120">&nbsp;</td>
      <td width="240" align="center" class="etiquetas_ficha">Padre</td>
      <td width="240" align="center" class="etiquetas_ficha">Madre</td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Nombre completo:</td>
      <td width="240" align="center"><input name="nom_padre" type="text" id="nom_padre" size="30" /></td>
      <td width="240" align="center"><input name="nom_madre" type="text" id="nom_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Fecha Nac.:</td>
      <td width="240" align="center"><input name="fnac_padre" type="text" id="fnac_padre" size="30" /></td>
      <td width="240" align="center"><input name="fnac_madre" type="text" id="fnac_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Vive:</td>
      <td width="240" align="center"><select name="vive_padre" id="vive_padre">
        <option value="1" selected="selected">Si</option>
        <option value="0">No</option>
      </select></td>
      <td width="240" align="center"><select name="vive_madre" id="vive_madre">
        <option value="1" selected="selected">Si</option>
        <option value="0">No</option>
      </select></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Escolaridad:</td>
      <td width="240" align="center"><select name="esc_padre" id="esc_padre">
        <option value="1">Primaria</option>
        <option value="2">Secundaria</option>
        <option value="3">Bachillerato</option>
        <option value="4">Licenciatura</option>
        <option value="5">Posgrado</option>
      </select></td>
      <td width="240" align="center"><select name="esc_madre" id="esc_madre">
        <option value="1">Primaria</option>
        <option value="2">Secundaria</option>
        <option value="3">Bachillerato</option>
        <option value="4">Licenciatura</option>
        <option value="5">Posgrado</option>
      </select></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Profesión:</td>
      <td width="240" align="center"><input name="prof_padre" type="text" id="prof_padre" size="30" /></td>
      <td width="240" align="center"><input name="prof_madre" type="text" id="prof_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Ocupación:</td>
      <td width="240" align="center"><input name="ocup_padre" type="text" id="ocup_padre" size="30" /></td>
      <td width="240" align="center"><input name="ocup_madre" type="text" id="ocup_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Empresa:</td>
      <td width="240" align="center"><input name="empresa_padre" type="text" id="empresa_padre" size="30" /></td>
      <td width="240" align="center"><input name="empresa_madre" type="text" id="empresa_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Tel. Casa:</td>
      <td width="240" align="center"><input name="tel_casa_padre" type="text" id="tel_casa_padre" size="30" /></td>
      <td width="240" align="center"><input name="tel_casa_madre" type="text" id="tel_casa_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Tel. Oficina:</td>
      <td width="240" align="center"><input name="tel_oficina_padre" type="text" id="tel_oficina_padre" size="30" /></td>
      <td width="240" align="center"><input name="tel_oficina_madre" type="text" id="tel_oficina_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Tel. Celular:</td>
      <td width="240" align="center"><input name="cel_padre" type="text" id="cel_padre" size="30" /></td>
      <td width="240" align="center"><input name="cel_madre" type="text" id="cel_madre" size="30" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Email:</td>
      <td width="240" align="center"><input name="email_padre" type="text" id="email_padre" size="30" /></td>
      <td width="240" align="center"><input name="email_madre" type="text" id="email_madre" size="30" /></td>
    </tr>
    <tr>
      <td colspan="3" class="etiquetas_ficha">Situación de los padres:
        <select name="sit_padres" id="sit_padres">
          <option value="1" selected="selected">Casados</option>
          <option value="2">Unión Libre</option>
          <option value="3">Separados</option>
          <option value="4">Divorciados</option>
          <option value="5">Soltero(a)</option>
      </select></td>
    </tr>
  </table>
  <p class="titulos_ficha">Hermanos</p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr class="etiquetas_ficha">
      <td width="250" align="center">Nombre</td>
      <td width="100" align="center">Edad</td>
      <td width="250" align="center">Escuela donde estudia</td>
    </tr>
    <tr>
      <td width="250" align="center"><input name="nombre_hermano" type="text" id="nombre_hermano" size="35" /></td>
      <td width="100" align="center"><input name="edad_hermano" type="text" id="edad_hermano" size="10" /></td>
      <td width="250" align="center"><input name="escuela_hermano" type="text" id="escuela_hermano" size="35" /></td>
    </tr>
  </table>
  <p>
    <input type="button" name="agregar" id="agregar" value="Agregar datos de otro hermano" />
  </p>
  <p>&nbsp;</p>
  <p class="titulos_ficha">Datos de las personas autorizadas</p>
  <table width="600" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="120" class="etiquetas_ficha">Nombre completo</td>
      <td width="180"><input type="text" name="nom_autorizado" id="nom_autorizado" /></td>
      <td width="120" class="etiquetas_ficha">Dirección:</td>
      <td width="180"><input type="text" name="dir_autorizado" id="dir_autorizado" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Fecha Nac.</td>
      <td width="180"><input type="text" name="fnac_autorizado" id="fnac_autorizado" /></td>
      <td width="120" class="etiquetas_ficha">Tel. Casa:</td>
      <td width="180"><input type="text" name="telcasa_autorizado" id="telcasa_autorizado" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Escolaridad:</td>
      <td width="180"><select name="esc_autorizado" id="esc_autorizado">
        <option value="1">Primaria</option>
        <option value="2">Secundaria</option>
        <option value="3">Bachillerato</option>
        <option value="4">Licenciatura</option>
        <option value="5">Posgrado</option>
      </select></td>
      <td width="120" class="etiquetas_ficha">Tel. Oficina:</td>
      <td width="180"><input type="text" name="teloficina_autorizado" id="teloficina_autorizado" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Profesión:</td>
      <td width="180"><input type="text" name="prof_autorizado" id="prof_autorizado" /></td>
      <td width="120" class="etiquetas_ficha">Tel. Celular:</td>
      <td width="180"><input type="text" name="cel_autorizado" id="cel_autorizado" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Ocupación:</td>
      <td width="180"><input type="text" name="ocup_autorizado" id="ocup_autorizado" /></td>
      <td width="120" class="etiquetas_ficha">Email:</td>
      <td width="180"><input type="text" name="email_autorizado" id="email_autorizado" /></td>
    </tr>
    <tr>
      <td width="120" class="etiquetas_ficha">Empresa:</td>
      <td width="180"><input type="text" name="emp_autorizado" id="emp_autorizado" /></td>
      <td width="120" class="etiquetas_ficha">Parentesco:</td>
      <td width="180"><input type="text" name="parentesco_autorizado" id="parentesco_autorizado" /></td>
    </tr>
  </table>
  <p>
    <input type="button" name="agregar_aut" id="agregar_aut" value="Agregar datos de otra persona autorizada" />
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="grabar" id="grabar" value="Grabar Ficha de Datos" />
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
