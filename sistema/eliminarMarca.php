<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $flag = eliminarMarca();
    $css = 'danger';  //color rojo
    $mensaje = 'No se puede eliminar la marca'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Marca eliminada correctamente';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>