<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
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
<?php
            if( isset($_GET['Err']) ){
?>
                    <div class="text-danger">
                        La contraseña actual es incorrecta.
                    </div>
<?php
            }
?>
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
<?php
            if( isset($_GET['Err2']) ){
?>
                <div class="text-danger">
                    Las nuevas credenciales no coinciden.
                </div>
<?php
            }
?>
                </div>

                <button class='btn btn-dark my-3 px-4'>Modificar contraseña</button>
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