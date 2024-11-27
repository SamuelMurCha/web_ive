<?php
// C:\xampp\htdocs\web\models\QueryBuilder.php

class QueryBuilder {
    protected $pdo;
    protected $table;
    protected $sql;
    protected $params = [];
    protected $paramIndex = 0;  // Índice para generar nombres únicos para los parámetros

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Establecer la tabla a consultar
    public function table($table) {
        $this->table = $table;
        return $this;
    }

    // Construir la consulta SELECT
    public function select($columns = '*') {
        $this->sql = "SELECT $columns FROM {$this->table}";
        return $this;
    }

    // Añadir condiciones WHERE
    public function where($column, $operator, $value) {
        $paramName = "param" . $this->paramIndex++;  // Crear un nombre único para el parámetro
        if (empty($this->params)) {
            $this->sql .= " WHERE $column $operator :$paramName";
        } else {
            $this->sql .= " AND $column $operator :$paramName";
        }
        $this->params[$paramName] = $value;
        return $this;
    }

    // Añadir la cláusula ORDER BY
    public function orderBy($column, $direction = 'ASC') {
        $validDirections = ['ASC', 'DESC'];
        $direction = in_array(strtoupper($direction), $validDirections) ? strtoupper($direction) : 'ASC';
        
        $this->sql .= " ORDER BY $column $direction";
        return $this;
    }

    // Ejecutar la consulta y devolver los resultados
    public function get() {
        $stmt = $this->pdo->prepare($this->sql);
        
        foreach ($this->params as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Ejecutar la consulta para obtener un solo resultado
    public function first() {
        $stmt = $this->pdo->prepare($this->sql);
        
        foreach ($this->params as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Añadir el método insert
    public function insert($data) {
        $columns = implode(", ", array_keys($data));  // Obtener las columnas
        $placeholders = implode(", ", array_map(function ($key) { return ":$key"; }, array_keys($data)));  // Crear los marcadores de posición para los valores
        
        // Crear la consulta de inserción
        $this->sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
        
        // Asignar los valores a los parámetros
        foreach ($data as $key => $value) {
            $this->params[$key] = $value;
        }

        // Ejecutar la consulta
        $stmt = $this->pdo->prepare($this->sql);
        
        foreach ($this->params as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }

        // Ejecutar la consulta
        $stmt->execute();
        return $stmt->rowCount() > 0;  // Devuelve true si la inserción fue exitosa
    }
}
?>
