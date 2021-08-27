<?php

    $link = mysqli_connect(
                'localhost',
                'root',
                'root',
                'catalogo'
            );
    $sql = "SELECT idMarca, mkNombre 
                FROM marcas";

    $marcas = mysqli_query( $link, $sql );


    while ( $marca = mysqli_fetch_assoc($marcas) ){

        echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';

    }