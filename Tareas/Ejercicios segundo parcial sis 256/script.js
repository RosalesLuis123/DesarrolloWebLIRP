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

function mostrarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;

    if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
        alert('Por favor, introduce números válidos.');
        return;
    }
    var resultado = '';
    for (var i = 1; i <= limite; i++) {
        if (operacion === 'multiplicar') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        } else if (operacion === 'division') {
            resultado += numero + ' / ' + i + ' = ' + (numero / i) + '<br>';
        }
    }
    document.getElementById('Resultado').innerHTML = resultado;
}

function actualizarImagen() {
    var selectLibros = document.getElementById('selectLibros');
    var divImagen = document.getElementById('divImagen');
    var imagenLibro = document.getElementById('imagenLibro');

    var libroSeleccionado = selectLibros.options[selectLibros.selectedIndex].value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'datos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var respuesta = JSON.parse(xhr.responseText);
            divImagen.innerHTML = '<img src="' + respuesta.imagen + '" alt="' + libroSeleccionado + '" id="imagenLibro">';
        }
    };
    xhr.send('libro=' + libroSeleccionado);

    return false;
}

function actualizarUsuario(btn) {
    var idUsuario = btn.getAttribute('data-id');
    var nivelActual = btn.getAttribute('data-nivel');

    var nuevoNivel = (nivelActual == 1) ? 0 : 1;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'listar.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
       
            btn.setAttribute('data-nivel', xhr.responseText);
            btn.innerText = (xhr.responseText == 1) ? 'Cambiar a Usuario' : 'Cambiar a Administrador';

            btn.classList.remove('verde', 'rojo');
            btn.classList.add(xhr.responseText == 0 ? 'verde' : 'rojo');

            var fila = btn.closest('tr');
            var nivelCell = fila.querySelector('.nivel');
            nivelCell.innerText = (xhr.responseText == 1) ? 'Administrador' : 'Usuario';
        }
    };
    xhr.send('id=' + idUsuario + '&nivel=' + nuevoNivel);

    return false;
}
function cargarTabla() {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    
    ajax.open('GET', 'tabla.html', true);
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    
    ajax.setRequestHeader('Content-Type', 'text/html; charset=utf-8');
    ajax.send();
}


function generarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;

    if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
        alert('Por favor, introduce números válidos.');
        return;
    }
    var resultado = '';
    for (var i = 1; i <= limite; i++) {
        if (operacion === 'multiplicar') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        } else if (operacion === 'division') {
            resultado += numero + ' / ' + i + ' = ' + (numero / i) + '<br>';
        }
    }
    document.getElementById('Resultado').innerHTML = resultado;
}
function actualizarMensajeTresEnRaya(turno) {
    const mensajeElement = document.getElementById('mensaje');
    mensajeElement.innerText = `Turno: ${turno}`;
}
