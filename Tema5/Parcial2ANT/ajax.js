document.addEventListener("DOMContentLoaded", function() {
    const libroForm = document.getElementById("libroForm");
    const insertarBtn = document.getElementById("insertarBtn");
    const mensajeDiv = document.getElementById("mensaje");

    insertarBtn.addEventListener("click", function(e) {
        e.preventDefault();
        const formData = new FormData(libroForm);

        fetch("insertar.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            mensajeDiv.textContent = data; // Muestra la respuesta en el elemento "mensaje"
        })
        .catch(error => {
            mensajeDiv.textContent = "Error al realizar la solicitud.";
        });
    });
});
