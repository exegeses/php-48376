<?php

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $categorias = mysqli_query($link, $sql);
        return $categorias;
    }