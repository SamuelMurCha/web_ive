<?php

// Incluir el autoloader de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Verificar que la clase Smarty esté cargada correctamente
if (!class_exists('Smarty\Smarty')) {
    die('Smarty no se ha cargado correctamente');
}

// Inicializar Smarty con el namespace adecuado
$smarty = new Smarty\Smarty();

// Configuración de las carpetas de Smarty
$smarty->setTemplateDir(__DIR__ . '/templates/views');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setConfigDir(__DIR__ . '/configs');
$smarty->setCacheDir(__DIR__ . '/cache');

// Devolver el objeto Smarty para su uso en otras partes del proyecto
return $smarty;
