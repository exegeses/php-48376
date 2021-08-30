<?php

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $categorias = listarCategorias();
    include 'includes/encabezado.php';
?>
    <h1>Listado de categorias</h1>

    <ul class="list-group">
    <?php
        while( $categoria = mysqli_fetch_assoc($categorias) ){
    ?>
        <li class="list-group-item list-group-item-action">
            <?= $categoria['idCategoria']  ?> - <?= $categoria['catNombre'] ?>
        </li>
    <?php
        }
    ?>
    </ul>

<?php
    include 'includes/pie.php';
?>
