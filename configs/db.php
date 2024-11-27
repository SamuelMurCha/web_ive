<?php

// Cargar el archivo .env para acceder a las variables de entorno
require_once __DIR__ . '/../vendor/autoload.php';  // Asegúrate de que el autoload esté incluido
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');  // Ruta a la carpeta raíz del proyecto
$dotenv->load();

// Parámetros de la base de datos desde el archivo .env
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);

// Configuración de la conexión PDO
try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    // Configurar la conexión para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores de conexión
    die('Error de conexión: ' . $e->getMessage());
}
