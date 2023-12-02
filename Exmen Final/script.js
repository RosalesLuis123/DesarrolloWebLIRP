function inicio(){
    titulo.innerHTML = `Pregunta 1`
    contenido.innerHTML = `<div class="card"><div> <div id="perfil-info">
    <p style="color: #7c83e7;">SIS256 PROGRAMCION WEB</p>
    <p style="color: #7c83e7;">Examen final-02-12-2023 7:00am</p> </div>
    <div id="perfil">
    <img src="foto.jpg" alt="Foto de perfil" class="perfil-img">
    <div class="nombre">Luis Ignacio Rosales Palma</div>
    <div class="carrera">SISTEMAS</div>
    <div class="repo">DesarrolloWebLIRP</div>
    </div></div></div>`
}
function pregunta2(){
    titulo.innerHTML = `Pregunta 2`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `pregunta2.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            sub_menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function pregunta3(){
    titulo.innerHTML = `Pregunta 3`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `pregunta3.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function pregunta4(){
    titulo.innerHTML = `Pregunta 4`
    fetch(`pregunta4.php`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);

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
function listar() {
    fetch(`listar.php`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function atras() {
    fetch(`pregunta4.php`)
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
function pregunta5(){
    titulo.innerHTML = `Pregunta 5`
    fetch(`pregunta5.html`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}
function cambiarColor() {
    var colorSeleccionado = document.getElementById('color').value;
    var divSeleccionado = document.getElementById('divs').value;
    var Cambio = document.getElementById('cambio').value;
    if (Cambio ==='fondo'){ 
    var div = document.getElementById(divSeleccionado);
    if (div) {
    div.style.backgroundColor = colorSeleccionado;
    }}
    else if (Cambio ==='frente'){
    var div = document.getElementById(divSeleccionado);
    if (div) {
    div.style.color = colorSeleccionado;
    }}
    }
    function cargarform(operacion) {
        document.getElementById('contenido').innerHTML = '';
    
        const cantidad = document.getElementById('cantidad').value;
    
        for (let i = 1; i <= cantidad; i++) {
            const exercise = document.createElement('div');
            exercise.textContent = generateExercise(operacion);
            const input = document.createElement('input');
            input.type = 'text';
            input.id = `answer${i}`;
            exercise.appendChild(input);
            document.getElementById('contenido').appendChild(exercise);
        }
    }
    function generateExercise(operacion) {
        let A, B;
    
        A = Math.floor(Math.random() * 10);
        B = Math.floor(Math.random() * 10);
    
        switch (operacion) {
            case 'suma':
                return `${A} + ${B} = `;
            case 'resta':
                return `${A} - ${B} = `;
            case 'multiplicacion':
                return `${A} * ${B} = `;
            case 'division':
                B = (B === 0) ? 1 : B;
                return `${A} ÷ ${B} = `;
            default:
                return 'Invalid operation';
        }
    }
    function calificar() {
       
    }
    