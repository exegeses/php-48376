<?php

    $numero = 150; //hardcode
    if ( $numero < 100 ) {
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>
<hr>
<?php
    $numero = 150; //hardcode
    if ( $numero < 100 ) {
?>
        <img src="imagenes/ok.png">
<?php
    }
    else{
?>
        <img src="imagenes/error.png">
<?php
    }
?>
<hr>
<?php
    $numero = 150;
    $img = 'error';
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
    <img src="imagenes/<?= $img ?>.png">
<hr>
<?php
    $numero = 150;
?>
    <img src="imagenes/<?= ($numero<100)?'ok':'error' ?>.png">
