<?php
class Pila {
    private $items;
    private $maxTope;

    public function __construct($maxTope) {
        $this->items = array();
        $this->maxTope = $maxTope;
    }

    // ... (otros métodos de la clase Pila)

    // Agregar un método para verificar el tope máximo
    public function verificarTopeMaximo() {
        if ($this->tamano() >= $this->maxTope) {
            throw new Exception("La pila ha alcanzado el tope máximo.");
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maxTope = intval($_POST["max_tope"]);
    $elementos = explode(",", $_POST["elementos"]);

    // Crear una instancia de la clase Pila con el tope máximo
    $pila = new Pila($maxTope);

    try {
        // Apilar elementos en la pila
        foreach ($elementos as $elemento) {
            $pila->verificarTopeMaximo();
            $pila->apilar(trim($elemento));
        }

        // Realizar operaciones con la pila
        // ... (aquí puedes realizar las operaciones que desees)

        // Ejemplo: Obtener el tamaño de la pila
        $tamano = $pila->tamano();

        echo "Tamaño de la pila: " . $tamano . "<br>";

        // ... (realiza otras operaciones y muestra los resultados)
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
