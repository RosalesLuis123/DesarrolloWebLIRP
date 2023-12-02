// Espera a que el DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
    // Función para realizar el registro mediante AJAX
    function register() {
        // Obtén los datos del formulario
        var nombres = document.getElementById("nombres").value;
        var apellidos = document.getElementById("apellidos").value;
        var email = document.getElementById("email").value;
        var sexo = document.getElementById("sexo").value;

        // Realiza la llamada AJAX
        $.ajax({
            type: "POST",
            url: "registro.php",
            data: {
                nombres: nombres,
                apellidos: apellidos,
                email: email,
                sexo: sexo
            },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    // Registro exitoso
                    alert(response.message);
                    // Puedes redirigir a otra página o realizar otras acciones según tus necesidades
                } else {
                    // Error en el registro
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Manejo de errores
                console.error("Error en la solicitud AJAX: " + error);
            }
        });
    }

    // Agrega eventos a los botones u otros elementos según tu estructura HTML
    document.getElementById("registrarBtn").addEventListener("click", register);
});
