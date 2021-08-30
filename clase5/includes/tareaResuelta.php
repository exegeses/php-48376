<?php
//declaración
function multiplicar($c, $d)
{
    if( is_numeric($c)  &&  is_numeric($d) ){
        $resultado = $c * $d;
        return $resultado;
    }
        $mensaje ='Ambos debe ser números';
        return $mensaje;
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