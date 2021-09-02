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
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUE
                        ( '".$mkNombre."' )";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }
    function modificarMarca()
    {}
    function eliminarMarca()
    {}