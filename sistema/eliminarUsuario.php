<?php  

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $flag = eliminarUsuario();
    $css = 'danger';  //color rojo
    $mensaje = 'No se puede eliminar el usuario'; //predeterminado
    if ( $flag ) {
        $css = 'success'; //color verde
        $mensaje = 'Datos de usuario eliminados correctamente';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un usuario</h1>

        <div class="alert alert-<?= $css ?>">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light">Volver a panel </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>