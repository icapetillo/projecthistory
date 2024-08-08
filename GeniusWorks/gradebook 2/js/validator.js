$(document).ready(function() {
		var msg="";
		var elements = document.getElementsByTagName("input");

		for (var i = 0; i < elements.length; i++) {
		   elements[i].oninvalid =function(e) {
				if (!e.target.validity.valid) {
				switch(e.target.id){
					case 'password' : 
					e.target.setCustomValidity("Escriba una contraseña");break;
					case 'uname' : 
					e.target.setCustomValidity("Escriba un nombre de usuario");break;
				default : e.target.setCustomValidity("");break;

				}
			   }
			};
		   elements[i].oninput = function(e) {
				e.target.setCustomValidity(msg);
			};
		} 
		});