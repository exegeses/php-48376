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