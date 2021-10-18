<?php  
	require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="" style="display: flex; flex-wrap: wrap">
        <!--<div class="row">-->

<?php
    while( $producto = mysqli_fetch_assoc( $productos ) ){
?>
            <div class="card m-2">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="img-top img-thumbnail">

                <div class="card-body text-secondary">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <span class="lead text-info">$<?= $producto['prdPrecio'] ?></span>
                    <br>
                    <?= $producto['catNombre'] ?> - <?= $producto['mkNombre'] ?>
                </div>
            </div>
<?php
    }
?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>