<?php

    ###############################
    ######  CRUD de categorias

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $categorias = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $categorias;
    }

    function verCategoriaPorID()
    {
        $link = conectar();
        $idCategoria = $_GET['idCategoria'];
        $sql = "SELECT idCategoria, catNombre
                        FROM categorias
                        WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                            VALUES
                                ( DEFAULT, '".$catNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * función para chequear si hay uno o más productos
     * de una categoría
     * @return bool
     *
     */
    function productoPorCategoria()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                        WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return  $cantidad;
    }

    /**
     * función para modificar una categoría
     * @return $resultado:bool
     */
    function modificarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "UPDATE categorias
                            SET catNombre = '".$catNombre."'
                            WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

    /**
     * Función para eliminar una categoría
     * @return bool|mysqli_result
     */
    function eliminarCategoria()
    {
        $idCategoria = $_POST['idCategoria'];
        $link = conectar();
        $sql = "DELETE categorias 
                            WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }
