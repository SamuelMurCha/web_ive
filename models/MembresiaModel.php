<?php
// models/MembresiaModel.php

require_once __DIR__ . '/QueryBuilder.php';  // Incluir el QueryBuilder

class MembresiaModel {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para guardar la membresía usando QueryBuilder
    public function guardarMembresia($datos) {
        // Usar QueryBuilder para la inserción de datos
        $queryBuilder = new QueryBuilder($this->pdo);

        // Usar el QueryBuilder para insertar los datos
        $result = $queryBuilder->table('membresia') // Nombre de la tabla
            ->insert($datos); // Insertar los datos proporcionados

        return $result;
    }
}
?>
