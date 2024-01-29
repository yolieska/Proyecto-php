<?php
include "Modelo/conexion.php";
$id=$_GET["id"];
$sql=$connect->query(" select * from tops where id=$id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     <form class="col-4 p-3 m-auto" method="POST">
          <h3 class="text-center text-secondary">Modificar producto</h3>
          <input type="hidden" name="id" value="<?= $_GET["id"]?>">
          <?php
            include "controlador/modificar_producto.php";
            while ($datos = $sql->fetch_object()) { ?>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción</label>
              <input type="text" class="form-control" name="descripcion" value=<?= $datos->descrip?>>
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Talla</label>
              <input type="text" class="form-control" name="talla" value=<?= $datos->talla?>>
          </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Colores</label>
              <input type="text" class="form-control" name="colores" value=<?= $datos->color?>>
          </div> 
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Precio</label>
              <input type="number" class="form-control" name="precio" value=<?= $datos->precio?> min="1" max="999999999">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cantidad</label>
              <input type="number" class="form-control" name="cantidad" value=<?= $datos->cant?> min="1" max="999999999">
          </div>   
            <?php }
            ?>
          <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Guardar cambios</button>
        </form>
</body>
</html>