<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $categoria = verCategoriaPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una categoría</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow">
            <form action="modificarCategoria.php" method="post">
                <div class="form-group">
                    <label for="catNombre">Nombre de la categoría</label>
                    <input type="text" name="catNombre"
                           value="<?= $categoria['catNombre'] ?>"
                           class="form-control" id="catNombre" required>
                </div>
                <input type="hidden" name="idCategoria"
                       value="<?= $categoria['idCategoria'] ?>">

                <button class="btn btn-dark my-3 mr-3 px-4">Modificar categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    Volver a panel de categorías
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>