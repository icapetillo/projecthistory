 
/* Coeminza el script del Reloj */
 
function actualizaReloj(){ 
 
/* Capturamos la Hora, los minutos y los segundos */
marcacion = new Date() 
 
/* Capturamos la Hora */
Hora = marcacion.getHours() 
 
/* Capturamos los Minutos */
Minutos = marcacion.getMinutes() 
 
/* Capturamos los Segundos */
Segundos = marcacion.getSeconds() 
 
/* Si la Hora, los Minutos o los Segundos
Son Menores o igual a 9, le añadimos un 0 */
 
if (Hora<=9)
Hora = "0" + Hora
 
if (Minutos<=9)
Minutos = "0" + Minutos
 
if (Segundos<=9)
Segundos = "0" + Segundos
 
/* Termina el Script del Reloj */
 
 
/* Coemienza eñ Script de la Fecha */
 
var Dia = new Array("Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "S&aacute;bado", "Domingo");
var Mes = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var Hoy = new Date();
var Anio = Hoy.getFullYear();
var Fecha = "Hoy es " + Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio + ", a las ";
 
/* Termina el script de la Fecha */
 
 
/* Creamos 4 variables para darle formato a nuestro Script */
var Inicio, Script, Final, Total
 
/*En Inicio le indicamos un color de fuente y un tamaño */
Inicio = ""
 
/* En Reloj le indicamos la Hora, los Minutos y los Segundos */
Script = Fecha + Hora + ":" + Minutos + ":" + Segundos
 
/* En final cerramos el tag de la fuente */
Final = ""
 
/* En total Finalizamos el Reloj uniendo las variables */
Total = Script
 
/* Capturamos una celda para mostrar el Reloj */
document.getElementById('Fecha_Reloj').innerHTML = Total
 
/* Indicamos que nos refresque el Reloj cada 1 segundo */
setTimeout("actualizaReloj()",1000) 
}

