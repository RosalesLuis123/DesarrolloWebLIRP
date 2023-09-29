<?php
class Utiles {
    private $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function aumentarGuiones($n) {
        $cadenaConGuiones = implode(str_repeat('-', $n), str_split($this->cadena));
        return $cadenaConGuiones;
    }
}
?>
