<?php

    function listarUsuarios()
    {
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios";
        $resultado = mysqli_query( $link, $sql )
                            or die(mysqli_error( $link ));
        return $resultado;
    }

    function verUsuarioPorID()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql  = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error( $link ));
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

    /*
    *   función para chequear que no haya otro usuario con el mismo email
    *   gracias Jose Rasjido
     */
    function existeEmail(){
        $link = conectar();
        $id =  isset($_POST['idUsuario']) ? $_POST['idUsuario'] : 0;
        $email = $_POST['usuEmail'];
        $sql = "select count(usuEmail) as cantidad 
                    from usuarios 
                    where  idUsuario <> ".$id." 
                      and  usuEmail = '".$email."'";
        $resultado = mysqli_query( $link, $sql)
                        or die("Script interrumpido: ".mysqli_error( $link ));
        $resultado = mysqli_fetch_assoc( $resultado );
        return $resultado['cantidad'] == 1;
    }

    function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $pHash = password_hash( $usuPass, PASSWORD_DEFAULT );

        $link = conectar();
        $sql = "INSERT INTO usuarios
                    VALUE 
                        ( 
                            DEFAULT , 
                            '".$usuNombre."', '".$usuApellido."',
                            '".$usuEmail."', '".$pHash."', 1
                         )";
        $resultado = mysqli_query( $link, $sql )
                            or die(mysqli_error($link));
        return $resultado;
    }

    function modificarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $idUsuario = $_POST['idUsuario'];
        $link = conectar();
        //existeEmail()
        $sql = "UPDATE usuarios 
                    SET 
                        usuNombre = '".$usuNombre."',
                        usuApellido = '".$usuApellido."',
                        usuEmail = '".$usuEmail."'
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        return $resultado;
    }
    /**
     * función para quequear coincidencia clave nueva
    */
    function repiteClave()
    {
        //clave nueva
        $newPass = $_POST['newPass'];
        $newPass2 = $_POST['newPass2'];
        if( $newPass != $newPass2 ){
            //si no coinciden, informar en formulario
            header('location: formModificarClave.php?Err2=1');
            return false;
        }
        return true;
    }

    function modificarClave()
    {
        //clave actual
        $usuPass = $_POST['usuPass'];
        /** obtenemos clave en bdd */
        $link = conectar();
        $sql  = "SELECT usuPass 
                    FROM usuarios
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query( $link, $sql )
                                or die(mysqli_error( $link ));
        $claveHasheada = mysqli_fetch_assoc($resultado);
        if( !password_verify( $usuPass, $claveHasheada['usuPass'] ) ){
            // si no puso clave correcta.
            //generamos una redirección para informar clave mal
            header('location: formModificarClave.php?Err=1');
        }
        else{
            //chequear repita contraseña y que coincidan
            if ( repiteClave() ){
                //modificamos contraseña
                $newPass = $_POST['newPass'];
                $pHash = password_hash( $newPass, PASSWORD_DEFAULT );
                $sql = "UPDATE usuarios
                            SET usuPass = '".$pHash."'
                            WHERE idUsuario =".$_SESSION['idUsuario'];
                mysqli_query( $link, $sql )
                                or die(mysqli_error( $link ));
                //saber si modificó la clave o puso la misma
                $filasAfectadas = mysqli_affected_rows( $link );
                return $filasAfectadas;
            }
        }
    }

    function eliminarUsuario()
    {
        $idUsuario = $_POST['idUsuario'];
        $link = conectar();
        $sql = "DELETE FROM usuarios
                    WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        return $resultado;
    }