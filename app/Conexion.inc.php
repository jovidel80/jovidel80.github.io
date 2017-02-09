<?php

/**
 * Created by IntelliJ IDEA.
 * User: capitanjovi
 * Date: 4/2/17
 * Time: 2:29 PM
 */
class Conexion {

    private static $conexion;

    public static function abrirConexion() {
        if (!isset(self::$conexion)) {
            try {
                include_once "config.inc.php";
                self::$conexion = new PDO("mysql:host=$nombreServidor; dbname=$nombreBaseDatos", $nombreUsuario, $password);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion->exec("SET CHARACTER SET utf8");
            } catch (PDOException $exception) {
                print "ERROR: " . $exception->getMessage() . "<br>";
                die();
            }
        }
    }

    public static function cerrarConexion() {
        if (isset(self::$conexion)) {
            self::$conexion = null;
        }
    }

    public static function obtenerConexion() {
        return self::$conexion;
    }
}