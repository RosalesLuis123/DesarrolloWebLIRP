<?php
class Examen {
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;

    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularFibonacci() {
        $fibonacci = [];
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;
        for ($i = 2; $i <= $this->n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }

    public function calcularMayor() {
        $numeros = [$this->a, $this->b, $this->c];
        $maximo = max($numeros);
        return "<strong>$maximo</strong>";
    }

    public function mostrarPiramide() {
        $cadena = $this->cadena;
        $cadena_length = strlen($cadena);
        $piramide = '';
        
        // Calcular la altura de la pirámide
        $altura = ($cadena_length % 2 == 0) ? $cadena_length / 2 : ($cadena_length + 1) / 2;
        
        for ($i = 0; $i < $altura; $i++) {
            $espacios = str_repeat(' ', $altura - $i - 1); // Agrega espacios antes de la cadena
            $subcadena = substr($cadena, 0, $i * 2 + 1); // Obtiene la parte de la cadena correspondiente
            $piramide .= $espacios . $subcadena;
            if ($i < $altura - 1) {
                $piramide .= "<br>"; // Agrega un salto de línea después de cada fila
            }
        }
        
        // Agregar la cadena completa en la parte inferior
        $piramide .= "<br>" . $cadena;
        
        return $piramide;
    }
    
    
    
    
    
}

if (isset($_POST['opcion'])) {
    $opcion = $_POST['opcion'];
    $examen = new Examen($_POST['n'], $_POST['cadena'], $_POST['a'], $_POST['b'], $_POST['c']);

    switch ($opcion) {
        case 'fibonacci':
            $resultado = $examen->calcularFibonacci();
            break;
        case 'mayor':
            $resultado = $examen->calcularMayor();
            break;
        case 'piramide':
            $resultado = $examen->mostrarPiramide();
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Examen</title>
</head>
<body>
    <h1>Examen</h1>
    <form method="post">
        <label for="opcion">Seleccione una opción:</label>
        <select name="opcion" required>
            <option value="fibonacci">Fibonacci</option>
            <option value="mayor">Mayor</option>
            <option value="piramide">Pirámide</option>
        </select>
        <br>
        <label for="n">Valor de n (Fibonacci):</label>
        <input type="number" name="n">
        <br>
        <label for="cadena">Cadena (Pirámide):</label>
        <input type="text" name="cadena">
        <br>
        <label for="a">Número a (Mayor):</label>
        <input type="number" name="a">
        <br>
        <label for="b">Número b (Mayor):</label>
        <input type="number" name="b">
        <br>
        <label for="c">Número c (Mayor):</label>
        <input type="number" name="c">
        <br>
        <input type="submit" value="Ejecutar">
    </form>

    <?php
    if (isset($resultado)) {
        echo "<h2>Resultado:</h2>";
        if (is_array($resultado)) {
            echo "<ul>";
            foreach ($resultado as $valor) {
                echo "<li>$valor</li>";
            }
            echo "</ul>";
        } else {
            echo $resultado;
        }
    }
    ?>

</body>
</html>
