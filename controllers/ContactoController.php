<?php
// controllers/ContactoController.php

class ContactoController {
    protected $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
    }

    public function index() {
        // Asignar variables a la vista
        $this->smarty->assign('title', 'Contacto');
        $this->smarty->assign('content', 'Página de contacto.');

        // Mostrar la vista
        $this->smarty->display('contacto.tpl');
    }
}
