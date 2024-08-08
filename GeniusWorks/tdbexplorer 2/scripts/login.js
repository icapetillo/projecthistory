$(document).ready(function(){	
    $("#login").click(function(){
       username=$("#uname").val().trim();
       password=$("#pass").val().trim();
       if (username === "" || password === ""){
           $("#errors").html("Ingresa tu nombre de usuario y tu contraseña");
           $("#errors").removeAttr("hidden");
       }			
       else{			
           $.ajax({
                type: "POST",
                url: "scripts/login.php",
                data: "uname="+username+"&pass="+password,
                success: function(data){
                   if (data == "1"){					
                       window.location='main.php';	
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