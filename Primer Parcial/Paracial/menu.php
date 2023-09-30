<?php

class Calculadora {
    private $a;
    private $b;
    
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }
    
    public function calcularS() {
        $resultado = $this->a + $this->b;
        return $resultado;
    }

    public function calcularR() {
        $resultado = $this->a - $this->b;
        return $resultado;
    }

    public function calcularD() {
        $resultado = $this->a / $this->b;
        return $resultado;
    }

    public function calcularM() {
        $resultado = $this->a * $this->b;
        return $resultado;
    }
}

if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    
    $calculadora = new Calculadora($a, $b); 

    switch ($opcion) {
        case 'multiplicacion':
            $resultados = $calculadora->calcularM();
            break;
        case 'division': 
            $resultados = $calculadora->calcularD();
            break;
        case 'suma':
            $resultados = $calculadora->calcularS();
            break;
        case 'resta':
            $resultados = $calculadora->calcularR();
            break;
    }
}

?>

<?php
if (isset($resultados)) {
    echo "<h2>Resultado:<span>$resultados</span></h2>";
}
?>
