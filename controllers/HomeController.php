<?php
// controllers/HomeController.php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/EquipoModel.php';  // Incluir el modelo


class HomeController extends Controller {
    
    
    public function __construct($smarty) {
        parent::__construct($smarty);  // Llamar al constructor de la clase base
    }

    public function index() {
          // Obtener los equipos desde el modelo usando el QueryBuilder
          $equipos = EquipoModel::obtenerEquipos();  // Obtienes los equipos desde la base de datos

          // Asignar los equipos a la plantilla
          $this->smarty->assign('equipos', $equipos);
        // Asignar variables a la vista
        $this->smarty->assign('title', 'Inicio');
        $this->smarty->assign('content', 'Bienvenido a la página de inicio.');

        // Mostrar la vista
        $this->smarty->display('index.tpl');
    }
}
