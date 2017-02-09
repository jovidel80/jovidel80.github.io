<?php

/**
 * Created by IntelliJ IDEA.
 * User: capitanjovi
 * Date: 4/2/17
 * Time: 2:02 PM
 */
class Usuario {

    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fechaRegistro;
    private $activo;
    
    public function __construct($id, $nombre, $email, $password, $fechaRegistro, $activo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->fechaRegistro = $fechaRegistro;
        $this->activo = $activo;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    /**
     * @return mixed
     */
    public function getActivo() {
        return $this->activo;
    }

    /**
     * @param mixed $activo
     */
    public function setActivo($activo) {
        $this->activo = $activo;
    }
    
    
}