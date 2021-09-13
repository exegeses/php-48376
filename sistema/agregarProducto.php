<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $flag = agregarProducto();
    $css = 'danger';  //color rojo
    $mensaje = 'No se puede agregar el producto'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Producto agregado correctamente';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un producto</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>