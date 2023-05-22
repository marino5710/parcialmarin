<?php

require '../../modelos/Insumo.php'; 

try {
    $insumo = new Insumo($_POST);
    $resultado = $insumo->guardar();
    $error= "No se guardo correctamente"; 

} catch (PDOException $e)) {
    $error = $e->getMessage();
}catch (Exception $e2){
    $error = $e2->getMessage(); 
}

