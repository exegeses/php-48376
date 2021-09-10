<?php

    $prdImagen = $_FILES['prdImagen'];
    /* veamos que hay en el array */
    echo '<pre>';
        print_r($prdImagen);
    echo '</pre>';

    /* mover al archivo del tmp */
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $nombreOrig = $_FILES['prdImagen']['name'];
    $ruta = 'productos/';
    move_uploaded_file( $tmp, $ruta.$nombreOrig );