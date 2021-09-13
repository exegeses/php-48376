<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $flag = eliminarCategoria();
    $css = 'danger';  //color rojo
    $mensaje = 'No se puede eliminar la categoría'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Categoría eliminada correctamente';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una categoría</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>