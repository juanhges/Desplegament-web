<?php

require_once('Connexio.php');

/**
 * Clase Afegir: script para insertar un nuevo producto en la base de datos.
 * 
 * - Esta clase obtiene los valores del formulario.
 * - Inserta el producto en la base de datos
 * 
 * @author JHG
 * @date 2024-04-10
 * @version 1.0
 */
class Afegir {

    /**
     * Método para insertar un nuevo producto en la base de datos.
     * 
     * @param String $id Identificador del producto. 
     * @param String $nom Nombre del producto. 
     * @param String $descripcio Descripción del producto. 
     * @param String $preu Precio del producto. 
     * @param String $categoria Identificador de la categoría del producto. 
     * 
     * @retun void
     */
    public function afegir($id, $nom, $descripcio, $preu, $categoria) {
        // Verifica si todos los campos requeridos están presentes
        if (!isset($id) || !isset($nom) || !isset($descripcio) || !isset($preu) || !isset($categoria)) {
            echo '<p>Se requieren todos los campos para actualizar el producto.</p>';
            return;
        }

        // Crea una instancia de la clase de conexión
        $conexionObj = new Connexio();
        // Obtiene la conexión a la base de datos
        $conexion = $conexionObj->obtenirConnexio();

        // Escapa las variables para prevenir SQL injection
        $id = $conexion->real_escape_string($id);
        $nom = $conexion->real_escape_string($nom);
        $descripcio = $conexion->real_escape_string($descripcio);
        $preu = $conexion->real_escape_string($preu);
        $categoria = $conexion->real_escape_string($categoria);

        // Construye la consulta SQL de inserción
        $consulta = "INSERT INTO productes (nom, descripció, preu, categoria_id) 
                     VALUES ('$nom', '$descripcio', '$preu', '$categoria');";

        // Ejecuta la consulta y redirige a la página principal si tiene éxito
        if ($conexion->query($consulta) === TRUE) {
            header('Location: Principal.php');
            exit();
        } else {
            // Muestra un mensaje de error si la consulta falla
            echo '<p>Error al actualizar el producto: ' . $conexion->error . '</p>';
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
}

// Obtiene los valores del formulario (si existen)
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$descripcio = isset($_POST['descripcio']) ? $_POST['descripcio'] : null;
$preu = isset($_POST['preu']) ? $_POST['preu'] : null;
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : null;

// Crea una instancia de la clase Afegir y llama al método afegir
$afegirProducto = new Afegir();
$afegirProducto->afegir($id, $nom, $descripcio, $preu, $categoria);

