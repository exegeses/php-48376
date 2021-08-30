<?php

    function foo()
    {
        echo 'esto se lee';
        return 'retornamos algo';
        echo 'esto no se lee';
    }
    
    include 'includes/encabezado.php';
?>
    <h1>Retorno en una función</h1>
    <?= foo() ?>

<?php
    include 'includes/pie.php';
?>