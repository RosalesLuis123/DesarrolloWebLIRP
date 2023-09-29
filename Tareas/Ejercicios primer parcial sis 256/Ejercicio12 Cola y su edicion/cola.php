<?php
class Cola {
    private $tipo;
    private $elementos;

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertarDelante($elemento) {
        array_unshift($this->elementos, $elemento);
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function eliminar() {
        if (!$this->estaVacia()) {
            array_shift($this->elementos);
        }
    }

    public function mostrar() {
        return $this->elementos;
    }

    public function estaVacia() {
        return empty($this->elementos);
    }
}

session_start();

if (!isset($_SESSION['cola'])) {
    // Crear una nueva cola si no existe en la sesión
    $_SESSION['cola'] = new Cola('Normal');
}

if (isset($_POST['accion'])) {
    $cola = $_SESSION['cola'];

    switch ($_POST['accion']) {
        case 'insertarDelante':
            if (isset($_POST['elemento'])) {
                $elemento = $_POST['elemento'];
                $cola->insertarDelante($elemento);
            }
            break;
        case 'insertarDetras':
            if (isset($_POST['elemento'])) {
                $elemento = $_POST['elemento'];
                $cola->insertarDetras($elemento);
            }
            break;
        case 'eliminar':
            $cola->eliminar();
            break;
    }

    $_SESSION['cola'] = $cola;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cola</title>
</head>
<body>
    <h1>Cola</h1>
    <form method="post">
        <select name="accion">
            <option value="insertarDelante">Insertar Delante</option>
            <option value="insertarDetras">Insertar Detrás</option>
            <option value="eliminar">Eliminar</option>
        </select>
        <input type="text" name="elemento" placeholder="Elemento">
        <input type="submit" value="Ejecutar">
    </form>

    <h2>Cola Actual:</h2>
    <?php
    $cola = $_SESSION['cola'];
    if (!$cola->estaVacia()) {
        $elementos = $cola->mostrar();
        echo "<ul>";
        foreach ($elementos as $elemento) {
            echo "<li>$elemento</li>";
        }
        echo "</ul>";
    } else {
        echo "La cola está vacía.";
    }
    ?>

</body>
</html>
