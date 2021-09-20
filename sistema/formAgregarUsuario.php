<?php

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un usuario</h1>


        <div class='alert bg-light p-4 col-8 mx-auto shadow-sm'>
            <form action="agregarUsuario.php" method="post">

                <div class='form-group'>
                    <label for="usuNombre">Nombre</label>
                    <input type="text" name="usuNombre"
                           class='form-control' id="usuNombre" required>
                    <br>
                    <label for="usuApellido">Apellido</label>
                    <input type="text" name="usuApellido"
                           class='form-control' id="usuApellido" required>
                    <br>

                    <label for="usuEmail">Email</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" name="usuEmail"
                               class="form-control" id="usuEmail" required>
                    </div>
                    <br>

                    <label for="usuPass">Contraseña</label>
                    <input type="password" name="usuPass"
                           class='form-control' id="usuPass" required>
                    <br>

                </div>
                <button class='btn btn-dark my-3 px-4'>Agregar usuario</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>

    </main>

<?php  include 'includes/footer.php';  ?>