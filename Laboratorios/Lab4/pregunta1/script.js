document.addEventListener("DOMContentLoaded", function () {
    const Mostrar = document.getElementById("Mostrar");
    const listaDiv = document.getElementById("lista");

    Mostrar.addEventListener("click", function () {
        fetch('lista.php')
            .then(response => response.json())
            .then(data => {
                const tabla = document.createElement("table");
                tabla.innerHTML = "<tr><th>Nro</th><th>Apellidos-Nombres</th><th>Edad</th><th>Materia</th><th>Nota</th></tr>";

                data.forEach(dato => {
                    const fila = document.createElement("tr");
                    fila.innerHTML = `
                        <td>${dato.Nro}</td>
                        <td>${dato.Apellidos}</td>
                        <td>${dato.Edad}</td>
                        <td>${dato.Materia}</td>
                        <td>${dato.Not}</td>
                    `;

                    tabla.appendChild(fila);
                });

                listaDiv.innerHTML = '';
                listaDiv.appendChild(tabla);
            });
    });
});