<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marca = verMarcaPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow-sm">
            <form action="modificarMarca.php" method="post">

                <div class="form-group">
                    <label for="mkNombre">Nombre de la marca</label>
                    <input type="text" name="mkNombre"
                           value="<?= $marca['mkNombre'] ?>"
                           class="form-control" id="mkNombre" required>
                </div>
                <input type="hidden" name="idMarca"
                       value="<?= $marca['idMarca'] ?>">

                <button class="btn btn-dark mr-3 px-4">Modificar marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel de marcas
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>