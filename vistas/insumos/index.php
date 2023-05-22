<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE INSUMOS</title>
</head>
<body>
    
    <div class="container bg-light">
        <h1 class="text center">FORMULARIO DE INSUMOS ADQUIRIDOS</h1>
        <div class="row justify-content-center">
        <form action="/parcialmarin/controladores/insumos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="insum_nombre">Nombre del insumo</label>
                        <input type="text" name="insum_nombre" id="insum_nombre" class="form-control" placeholder="Ingrese el nombre del Insumo, Ej: Aceite">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insum_cantidad">Cantidad del insumo</label>
                        <input type="text" name="insum_cantidad" id="insum_cantidad" class="form-control" placeholder="INGRESE UNA CANTIDAD, EJ; 5">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="insum_precio">Precio del insumo</label>
                        <input type="text" name="insum_precio" id="insum_precio" class="form-control" placeholder="INGRESE UN PRECIO, EJ; 5">
                    </div>
                </div>



        </form>
        </div>
    </div>
    
</body>
</html>