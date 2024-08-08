$(document).ready(function(){	
	 $("#login").click(function(){
		username=$("#uname").val();
		password=$("#password").val();
		if (username === "" || password === ""){
			$("#errors").html("Ingresa tu nombre de usuario y tu contraseña");
			$("#errors").removeAttr("hidden");
		}			
		else{			
			$.ajax({
				 type: "POST",
				 url: "php/login.php",
				 data: "uname="+username+"&password="+password,
				 success: function(data){
					if (data == "1"){					
						window.location='pages/index.php';	
					}
					else{
						$("#errors").html("Nombre de usuario o contraseña equivocados");
						$("#errors").removeAttr("hidden");	 
					}
					
				 },
				 failure: function(data){
					$("#errors").html(data);
					$("#errors").removeAttr("hidden");
				 }
			 });	 
		 }
		 
		 return false;
	 });
});