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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADOS</title>
</head>
<body>
    
    
</body>
</html>