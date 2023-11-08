document.addEventListener("DOMContentLoaded", function () {
    const elementoInput = document.getElementById("elemento");
    const Añadir = document.getElementById("Añadir");
    const lista = document.getElementById("lista");

    Añadir.addEventListener("click", function () {
        const elemento = elementoInput.value.trim();

        if (elemento !== "") {
            const nuevoElemento = document.createElement("li");
            nuevoElemento.textContent = elemento;

            if (elemento.toLowerCase().includes("de")) {
                nuevoElemento.style.backgroundColor = "yellow";
            }

            lista.appendChild(nuevoElemento);
            elementoInput.value = "";
        }
    });
});
