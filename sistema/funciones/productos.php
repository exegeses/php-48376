<?php

    ###############################
    ######  CRUD de productos

    function listarProductos()
    {
        $link = conectar();
        /* $sql = "SELECT
                    idProducto, prdNombre, prdPrecio, 
                    mkNombre, catNombre, 
                    prdPresentacion, prdStock, prdImagen
                FROM productos, marcas, categorias
                WHERE productos.idMarca = marcas.idMarca
                  AND productos.idCategoria = categorias.idCategoria";
        */
        $sql = 'SELECT 
                        idProducto, prdNombre, prdPrecio, 
                        mkNombre, catNombre,
                        prdPresentacion, prdStock, prdImagen 
                    FROM productos 
                        join marcas 
                            on productos.idMarca = marcas.idMarca 
                        join categorias 
                            on productos.idCategoria = categorias.idCategoria';
        $productos = mysqli_query( $link, $sql );
        return $productos;
    }
    function verProductoPorID()
    {}
    function agregarProducto()
    {}
    function modificarProducto()
    {}
    function eliminarProducto()
    {}