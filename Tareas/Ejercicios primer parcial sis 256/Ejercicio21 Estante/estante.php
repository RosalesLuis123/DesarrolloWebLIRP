<?php
session_start();

class Estante {
    private $Fila1 = [];
    private $Fila2 = [];
    private $Fila3 = [];
    private $Tope1 = 0;
    private $Tope2 = 0;
    private $Tope3 = 0;

    public function insertarLibro($fila, $libro) {
        switch ($fila) {
            case 1:
                $this->Fila1[$this->Tope1++] = $libro;
                break;
            case 2:
                $this->Fila2[$this->Tope2++] = $libro;
                break;
            case 3:
                $this->Fila3[$this->Tope3++] = $libro;
                break;
            default:
                echo "Fila no válida.";
        }
    }

    public function mostrar($fila) {
        switch ($fila) {
            case 1:
                return $this->Fila1;
            case 2:
                return $this->Fila2;
            case 3:
                return $this->Fila3;
            default:
                return "Fila no válida.";
        }
    }

    public function mostrarArmario() {
        $armario = [
            "Fila 1" => $this->Fila1,
            "Fila 2" => $this->Fila2,
            "Fila 3" => $this->Fila3
        ];

        return $armario;
    }
}

// Inicializar o recuperar el objeto Estante de la sesión
if (!isset($_SESSION['estante'])) {
    $_SESSION['estante'] = new Estante();
}

$estante = $_SESSION['estante'];

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'insertar':
            $fila = $_POST['fila'];
            $libro = $_POST['libro'];
            $estante->insertarLibro($fila, $libro);
            break;
        case 'mostrar':
            $fila_mostrar = $_POST['fila_mostrar'];
            $libros = $estante->mostrar($fila_mostrar);
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estante de Libros</title>
</head>
<body>
    <h1>Estante de Libros</h1>
    
    <h2>Insertar Libro</h2>
    <form action="" method="POST">
        <label>Fila: </label>
        <input type="number" name="fila" min="1" max="3" required>
        <label>Libro: </label>
        <input type="text" name="libro" required>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" value="Insertar Libro">
    </form>
    
    <h2>Mostrar Libros</h2>
    <form action="" method="POST">
        <label>Fila a mostrar: </label>
        <input type="number" name="fila_mostrar" min="1" max="3" required>
        <input type="hidden" name="accion" value="mostrar">
        <input type="submit" value="Mostrar Libros">
    </form>

    <?php
    if (isset($libros)) {
        echo "<h2>Libros en la Fila $fila_mostrar:</h2>";
        echo "<ul>";
        foreach ($libros as $libro) {
            echo "<li>$libro</li>";
        }
        echo "</ul>";
    }

    $armario = $estante->mostrarArmario();
    echo "<h2>Contenido del Armario:</h2>";
    echo "<pre>";
    print_r($armario);
    echo "</pre>";
    ?>
</body>
</html>
