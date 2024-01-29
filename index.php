<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29de72b143.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
      function eliminar() {
        var respuesta=confirm("¿Estás seguro que deseas eliminar?");
        return respuesta
      }
    </script>
    <?php
    include "Modelo/conexion.php";
    include "controlador/eliminar_producto.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
          <h3 class="text-center text-secondary">Registro de producto</h3>
          <?php
          include "controlador/registro_producto.php"
          ?>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Descripción</label>
              <input type="text" class="form-control" name="descripcion">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Talla</label>
              <input type="text" class="form-control" name="talla">
          </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Colores</label>
              <input type="text" class="form-control" name="colores">
          </div> 
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Precio</label>
              <input type="int" class="form-control" name="precio">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Cantidad</label>
              <input type="int" class="form-control" name="cantidad">
          </div>
          <button type="submit" class="btn btn-primary" name="btnagregar" value="ok">Agregar</button>
        </form>
        <div class="col-8 p-4">
          <table class="table table-striped">
            <h3 class="text-center text-secondary">Inventario</h3>
            <thead>
              <tr>
                <th scope="col">Ref</th>
                <th scope="col">Descripción</th>
                <th scope="col">Talla</th>
                <th scope="col">Colores</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include "modelo/conexion.php";
              $sql=$connect->query(" select * from tops ");
              while($datos=$sql->fetch_object()){ ?>
                 <tr>
                <th scope="row"><?=$datos->id?></th>
                <td><?=$datos->descrip?></td>
                <td><?=$datos->talla?></td>
                <td><?=$datos->color?></td>
                <td><?=$datos->precio?></td>
                <td><?=$datos->cant?></td>
                <td>
                  <a href="modificar_producto.php ?id=<?=$datos->id?>"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a onclick="return eliminar()" href="index.php ?id=<?=$datos->id?>"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>