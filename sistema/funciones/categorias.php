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
    {}
    function agregarCategoria()
    {}
    function modificarCategoria()
    {}
    function eliminarCategoria()
    {}