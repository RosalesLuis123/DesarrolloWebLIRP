<?php
    session_start();
    $voto = $_GET['voto'];
    if(!isset($_SESSION['juan'])){
        $_SESSION['juan'] = 0;
    } else if($voto == 'juan'){
        $_SESSION['juan'] += 1;
    }
    if(!isset($_SESSION['pedro'])){
        $_SESSION['pedro'] = 0;
    } else if($voto == 'pedro'){
        $_SESSION['pedro'] += 1;
    }
    if(!isset($_SESSION['maria'])){
        $_SESSION['maria'] = 0;
    } else if($voto == 'maria'){
        $_SESSION['maria'] += 1;
    } 
    if(!isset($_SESSION['isabel'])){
        $_SESSION['isabel'] = 0;
    } else if($voto == 'isabel'){
        $_SESSION['isabel'] += 1;
    }
    echo "Votos de Juan: $_SESSION[juan] <br>";
    echo "Votos de Pedro: $_SESSION[pedro] <br>";
    echo "Votos de Maria: $_SESSION[maria] <br>";
    echo "Votos de Isabel: $_SESSION[isabel] <br>";
?>