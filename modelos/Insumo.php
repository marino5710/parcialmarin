<?php

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





        # code...
    }

}