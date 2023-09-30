<?php
    if(isset($_COOKIE["nvisitas"])) {
        $nvisitas = $_COOKIE["nvisitas"];
        $nvisitas++;
    } else {
        $nvisitas = 1;
    }
    setcookie("nvisitas", $nvisitas, time()+3600);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/usfx.png">
            <div class="title">
                <div style="color: red;">UNIVERSIDAD SAN FRANCISCO XAVIER</div>
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <div style="color: blue;">Facultad de tecnologia</div>
                    <div style="color: red;">Sucr<span style="color: yellow;">e-Bol</span><span
                            style="color: green;">ivia</span></div>
                </div>
                <div>Carrera Ing. Sistemas Ing. Ciencias de la Computacion</div>
                <div>Semestre 2-2023</div>
            </div>
            <img src="images/tecnologia.png">
        </div>
        <div class="navbar">
            <div class="option">A</div>
            <div class="option">B</div>
            <div class="option">C</div>
            <div class="option">D</div>
            <div class="option">E</div>
        </div>
        <div class="content">
            <div class="buttons">
                <div class="button_section">
                    <a class="button" href="usfx.html">Inicio</a>
                    <a class="button" href="pregunta2.html">Pregunta 2</a>
                    <a class="button" href="pregunta3.html">Pregunta 3</a>
                    <a class="button" href="pregunta4.html">Pregunta 4</a>
                </div>
            </div>
            <div class="main">
                Bienvenido al
            </div>
            <div class="data">
                <div>Alumno:</div>
                <div>Pimentel Vito</div>
                <div>Carrera:</div>
                <div>Ciencias de la Computacion</div>
                <div>Imagen</div>
                <img src="images/estudiante.png">
            </div>
        </div>
        <div class="footer1">
            Usted ingreso a esta pagina 
            <span style="padding: 0px 5px; border: 1px solid black; background-color: red; height: 100%; margin: 0 10px;">
                <?php echo $nvisitas ?>
            </span> veces
        </div>
        <div class="footer2">
            Año 2023
        </div>
    </div>
</body>
</html>