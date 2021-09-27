<?php

    //directiva de sesión
    session_start();

    //registramos variables de sesión
    $_SESSION['nombre'] = 'marcos';
    $_SESSION['numero'] = 666;

    /* en el Xampp las sesiones se guardan en el directorio c:\XAMPP\tmp */
    /*
    nombre|s:6:"marcos"; numero|i:666;
    */