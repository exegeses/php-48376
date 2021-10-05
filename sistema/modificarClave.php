<?php  

    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $css = 'warning';
    $mensaje = 'La clave enviada es igual a la anterior.';
    if( $flag = modificarClave() ){
        $css = 'success';
        $mensaje = 'Contraseña modificada correctamente.';
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de contraseña</h1>

        <div class="alert alert-<?= $css ?> col-6 mx-auto">
            <?= $mensaje ?>
        </div>
        

    </main>

<?php  include 'includes/footer.php';  ?>