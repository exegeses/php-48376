<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
    include 'includes/encabezado.php';
?>
    <h1>Listado de marcas</h1>

    <ul class="list-group">
    <?php
        while( $marca = mysqli_fetch_assoc($marcas) ){
    ?>
        <li class="list-group-item list-group-item-action">
            <?= $marca['idMarca']  ?> - <?= $marca['mkNombre'] ?>
        </li>
    <?php
        }
    ?>
    </ul>

<?php
    include 'includes/pie.php';
?>
