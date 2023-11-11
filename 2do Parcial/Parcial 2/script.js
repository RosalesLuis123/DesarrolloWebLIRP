function inicio(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET",``, true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    actualizarMensaje()
}
function cargarTabla() {
    var contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    
    ajax.open('GET', 'Pregunta 2.html', true);
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    
    ajax.setRequestHeader('Content-Type', 'text/html; charset=utf-8');
    ajax.send();
    actualizarMensaje()
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
        else if (operacion === 'factorial') {
            for (let j = numero; j <= numero + i; j++) {
                 let factorialResult = 1;
                 for (let k = 1; k <= j; k++) {
                    factorialResult *= k;
                }
                resultado += 'Factorial ' + j + ' = ' + factorialResult + '<br>';}}

    }

     document.getElementById("Resultado").innerHTML = "<table>" + resultado + "</table>";
}
function CargarBotones(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `botones.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    actualizarMensaje()
}
function CargarFormulario(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `formulario.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    actualizarMensaje()
}
function getCuadros(){
    let n = document.getElementById('n').value
    fetch(`introducir.php?n=${n}`)
    .then(response => response.text())
    .then(data => principal.innerHTML = data);
}
function calcular(){
    let cuadros = document.querySelectorAll('.cuadro')
    var suma = 0
    cuadros.forEach(cuadro => {
        suma += parseInt(cuadro.value)
    });
    sumar.innerHTML = suma
}
function CargarLista(abrir) {
    var contenedor = document.getElementById('principal');
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
function CargarFormulario2(){
    fetch("forminserar.html")
    .then(response => response.text())
    .then(data => principal.innerHTML = data);
    actualizarMensaje()
}
function getForm(){
    let n = document.getElementById('n').value
    fetch(`form-insertarmasivo.php?n=${n}`)
    .then(response => response.text())
    .then(data => principal.innerHTML = data);
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
        cargarContenido('listar.php');
    })
}

function cargarContenido(abrir) {
    var contenedor = document.getElementById('principal');
    fetch(abrir)
    .then(response => response.text())
    .then(content => {
        contenedor.innerHTML = content;
        ejecutarScriptsDirectamente(contenedor);
    })
}
function CargarCalendario(){
    fetch("seleccionar.html")
    .then(response => response.text())
    .then(data => principal.innerHTML = data);
    actualizarMensaje()
}
function actualizarCalendario() {
    var ajax = new XMLHttpRequest();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        document.getElementById("resultado").innerHTML = this.responseText;
      }
    };
  
    var mes = document.getElementById("mes").value;
    var anio = document.getElementById("anio").value;
  
    ajax.open("GET", "calendario.php?mes=" + mes + "&anio=" + anio, true);
    ajax.send();
}
function actualizarMensaje() {
    const mensajeElement = document.getElementById('mensaje');
    mensajeElement.innerText = `35-5256,Luis Ignacio Rosales Palma`;
}