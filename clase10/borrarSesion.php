<?php

    session_start();
    ## eliminar una variable de sesion específica
    unset($_SESSION['numero']);

    ## eliminar TODAS las variables de sesión
    session_unset();

    ## eliminar la sesión
    session_destroy();
