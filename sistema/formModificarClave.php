<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de contraseña</h1>

        <div class='alert bg-light p-4 col-8 mx-auto shadow-sm'>
            <form action="modificarClave.php" method="post">
                <label for="usuPass">Contraseña</label>
                <input type="password" name="usuPass"
                       class='form-control' id="usuPass" required>
                <br>

                <button class='btn btn-dark my-3 px-4'>Modificar contraseña</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>