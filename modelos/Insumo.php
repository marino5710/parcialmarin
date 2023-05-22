<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Conexion.php'; 
class Insumos extends Conexion {
    public $insum_id; 
    public $insum_nombre;
    public $insum_cantidad;
    public $insum_marca;
    public $insum_proveedor;
    public $insum_precio;

    public function __construct($args = [] )
    {
        $this->insum_id = $args['id'] ?? null;
        $this->insum_nombre = $args['insum_nombre'] ?? '';
        $this->insum_cantidad = $args['insum_cantidad'] ?? '';
        $this->insum_marca = $args['insum_marca'] ?? '';
        $this->insum_proveedor = $args['insum_proveedor'] ?? '';
        $this->insum_precio = $args['insum_precio'] ?? '';
    }
    public function guardar(){
        $sql = "INSERT INTO insumos(insum_nombre, insum_cantidad, insum_marca, insum_proveedor, insum_precio) VALUES ('$this->insum_nombre', '$this->insum_cantidad', '$this->insum_marca','$this->insum_proveedor', '$this->insum_precio')";
        // echo $sql; 
        // exit; 
        $resultado = self::ejecutar($sql); 
        return $resultado;
    }

}