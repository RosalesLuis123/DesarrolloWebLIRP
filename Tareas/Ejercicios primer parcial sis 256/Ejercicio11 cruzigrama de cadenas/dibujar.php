<?php
class Examen {
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }

    public function cruzar() {
        echo "<h2>Resultado:</h2>";

        $c1_array = str_split($this->cadena1);
        $c2_array = str_split($this->cadena2);

        // Encontrar la letra en común
        $common_letter = null;
        foreach ($c1_array as $c1_char) {
            if (in_array($c1_char, $c2_array)) {
                $common_letter = $c1_char;
                break;
            }
        }

        if ($common_letter !== null) {
            echo "<table border='1' style='border-collapse: collapse;'>";
            
            // Mostrar la cadena 2 en vertical
            foreach ($c2_array as $c2_char) {
                echo "<tr>";
                foreach ($c1_array as $c1_char) {
                    if ($c1_char == $common_letter) {
                        echo "<td style='background-color: lightblue; color: white;'>$c2_char</td>";
                    } elseif ($c2_char == $common_letter) {
                        echo "<td style='background-color: lightblue; color: white;'>$c1_char</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No hay caracteres en común.";
        }
    }
}

if (isset($_POST['cadena1']) && isset($_POST['cadena2'])) {
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];

    $examen = new Examen($cadena1, $cadena2);
    $examen->cruzar();
}
?>
