<?php

// Incluir la clase base del controlador
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/EquipoModel.php';  // Incluir el modelo

class EquiposController extends Controller {

    public function __construct($smarty) {
        parent::__construct($smarty);  // Llamar al constructor de la clase base
    }

    // Mostrar todos los equipos
    public function index() {
        // Obtener los equipos desde el modelo usando el QueryBuilder
        $equipos = EquipoModel::obtenerEquipos();  // Obtienes los equipos desde la base de datos

        // Asignar los equipos a la plantilla
        $this->smarty->assign('equipos', $equipos);
        $this->assignBaseUrl();  // Asignar la URL base a la plantilla

        // Mostrar la plantilla de todos los equipos
        $this->smarty->display('equipos.tpl');
    }

    // Mostrar un equipo específico
public function show($slug) {
    // Obtener un equipo específico desde el modelo usando el QueryBuilder
    $equipo = EquipoModel::obtenerEquipoPorSlug($slug);

    if ($equipo) {
        // Asignar el equipo a la plantilla
        $this->smarty->assign('equipo', $equipo);
        $this->assignBaseUrl();  // Asignar la URL base a la plantilla

        // Mostrar la plantilla con la vista del equipo específico
        $this->smarty->display('equipo_detalle.tpl');
    } else {
        // Si el equipo no existe, redirigir a la lista de equipos
        // Depuración: Verificamos el valor de $slug
        echo 'No se encontró el equipo con el slug: ' . $slug;
        exit();  // Detenemos la ejecución para ver el mensaje de depuración

        header("Location: " . $this->base_url . "/equipos");
        exit();
    }
}

}
