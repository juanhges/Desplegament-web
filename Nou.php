<?php

require_once('Connexio.php');
require_once('Header.php');

/**
 * Clase Nou para la creación de nuevos productos.
 * 
 * - Esta clase muestra un formulario de alta del producto.
 * - Al pulsar el botón submit te redirige hacia la clase Afegir.php
 * 
 * @author JHG
 * @date 2024-04-10
 * @version 1.0
 */
class Nou {

    /**
     * Método para mostrar el formulario de alta del producto
     * 
     * @return void
     */
    public function mostrarFormulari() {

        echo '<!DOCTYPE html>
                <html lang="es">
                  <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <title>Modificar producte</title>
                    <!-- Enlace a Bootstrap desde su repositorio remoto -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
                  </head>
                  <body>
                    <div class="container mt-5" style="margin-bottom: 200px">
                        <h2>Afegir producte</h2>
                        <hr>
                        <form action="Afegir.php" method="POST">
                            <!-- Campos del formulario con la información actual del producto -->
                            <div class="mb-3">
                               <label for="id" class="form-label">Id Producto:</label>
                               <input type="text" name="id" value="" class="form-control" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nombre:</label>
                                <input type="text" name="nom" class="form-control" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcio" class="form-label">Descripción:</label>
                                <input type="text" name="descripcio" class="form-control" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="preu" class="form-label">Precio:</label>
                                <input type="number" name="preu" class="form-control" value="0" required>
                            </div>

                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoría:</label>
                                <select name="categoria" class="form-select" required>
                                    <!-- Opciones del selector de categorías con la opción seleccionada según la información actual -->
                                    <option value="1" selected>Electrónicos</option>
                                    <option value="2">Roba</option>
                                    <!-- Agrega más opciones según sea necesario -->
                                </select>
                            </div>

                            <!-- Agrega más campos según sea necesario -->

                            <hr>
                            <!-- Botones de guardar y cancelar -->
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <a href="Principal.php" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>';
        require_once('Footer.php');
    }
}

// Crea una instancia de la clase Nou y llama al método mostrarFormulari
$nouProducto = new Nou();
$nouProducto->mostrarFormulari();

