<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass  = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido, usuPass
                    FROM usuarios 
                    WHERE usuEmail = '".$usuEmail."'";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        // si cantidad == 0  -> usuario mal
        // si cantidad == 1  -> usuario bien
        if ( $cantidad == 0 ){
            //redirección a formLogin
            header('location: formLogin.php?error=1');
            return;
        }
        else{
            //verificar contraseña
            $usuario = mysqli_fetch_assoc($resultado);
            if ( !password_verify( $usuPass, $usuario['usuPass'] ) ) {
                header('location: formLogin.php?error=1');
                return;
            }
            /* acá ya sabemos que se logueó bien usuario y clave */
            ######### RUTINA DE AUTENTICACIÓN
            $_SESSION['login'] = 1;
            #obtenemos y almacenamos nombre y apellido
            $_SESSION['usuNombre'] = $usuario['usuNombre'];
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            //$_SESSION['usuario'] = $usuario['usuNombre'] . ' '. $usuario['usuApellido'];
            ## redirección a admin
            header('location: admin.php');
        }
    }
    function logout()
    {
        session_unset();
        session_destroy();
        header('refresh:3;url=formLogin.php');
    }
    /**
     * función para chequear si el usuario está logueado
    */
    function autenticar()
    {
        if( !isset($_SESSION['login']) ){
            header('location:formLogin.php?error=1');
        }
    }