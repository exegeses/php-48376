<?php
    //declaración
    function multiplicar( $a, $b )
    {
        $resultado = $a * $b;
        return $resultado;
    }

    include 'includes/encabezado.php';
?>
    <h1>Función multiplicar</h1>

<?php
    //llamadoa ejecución
    echo multiplicar( 2, 'manzana' )
?>
<?php
    include 'includes/pie.php';
?>