<?php
    //declaración
    function negrita( $frase )
    {
        $cadena = '<b>'. $frase. '</b><br>';
        return $cadena;
    }
    function sumar( $nro1, $nro2 )
    {
        $resultado = $nro1 + $nro2;
        return $resultado;
    }

    include 'includes/encabezado.php';
?>
    <h1>Funciones personalizadas</h1>

<?php
    //llamado a ejecución
    echo negrita( 'Hola mundo' );
    echo negrita( 'otro texto' );
    echo negrita( 7*3 );
    echo sumar( 10, 3 );
?>
    <hr>
<?php
    echo negrita( sumar(10, 20) );
?>
<?php
    include 'includes/pie.php';
?>