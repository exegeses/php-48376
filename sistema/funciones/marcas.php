<?php

    ###############################
    ######  CRUD de marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $marcas = mysqli_query( $link, $sql );
        return $marcas;
    }
    function verMarcaPorID()
    {}
    function agregarMarca()
    {}
    function modificarMarca()
    {}
    function eliminarMarca()
    {}