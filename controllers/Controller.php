<?php
class Controller {

    protected $smarty;
    protected $base_url;
    protected $pdo; // Añadir la propiedad pdo

    public function __construct($smarty) {
        $this->smarty = $smarty;
        $this->base_url = $_ENV['BASE_URL'];  // Asignar la URL base desde .env

        // Inicializar la conexión a la base de datos
        try {
            $this->pdo = new PDO(
                "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8",
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }

        // Asignar equipos globalmente (si es necesario)
        $equipos = EquipoModel::obtenerEquipos();
        $this->smarty->assign('equipos', $equipos);
    }

    // Método común para pasar la URL base a las plantillas
    protected function assignBaseUrl() {
        $this->smarty->assign('base_url', $this->base_url);
    }
}
