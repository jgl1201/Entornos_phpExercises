<?php
/**
 * Crea una clase que represente un Círculo
 * La clase círculo, tendra 3 métodos
 * - Uno para calcular su área
 * - Otro para calcular su perímetro
 * - Otro para calcular su diámetro
 * Crea también su constructor
*/

class Circle {
    public $radius;

    function __contruct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pow(M_PI * $this->radius, 2);
    }
    public function getPerimeter() {
        return 2 * M_PI * $this->radius;
    }
    public function getDiameter() {
        return $this->radius * 2;
    }
}

?>