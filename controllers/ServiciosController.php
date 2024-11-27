<?php

class ServiciosController {

    private $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
    }

    // Mostrar todos los servicios
    public function index() {
        // Aquí podrías obtener los datos de todos los servicios (cultos grabados)
        $servicios = [
            ['token' => 'culto-1', 'nombre' => 'Culto Domingo 01', 'fecha' => '2024-11-15'],
            ['token' => 'culto-2', 'nombre' => 'Culto Miércoles 01', 'fecha' => '2024-11-12'],
            // Otros servicios...
        ];

        $this->smarty->assign('servicios', $servicios);  // Asignar los servicios a la plantilla
        $this->smarty->display('servicios.tpl');  // Mostrar la plantilla de todos los servicios
    }

    // Mostrar un servicio específico
    public function show($token) {
        // Aquí podrías obtener los datos de un servicio específico basado en el token
        $servicios = [
            'culto-1' => ['nombre' => 'Culto Domingo 01', 'fecha' => '2024-11-15', 'descripcion' => 'Culto realizado el 15 de noviembre, con un mensaje sobre la esperanza.'],
            'culto-2' => ['nombre' => 'Culto Miércoles 01', 'fecha' => '2024-11-12', 'descripcion' => 'Culto realizado el 12 de noviembre, con un mensaje sobre la paz.'],
            // Otros servicios...
        ];

        if (isset($servicios[$token])) {
            $this->smarty->assign('servicio', $servicios[$token]);  // Asignar el servicio a la plantilla
            $this->smarty->display('servicio_detalle.tpl');  // Mostrar la plantilla con el detalle del servicio
        } else {
            // Si el servicio no existe, puedes redirigir a la página principal de servicios
            header("Location: /web/servicios");
            exit();
        }
    }
}
