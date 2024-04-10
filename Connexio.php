<?php

/**
 * Clase Connexió para realizar la conexión a la base de datos la_meva_botiga
 * 
 * @author Github https://github.com/CarlesCanals/Desplegament-web
 * @date 2024-04-10
 * @version 1.0
 */
class Connexio {

    //Dades de la connexió a la base de dades la_meva_botiga.
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $baseDatos = "la_meva_botiga";

    /**
     * Método obtener la Conexion a la base de datos.
     * 
     * @param String $host Host donde conectarse. 
     * @param String $usuario Usuario de conexión. 
     * @param String $contraseña Contraseña de acceso. 
     * @param String $baseDatos Base de datos donde conectarse. 
     * 
     * @return conexion conexion Mysql a la base de datos
     */
    public function obtenirConnexio() {
        $conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->baseDatos);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
