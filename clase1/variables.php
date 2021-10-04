<?php
    $numero = 137;
    $texto = 'cadena de caractéres';
    const NOMBRE = 'Rick';
    /* const APELLIDO = 'Sánchez'; */
    define( 'APELLIDO', 'Sánchez' );
    echo $numero;
?>
<br>
<?php
    $numero2 = 12;
    echo $numero + $numero2;
?>
<br>
<?php
    //no necesito concatenar
    echo NOMBRE .' '. APELLIDO;
?>
    <br>
<?php
    //solo imprimimos
    echo NOMBRE, ' ', APELLIDO;
?>
<br>
<?php
    $filtro = 2000;
    $sql = "SELECT precio FROM productos
                    WHERE precio < ".$filtro;
?>