<?php  

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un usuario</h1>

        <div class="alert bg-light p-4 col-4 mx-auto shadow-sm">
            <form action="eliminarUsuario.php" method="post">
                Se eliminará el usuario:
                <span class="lead"><?= $usuario['usuNombre'] ?> <?= $usuario['usuApellido'] ?></span>
                <input type="hidden" name="idUsuario"
                       value="<?= $usuario['idUsuario'] ?>">
                <br>
                <button class="btn btn-danger mt-4">
                    Confirmar baja
                </button>
                <a href="adminUsuarios.php" class="btn btn-secondary mt-4">
                    volver a panel
                </a>
            </form>
        </div>
        <script>
            Swal.fire(
                'Advertencia',
                'Si pulsa el botón "Confirmar baja", se eliminará el usuario seleccionado.',
                'warning'
            )
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>