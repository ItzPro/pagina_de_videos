//---------------------------------------------------------------------------------------------------------------------------------------
//--Guardar---------------------------------------------------------------------------------------------------------------------

function guardar() {
    var formData = new FormData($("#nuevo_registro")[0]);
    if ($("#correo").val() == ""
        || $("#nombre").val() == ""
        || $("#contrasena").val() == "") {
        alert('alguno de los campos estan vacios')
    } else {

        $.ajax({
            url: "../../controller/registro.php?op=guardar",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                console.log("datos guardados")

                $('#nuevo_registro')[0].reset();
                window.location.href = "../login/login.php";


            }
        });

    }/* Fin del else */
}