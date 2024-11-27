<?php
// Cargar el autoload de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Cargar las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Incluir el archivo de configuración de Smarty
$smarty = require_once __DIR__ . '/config.php';  // Incluir el archivo de configuración

// Asignar la ruta base de la aplicación desde el archivo .env
$smarty->assign('base_url', $_ENV['BASE_URL']);  // Usar la variable de entorno BASE_URL

// Obtener la ruta desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : '';  // Ruta por defecto es ''

// Rutas dinámicas con parámetros
$route_parts = explode('/', $route);  // Dividir la ruta en partes
$main_route = $route_parts[0];        // Ruta principal (equipos, servicios, contacto, etc.)
$param = isset($route_parts[1]) ? urldecode($route_parts[1]) : ''; // Parámetro dinámico

// Definir las rutas
switch ($main_route) {
    case 'equipos':
        if ($param) {
            // Mostrar equipo específico
            require_once 'controllers/EquiposController.php';
            $controller = new EquiposController($smarty);
            $controller->show($param); // Pasar el parámetro (nombre del equipo)
        } else {
            // Mostrar todos los equipos
            require_once 'controllers/EquiposController.php';
            $controller = new EquiposController($smarty);
            $controller->index();
        }
        break;

    case 'servicios':
        if ($param) {
            // Mostrar un servicio específico
            require_once 'controllers/ServiciosController.php';
            $controller = new ServiciosController($smarty);
            $controller->show($param); // Pasar el parámetro (token del servicio)
        } else {
            // Mostrar todos los servicios
            require_once 'controllers/ServiciosController.php';
            $controller = new ServiciosController($smarty);
            $controller->index();
        }
        break;

    case 'contacto':
        require_once 'controllers/ContactoController.php';
        $controller = new ContactoController($smarty);
        $controller->index();
        break;

    case 'eventos':
        require_once 'controllers/EventosController.php';
        $controller = new EventosController($smarty);
        $controller->index();
        break;

    case 'membresia':
        if ($param == 'guardar') {
            // Procesar la solicitud de guardar la membresía
            require_once 'controllers/MembresiaController.php';
            $controller = new MembresiaController($smarty);
            $controller->guardar();  // Llamar al método guardar() en el controlador
        } else {
            // Mostrar la página de membresía
            require_once 'controllers/MembresiaController.php';
            $controller = new MembresiaController($smarty);
            $controller->index();
        }
        break;

    case '':
    default:
        require_once 'controllers/HomeController.php';
        $controller = new HomeController($smarty);
        $controller->index();
        break;
}
