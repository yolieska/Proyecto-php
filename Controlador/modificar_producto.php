<?php 
include "modelo/conexion.php";
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["descripcion"]) and !empty($_POST["talla"]) and !empty($_POST["colores"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"])){
        $id=$_POST["id"];
        $descrip=$_POST["descripcion"];
        $talla=$_POST["talla"];
        $color=$_POST["colores"];
        $precio=$_POST["precio"];
        $cant=$_POST["cantidad"];
        $sql=$connect->query(" update tops set descrip='$descrip', talla='$talla', color='$color', precio=$precio, cant=$cant where id=$id ");
        if ($sql==1){
            header("location:index.php");
        }
        else {
            echo '<div class="alert alert-danger">Error al modificar producto</div>';
        }
    }
    else{
        echo '<div class="alert alert-warning">Debe completar todos los campos</div>';
    }
}
?>