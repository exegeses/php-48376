<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $cantidad = productoPorMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

<?php
        if( $cantidad > 0 ) {
?>
        <div class="alert alert-danger col-6 mx-auto">
            No se pueder eliminar la marca porque
            tiene productos relacionados.
            <a href="adminMarcas.php" class="btn btn-light">
                volver a panel
            </a>
        </div>
<?php
        }
        else{
            $marca = verMarcaPorID();
?>
        <div class="alert bg-light p-4 col-8 mx-auto shadow-sm">
            <form action="eliminarMarca.php" method="post">
                Se eliminará la marca:
                <span class="lead"><?= $marca['mkNombre'] ?></span>
                <input type="hidden" name="idMarca"
                       value="<?= $marca['idMarca'] ?>">
                <br>
                <button class="btn btn-danger">
                    Confirmar baja
                </button>
                <a href="adminMarcas.php" class="btn btn-secondary">
                    volver a panel
                </a>
            </form>
        </div>
        <script>
            Swal.fire(
                'Advertencia',
                'Si pulsa el botón "Confirmar baja", se eliminará la marca seleccionada.',
                'warning'
            )
        </script>
<?php
        }
?>


    </main>

<?php  include 'includes/footer.php';  ?>