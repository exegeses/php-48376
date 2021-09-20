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
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = 'SELECT 
                        idProducto, prdNombre, prdPrecio, 
                        productos.idMarca, mkNombre, 
                        productos.idCategoria, catNombre,
                        prdPresentacion, prdStock, prdImagen 
                    FROM productos 
                        join marcas 
                            on productos.idMarca = marcas.idMarca 
                        join categorias 
                            on productos.idCategoria = categorias.idCategoria
                        WHERE idProducto = '.$idProducto;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        $producto = mysqli_fetch_assoc( $resultado );
        return $producto;
    }

    function subirImagen()
    {
        //si no enviaron archivo en agregar
        $prdImagen = 'noDisponible.jpg';

        //si ya tiene imagen en modificar
        if( isset($_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        }

        //si enviaron archivo en ambos
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

        $link = conectar();
/*        $sql = "INSERT INTO productos
                        ( 
                         prdNombre, prdPrecio, 
                         idMarca, idCategoria,
                         prdPresentacion, prdStock, 
                         prdImagen
                        )
                VALUES 
                       ( 
                         '".$prdNombre."', ".$prdPrecio.", 
                         ".$idMarca.", ".$idCategoria.", 
                         '".$prdPresentacion."',".$prdStock.", 
                         '".$prdImagen."'
                       )";
*/
        $sql = "INSERT INTO productos 
                        VALUES( 
                                DEFAULT, 
                               '".$prdNombre."',
                               ".$prdPrecio.", 
                               ".$idMarca.", 
                               ".$idCategoria.", 
                               '".$prdPresentacion."', 
                               ".$prdStock.", 
                               '".$prdImagen."'
                              )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error( $link ) );
        return $resultado;
    }
    function modificarProducto()
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos 
                    SET 
                        prdNombre       = '".$prdNombre."', 
                        prdPrecio       = ".$prdPrecio.", 
                        idMarca         = ".$idMarca.", 
                        idCategoria     = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."', 
                        prdStock        = ".$prdStock.", 
                        prdImagen       = '".$prdImagen."'
                    WHERE idProducto    = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                                or die(mysqli_error( $link ));
        return $resultado;
    }
    function eliminarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $link = conectar();
        $sql = "DELETE FROM productos 
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error( $link ));
        return $resultado;
    }