<?php
// controllers/MembresiaController.php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/EquipoModel.php';  // Incluir el modelo de Equipo
require_once __DIR__ . '/../models/MembresiaModel.php';  // Incluir el modelo de Membresía
require_once __DIR__ . '/../models/QueryBuilder.php';  // Incluir QueryBuilder si es necesario

class MembresiaController extends Controller {

    public function __construct($smarty) {
        parent::__construct($smarty);
    }

    public function index() {
        // Obtener los equipos desde la base de datos (si es necesario)
        $equipos = EquipoModel::obtenerEquipos();  // Método que obtiene los equipos
        $this->smarty->assign('equipos', $equipos);

        // Asignar variables adicionales a la vista
        $this->smarty->assign('title', 'Membresía Vida Eterna');
        $this->smarty->assign('content', 'Página de contacto.');

        // Mostrar la vista
        $this->smarty->display('membresia.tpl');
    }

    public function guardar() {
        // Verificar que los datos sean enviados mediante POST
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Campos obligatorios
            $campos_obligatorios = [
                'tipo_membresia', 'nombre', 'fecha_nacimiento', 'sexo', 
                'direccion', 'bautizo_agua', 'bautizo_espiritu', 
                'anos_asistencia', 'unidad_tiempo_asistencia', 'disponibilidad', 'identificacion'
            ];
    
            // Verificar si los campos obligatorios están presentes y no están vacíos
            $errores = [];
            foreach ($campos_obligatorios as $campo) {
                if (empty($_POST[$campo])) {
                    $errores[] = "El campo '{$campo}' es obligatorio.";
                }
            }
    
            // Validar que la identificación no esté duplicada
            $query = $this->pdo->prepare("SELECT COUNT(*) FROM membresia WHERE identificacion = :identificacion");
            $query->execute(['identificacion' => $_POST['identificacion']]);
            if ($query->fetchColumn() > 0) {
                $errores[] = "La identificación '{$_POST['identificacion']}' ya está registrada.";
            }
    
            // Si hay errores, mostrar el mensaje y no continuar con el guardado
            if (!empty($errores)) {
                $this->smarty->assign('errores', $errores);
                $this->smarty->assign('title', 'Error en Membresía');
                $this->smarty->display('membresia_resultado.tpl');
                return;
            }
    
            // Preparar los datos para guardar
            $datos = [
                'tipo_membresia' => $_POST['tipo_membresia'],
                'nombre' => $_POST['nombre'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo' => $_POST['sexo'],
                'direccion' => $_POST['direccion'],
                'estado_civil' => isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null,
                'ocupacion' => isset($_POST['ocupacion']) ? $_POST['ocupacion'] : null,
                'nombre_encargado' => isset($_POST['nombre_encargado']) ? $_POST['nombre_encargado'] : null,
                'grado_academico' => isset($_POST['grado_academico']) ? $_POST['grado_academico'] : null,
                'bautizo_agua' => $_POST['bautizo_agua'],
                'bautizo_espiritu' => $_POST['bautizo_espiritu'],
                'anos_asistencia' => $_POST['anos_asistencia'],
                'unidad_tiempo_asistencia' => $_POST['unidad_tiempo_asistencia'],
                'disponibilidad' => $_POST['disponibilidad'],
                'areas_servicio' => isset($_POST['areas_servicio']) ? implode(',', $_POST['areas_servicio']) : '',
                'identificacion' => $_POST['identificacion'] // Nuevo campo
            ];
    
            // Crear una instancia del modelo de Membresía
            $membresiaModel = new MembresiaModel($this->pdo);
    
            // Intentar guardar los datos
            $resultado = $membresiaModel->guardarMembresia($datos);
    
            // Asignar mensaje según el resultado
            if ($resultado) {
                $this->smarty->assign('mensaje', 'Membresía guardada con éxito.');
            } else {
                $this->smarty->assign('mensaje', 'Hubo un error al guardar la membresía.');
            }
    
            // Mostrar la vista de confirmación
            $this->smarty->assign('title', 'Resultado de Membresía');
            $this->smarty->display('membresia_resultado.tpl');
        } else {
            // Si no es un POST, redirigir o mostrar un mensaje de error
            $this->smarty->assign('mensaje', 'Método de solicitud inválido. Por favor, complete el formulario.');
            $this->smarty->assign('title', 'Error en Membresía');
            $this->smarty->display('membresia_resultado.tpl');
        }
    }
    
    
}
?>
