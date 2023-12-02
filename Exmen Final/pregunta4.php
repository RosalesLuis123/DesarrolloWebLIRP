<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>

    <title>Document</title>
</head>
<body>
    <div id="opciones">
        <div id="opciones-texto">Lista Alumnos</div>
    </div>
    <div id="botones">
        <button onclick="listar()" class="boton2">Listar</button>
        <button onclick="cargarFormulario()"class="boton2">Insertar</button>

    </div>   
    <script>
function listar() {
    fetch(`listar.php`)
    .then(response => response.text())
    .then(data => sub_menu.innerHTML = data);
}
function cargarFormulario() {
    fetch('formulario.html')
      .then(response => response.text())
      .then(data => {
        document.getElementById('sub_menu').innerHTML = data;
        document.getElementById('insertar').addEventListener('click', insertar);
      });
  }
function insertar() {
    let form = document.getElementById('form');
    let data = new FormData(form);

    fetch('insertar.php', {
        method: 'POST',
        body: data
    })
    .then(response => response.text())
    .then(result => {
        mensaje.innerHTML = result;
        listar();
    })
}
    </script>
</body>
</html>