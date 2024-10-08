<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.23.custom.css">
        <link type="text/css" rel="stylesheet" href="css/estilos.css">
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('#buscar_usuario').autocomplete({
                    source : 'ajax.php?type=1',
                    select : function(event, ui){
                        $('#resultados').slideUp('slow', function(){
                           $('#resultados').html(
                                '<h2>Detalles de usuario</h2>' +
                                '<strong>Nombre: </strong>' + ui.item.value + '<br/>' +
                                '<strong>Nombre de usuario: </strong>' + ui.item.usrname
                            );  
                        });
                        
                    $('#resultados').slideDown('slow');
                    }
                });
            });
        </script>
        <title>Ajax1</title>
    </head>
    <body>
        <div id="busqueda">
            <input type="text" id="buscar_usuario" name="buscar_usuario" />
        </div>
        <div id="resultados" >
            
        </div>
    </body>
</html>
