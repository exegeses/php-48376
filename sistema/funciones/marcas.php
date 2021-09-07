<?php

    ###############################
    ######  CRUD de marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $marcas = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $marcas;
    }
    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                            or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }
    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUE
                        ( '".$mkNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );

        return $resultado;
    }
    function modificarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas
                    SET
                        mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

    /**
     * función para chequear si hay
     * productos asignados a una marca
     */
    function productoPorMarca()
    {
       $idMarca = $_GET['idMarca'];
       $link = conectar();
       $sql = "SELECT COUNT(idProducto) AS cantidad 
                    FROM productos 
                    WHERE idMarca = ".$idMarca;
       $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
       $datos = mysqli_fetch_assoc($resultado);
       return $datos['cantidad'];
    }
    function eliminarMarca()
    {}