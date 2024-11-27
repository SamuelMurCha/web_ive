<?php
// C:\xampp\htdocs\web\models\EquipoModel.php

require_once __DIR__ . '/../configs/db.php';
require_once __DIR__ . '/QueryBuilder.php';  // Incluir la clase QueryBuilder

class EquipoModel {

    protected static $queryBuilder;

    public static function init() {
        global $pdo;
        self::$queryBuilder = new QueryBuilder($pdo);
    }

    // Método para obtener todos los equipos
    public static function obtenerEquipos() {
        self::init();  // Inicializar el QueryBuilder
        return self::$queryBuilder->table('equipos')
            ->select('*')
            ->where('activo', '=', 1)
            ->orderBy('nombre', 'ASC')
            ->get();  // Devuelve todos los equipos activos
    }

    // Método para obtener un equipo por su slug
    public static function obtenerEquipoPorSlug($slug) {
        self::init();  // Inicializar el QueryBuilder
        return self::$queryBuilder->table('equipos')
            ->select('*')
            ->where('slug', '=', $slug)
            ->where('activo', '=', 1)
            ->first();  // Devuelve un solo equipo activo con el slug proporcionado
    }

}
?>
