<?php

class Alumno {
    public $nombre;
    public $apellido;
    public $dni;
    public $direccion;
    public $email;

    function get_nombre() {
        return $this->nombre;
    }

    function set_nombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    function get_apellido() {
        return $this->apellido;
    }

    function set_apellido($nuevoApellido) {
        $this->apellido = $nuevoApellido;
    }

    function get_dni() {
        return $this->dni;
    }

    function set_dni($nuevoDni) {
        $this->dni = $nuevoDni;
    }

    function get_direccion() {
        return $this->direccion;
    }

    function set_direccion($nuevaDireccion) {
        $this->direccion = $nuevaDireccion;
    }

    function get_email() {
        return $this->email;
    }

    function set_email($nuevaEmail) {
        $this->email = $nuevaEmail;
    }
}

class Asignatura {
    public $codigo;
    public $descripcion;

    function get_codigo() {
        return $this->codigo;
    }

    function set_codigo($nuevoCodigo) {
        $this->codigo = $nuevoCodigo;
    }

    function get_descripcion() {
        return $this->descripcion;
    }

    function set_descripcion($nuevoDescripcion) {
        $this->descripcion = $nuevoDescripcion;
    }
}
?>