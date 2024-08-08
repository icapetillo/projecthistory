<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script>

function detecta(nombre, oculto){
// Obtener la referencia a la lista
var lista = document.getElementById(nombre);
 
// Obtener el índice de la opción que se ha seleccionado
var indiceSeleccionado = lista.selectedIndex;
// Con el índice y el array "options", obtener la opción seleccionada
var opcionSeleccionada = lista.options[indiceSeleccionado];
 
// Obtener el valor y el texto de la opción seleccionada
var textoSeleccionado = opcionSeleccionada.text;
var valorSeleccionado = opcionSeleccionada.value;

alert("Opción seleccionada: " + textoSeleccionado + "\n Valor de la opción: " + valorSeleccionado);

//Asigno el valor obtenido a un campo oculto
campo_oculto = document.getElementById(oculto)
campo_oculto.value = valorSeleccionado;

}

function asignarValor(c1,c2){
	campo1 = document.getElementById(c1);
	campo2 = document.getElementById(c2);
	
	campo2.value = campo1.value;
	}

function calcular(){
	total=0;
	lista_cant = document.getElementById(cant);
	cantidad = lista.options[lista.selectedIndex].value;
	precio = document.getElementById(precio).value;
	
	total = cantidad * precio;
	
	document.getElementById(total).value=total;
	
	}
</script>
</head>

<body>
<form action="prueba.php" method="post">
<p>
  <input type="hidden" name="h_tipo" id="h_tipo" />
  Tipo:
  <select name="tipo" id="tipo" onchange="detecta('tipo','h_tipo')">
    <option value="Blonde">Blonde</option>
    <option value="Cerises">Cerises</option>
    <option value="India">India</option>
  </select>
</p>
<p>Cantidad:
  <input type="hidden" name="h_cant" id="h_cant" />
  <select name="cant" id="cant" onchange="calcular()">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</p>
<p>Precio:
  <input type="hidden" name="h_precio" id="h_precio" />
  <input type="text" name="precio" id="precio" onchange="calcular()" />
</p>
<p>Total:
  <input type="text" name="total" id="total" />
</p>
<p>
  <input type="hidden" name="c2" id="c2" />
  <input type="submit" value="Enviar" />
</p>
</form>
</body>
</html>