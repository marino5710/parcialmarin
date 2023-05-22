<?php

abstract class Conexion{
    public static $conexion = null; 
    private static function conectar(){
        try{
            self::$conexion = new PDO('informix:host=host.docker.internal; service=9088; database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix'); 
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Error de Conexion de BD"; 
        echo "<br>"; 
        echo "Error: ".$e->getMessage();
        exit; 
    }
    return self::$conexion; 
}
public static function ejecutar($sql){
     self::conectar();
     $sentencia = self::$conexion->prepare($sql);
     $resultado = $sentencia->execute();
     self::$conexion = null; 
     return $resultado;
}
public static function servir ($sql){