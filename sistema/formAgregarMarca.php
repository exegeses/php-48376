<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="agregarMarca.php" method="post">

                <div class="form-group">
                    <label for="mkNombre">Nombre de la marca</label>
                    <input type="text" name="mkNombre" class="form-control" id="mkNombre" required>
                </div>


                <button class="btn btn-dark mr-3 px-4">Agregar marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel de marcas
                </a>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>