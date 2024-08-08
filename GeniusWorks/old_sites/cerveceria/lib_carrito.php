<?
class carrito {
	//atributos de la clase
   	var $num_productos;
   	var $array_id_prod;
   	var $array_nombre_prod;
   	var $array_precio_prod;

	//constructor. Realiza las tareas de inicializar los objetos cuando se instancian
	//inicializa el numero de productos a 0
	function carrito () {
   		$this->num_productos=0;
	}
	
	//Introduce un producto en el carrito. Recibe los datos del producto
	//Se encarga de introducir los datos en los arrays del objeto carrito
	//luego aumenta en 1 el numero de productos
	function introduce_producto($id_prod,$nombre_prod,$precio_prod){
		$this->array_id_prod[$this->num_productos]=$id_prod;
		$this->array_nombre_prod[$this->num_productos]=$nombre_prod;
		$this->array_precio_prod[$this->num_productos]=$precio_prod;
		$this->num_productos++;
	}

	//Muestra el contenido del carrito de la compra
	//ademas pone los enlaces para eliminar un producto del carrito
	function imprime_carrito(){
		$suma = 0;
		echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
            <input type="hidden" name="cmd" value="_cart"> 
            <input type="hidden" name="upload" value="1"> 
            <input type="hidden" name="business" value="lesbrasseursbnl@hotmail.com"> ';
		echo '<table width="550" border=0 cellpadding="3" class="tabla_carrito">
			  <tr class="titulo_tabla">
				<td colspan="2"><b>Description du produit</b></td>
				<td><b>Sous total</b></td>
				<td><b>Supprimer</b></td>
			  </tr>';
		$cont=1;
		for ($i=0;$i<$this->num_productos;$i++){
			if($this->array_id_prod[$i]!=0){
				//Determinar la imagen a mostrar y el enlace que le corresponde
				if (ereg("Blonde",$this->array_nombre_prod[$i])){
					$imagen="images/blonde_cart.png";
					$enlace="produits.html";
					}
				if (ereg("Cerises",$this->array_nombre_prod[$i])){
					$imagen="images/cerises_cart.png";
					$enlace="cerises.html";
					}
				if (ereg("India",$this->array_nombre_prod[$i])){
					$imagen="images/india_cart.png";
					$enlace="india.html";
					}
				echo '<tr class="filas_carrito">';
				echo '<td><a href="'.$enlace.'"><img src="'. $imagen .'" border=0 /></a></td>';
				echo "<td align='left'>" . $this->array_nombre_prod[$i] . "<input type='hidden' name='item_name_". $cont ."' value='" . $this->array_nombre_prod[$i] . "'></td>";
				echo "<td align='center'> C$" . $this->array_precio_prod[$i] . "<input type='hidden' name='amount_". $cont ."' value='" . $this->array_precio_prod[$i] . "'></td>";
				echo "<td><a href='eliminar_producto.php?linea=$i'><img src='images/delete.png' border='0'></a></td>";
				echo '</tr>';
				$suma += $this->array_precio_prod[$i];
				$cont++;
			}
		}
		//muestro el total
		echo "<tr class='total_carrito'><td colspan='2'><b>TOTAL: </b></td><td> <b>C$ $suma</b></td><td>&nbsp;</td></tr>";
		echo "<tr><td colspan='2' align='left'><a href='produits.html'><img src='images/continuer.png' border='0'></a></td><td colspan='2' align='right'><input type='image' src='images/checkout.png'></td></tr>";
		echo "</table>";
		echo '</form> ';
	}
	
	//elimina un producto del carrito. recibe la linea del carrito que debe eliminar
	//no lo elimina realmente, simplemente pone a cero el id, para saber que esta en estado retirado
	function elimina_producto($linea){
		$this->array_id_prod[$linea]=0;
	}
} 
//inicio la sesión
session_start();
//si no esta creado el objeto carrito en la sesion, lo creo
if (!isset($_SESSION["ocarrito"])){
	$_SESSION["ocarrito"] = new carrito();
}
?>