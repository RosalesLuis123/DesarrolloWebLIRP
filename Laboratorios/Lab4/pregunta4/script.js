document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.getElementById("loginButton");
    const resultDiv = document.getElementById("result");

    loginButton.addEventListener("click", mostrarContenido);

function mostrarContenido() {
    fetch("login.html")
        .then(response => response.text())
        .then(data => {
            const resultDiv = document.getElementById("result");
            resultDiv.innerHTML = data;
            Mensaje();
        })
}

    function Mensaje() {
        const loginForm = document.getElementById("loginForm");
        loginForm.addEventListener("submit", function(event) {
            event.preventDefault();
            const formData = new FormData(loginForm);
            fetch("autenticar.php", {
                method: "POST",
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    if (data.autenticado) {
                        resultDiv.innerHTML = "Autenticado correctamente";
                    } else {
                        resultDiv.innerHTML = "No autenticado";
                    }
                })
        });
    }
});
