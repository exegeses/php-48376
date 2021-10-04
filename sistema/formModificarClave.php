<?php
    //require 'config/config.php';
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Cambio de contraseña</h1>


        <div class='alert bg-light p-4 col-8 mx-auto shadow-sm'>
            <form action="modificarClave.php" method="post" class="validarForm" novalidate>

                <div class='form-group mb-4 has-validation'>
                    <label for="usuPass">Contraseña actual</label>
                    <input type="password" name="usuPass"
                           class='form-control' id="usuPass" required>
                    <div class="invalid-feedback">
                        Debe completar el campo Contraseña actual
                    </div>
                </div>
                <div class='form-group mb-2'>
                    <label for="newPass">Nueva contraseña</label>
                    <input type="password" name="newPass"
                           class='form-control' id="newPass" required>
                    <div class="invalid-feedback">
                        Debe completar el campo Nueva contraseña
                    </div>
                </div>
                <div class='form-group mb-3'>
                    <label for="newPass2">Repita contraseña</label>
                    <input type="password" name="newPass2"
                           class='form-control' id="newPass2" required>
                    <div class="invalid-feedback" id="repite">
                        Debe completar el campo Repita contraseña con un valor igual a Nueva contraseña
                    </div>
                </div>

                <button class='btn btn-dark my-3 px-4'>Agregar usuario</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>

        <script>
            let form = document.querySelector('.validarForm');
            let newPass = document.querySelector('#newPass');
            let newPass2 = document.querySelector('#newPass2');
            //let repita = document.querySelector('#repita');
/*
            form.addEventListener('submit', function (event) {
                if ( !form.checkValidity() ) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated');
            }, false)
*/

        </script>

    </main>

<?php  include 'includes/footer.php';  ?>