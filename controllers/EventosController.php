<?php
// controllers/ContactoController.php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/EquipoModel.php';  // Incluir el modelo de Equipo


class EventosController extends Controller {
    public function __construct($smarty) {
        parent::__construct($smarty);
    }

    public function index() {
        // Asignar variables a la vista
        $this->smarty->assign('title', 'Eventos');
        $this->smarty->assign('content', 'Página de eventos.');

        // Mostrar la vista
        $this->smarty->display('eventos.tpl');
    }
}
