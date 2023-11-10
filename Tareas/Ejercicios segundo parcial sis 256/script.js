function cargarContenido(abrir) {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function ejecutarScriptsDirectamente(contenedor) {
    var scripts = contenedor.getElementsByTagName('script');
    for (var i = 0; i < scripts.length; i++) {
        try {
            eval(scripts[i].innerHTML);
        } catch (error) {
            console.error('Error ejecutando script:', error);
        }
    }
}
function actualizarImagen() {
    var selectLibros = document.getElementById('selectLibros');
    var divImagen = document.getElementById('divImagen');
    var imagenLibro = document.getElementById('imagenLibro');

    var libroSeleccionado = selectLibros.options[selectLibros.selectedIndex].value;

    // Realizar una solicitud asíncrona al servidor
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'datos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Actualizar la imagen con la respuesta del servidor
            var respuesta = JSON.parse(xhr.responseText);
            divImagen.innerHTML = '<img src="' + respuesta.imagen + '" alt="' + libroSeleccionado + '" id="imagenLibro">';
        }
    };
    xhr.send('libro=' + libroSeleccionado);

    return false;
}

