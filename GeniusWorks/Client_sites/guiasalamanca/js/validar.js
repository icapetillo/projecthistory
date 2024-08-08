function validarDatos(){
//Validar nombre
	if (document.regusuario.nombre.value.length == 0){
		alert('Escribe tu nombre, por favor.')
		document.contacto.nombre.focus()
		return 0;
	}
//Validar email
	if (document.regusuario.email.value.length == 0){
		alert('Escribe tu dirección de correo electrónico, por favor.')
		document.contacto.email.focus()
		return 0;
	}

	correo = document.regusuario.email.value;
	if (!/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(correo)){
		alert('Tu dirección de correo electrónico no es válida. Revísala por favor.')
		document.contacto.email.focus()
		return 0;
	}
//Validar fecha de nacimiento
	if (document.regusuario.f_nac.value.length == 0){
		alert('Selecciona tu fecha de nacimiento, por favor.')
		document.contacto.f_nac.focus()
		return 0;
	}
//Validar sexo
	if ((document.regusuario.sexo[0].checked==false) && (document.regusuario.sexo[1].checked==false)){
			alert("Debes seleccionar tu sexo")
			return 0;
	}

//Validar nombre de usuario
	if (document.regusuario.usrname.value.length == 0){
		alert('Escribe tu nombre de usuario, por favor.')
		document.contacto.usrname.focus()
		return 0;
	}

//Validar contraseñas
	if (document.regusuario.pass1.value.length == 0){
		alert('Escribe tu contraseña para acceder al sitio, por favor.')
		document.contacto.pass1.focus()
		return 0;
	}

	if (document.regusuario.pass2.value.length == 0){
		alert('Escribe una vez más tu contraseña para acceder al sitio para verificarla.')
		document.contacto.pass2.focus()
		return 0;
	}

	if(document.regusuario.pass1.value != document.regusuario.pass2.value){
		alert('Tus contraseñas no coinciden, por favor verifícalas.')
		return 0;
	}

	document.regusuario.submit();

}
