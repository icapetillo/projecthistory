function validarDatos(){
//Validar nombre
	if (document.regusuario.nombre.value.length == 0){
		alert('Escribe tu nombre, por favor.')
		document.contacto.nombre.focus()
		return 0;
	}
//Validar email
	if (document.regusuario.email.value.length == 0){
		alert('Escribe tu direcci�n de correo electr�nico, por favor.')
		document.contacto.email.focus()
		return 0;
	}

	correo = document.regusuario.email.value;
	if (!/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(correo)){
		alert('Tu direcci�n de correo electr�nico no es v�lida. Rev�sala por favor.')
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

//Validar contrase�as
	if (document.regusuario.pass1.value.length == 0){
		alert('Escribe tu contrase�a para acceder al sitio, por favor.')
		document.contacto.pass1.focus()
		return 0;
	}

	if (document.regusuario.pass2.value.length == 0){
		alert('Escribe una vez m�s tu contrase�a para acceder al sitio para verificarla.')
		document.contacto.pass2.focus()
		return 0;
	}

	if(document.regusuario.pass1.value != document.regusuario.pass2.value){
		alert('Tus contrase�as no coinciden, por favor verif�calas.')
		return 0;
	}

	document.regusuario.submit();

}
