<?php

if (!empty($_POST["btnagregar"])){
    if (!empty($_POST["descripcion"]) and !empty($_POST["talla"]) and !empty($_POST["colores"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])){
        
        $descrip=$_POST["descripcion"];
        $talla=$_POST["talla"];
        $color=$_POST["colores"];
        $precio=$_POST["precio"];
        $cant=$_POST["cantidad"];

        $sql=$connect->query(" insert into tops(descrip, talla, color, precio, cant)values('$descrip','$talla','$color',$precio,$cant) ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Producto registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar producto</div>';
        }
        
    }
else
    echo '<div class="alert alert-warning">Debe completar todos los campos</div>';
}
?>