<?php
session_start();

class Cola {
    private $tipo;
    private $elementos = [];

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function insertarDelante($elemento) {
        if ($this->tipo === 'dobleentrada') {
            array_unshift($this->elementos, $elemento);
        } else {
            echo "Esta cola no admite inserción delante. Tipo: $this->tipo";
        }
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function eliminar() {
        if (!empty($this->elementos)) {
            return array_shift($this->elementos);
        } else {
            echo "La cola está vacía.";
        }
    }

    public function mostrar() {
        return $this->elementos;
    }
}

// Inicializar o recuperar el objeto Cola de la sesión
if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola('Normal');
}

$cola = $_SESSION['cola'];

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'insertarDelante':
            $elemento = $_POST['elemento'];
            $cola->insertarDelante($elemento);
            break;
        case 'insertarDetras':
            $elemento = $_POST['elemento'];
            $cola->insertarDetras($elemento);
            break;
        case 'eliminar':
            $elementoEliminado = $cola->eliminar();
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cola</title>
</head>
<body>
    <h1>Cola</h1>
    
    <h2>Insertar Elemento Delante (Solo en Cola 'dobleentrada')</h2>
    <form action="" method="POST">
        <label>Elemento: </label>
        <input type="text" name="elemento" required>
        <input type="hidden" name="accion" value="insertarDelante">
        <input type="submit" value="Insertar Delante">
    </form>
    
    <h2>Insertar Elemento Detrás</h2>
    <form action="" method="POST">
        <label>Elemento: </label>
        <input type="text" name="elemento" required>
        <input type="hidden" name="accion" value="insertarDetras">
        <input type="submit" value="Insertar Detrás">
    </form>

    <h2>Eliminar Elemento</h2>
    <form action="" method="POST">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar Elemento">
    </form>

    <?php
    if (isset($elementoEliminado)) {
        echo "<p>Elemento eliminado: $elementoEliminado</p>";
    }

    $colaActual = $cola->mostrar();
    echo "<h2>Contenido de la Cola:</h2>";
    echo "<pre>";
    print_r($colaActual);
    echo "</pre>";
    ?>
</body>
</html>
