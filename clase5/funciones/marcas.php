<?php

###########################
##### CRUD de marcas

    function listarMarcas()
    {
        #conexion
        $link = conectar();
        #mensaje SQL
        $sql = "SELECT idMarca, mkNombre 
                FROM marcas";
        #ejecución
        $marcas = mysqli_query( $link, $sql );
        return $marcas;
    }
    #verMarcaPorID()
    #agregarMarca()
    #modificarMarca()
    #eliminarMarca()
