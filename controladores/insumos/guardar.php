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
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($resultado): ?>
                    <div class="alert alert-success" role="alert">
                        Guardado exitosamente!
                    </div>
                <?php else :?>
                    <div class="alert alert-danger" role="alert">
                        Ocurrió un error: <?= $error ?>
                    </div>
                <?php endif ?>
              
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="/PRACTICA7/vistas/productos/index.php" class="btn btn-info">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>