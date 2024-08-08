$(document).ready(function(e){
    $("#subirArchivo").on('submit', function(e) {
        e.preventDefault();   
        $.ajax({
            url: "upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                alert("Archivo subido con éxito.");
                location.reload();
            }
        });
    });
});