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

    function subirImagen()
    {
        //si no enviaron archivo
        $prdImagen = 'noDisponible.jpg';
        //si enviaron archivo
        if( $_FILES['prdImagen']['error'] == 0 ){
            //ruta y nombre temporal
            $tmp = $_FILES['prdImagen']['tmp_name'];
            //renombramos archivo: contatenamos time.extension
            $nTime = time();
            //$infoArchivo = pathinfo( $_FILES['prdImagen']['name'] );
            //$ext = $infoArchivo['extension'];
            $ext = pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION );
            $prdImagen = $nTime.'.'.$ext;
            //subimos archivo
            $ruta = 'productos/';
            move_uploaded_file( $tmp, $ruta.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        //subir imagen *
        $prdImagen = subirImagen();
    }
    function modificarProducto()
    {}
    function eliminarProducto()
    {}