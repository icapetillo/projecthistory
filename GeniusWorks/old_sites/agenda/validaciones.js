function validar_grabar(){
//Validar que no esté vacío el campo de nombre
	if (document.contacto.nombre.value.length == 0){
		alert('Escribe un nombre, por favor.');
		document.contacto.nombre.focus();
		return 0;
	}

//Validar que no esté vacío el campo de dirección
	if (document.contacto.direccion.value.length == 0){
		alert('Escribe una dirección, por favor.');
		document.contacto.direccion.focus();
		return 0;
	}

//Validar el teléfono
	tel = document.contacto.telefono.value;
	if (!/^[0-9]{2,3}-? ?[0-9]{6,7}$/.test(tel)){
		alert('Escriba un número de teléfono válido');
		document.contacto.telefono.focus();
		return 0;
	}

//Validar el correo electrónico
	correo = document.contacto.email.value;
	if (!/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(correo)){
		alert('Escriba una dirección de correo electrónico válida');
		document.contacto.email.focus();
		return 0;
	}
	
//Revisar que haya una nota escrita
	if (document.contacto.notas.value.length == 0){
		alert('Por favor escriba una nota.');
		document.contacto.notas.focus();
		return 0;
	}
	
	document.contacto.submit();
}


function validar_buscar(){
//Validar que no esté vacío el campo de nombre
	if (document.busqueda.buscar.value.length == 0){
		alert('Escribe un nombre para buscar, por favor.');
		document.busqueda.buscar.focus();
		return 0;
	}

	document.busqueda.submit();
}
