<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $flag = modificarMarca();
    $css = 'danger';  //color rojo
    $mensaje = 'No se pudo modificar la marca'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Marca modificada correctamente';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>