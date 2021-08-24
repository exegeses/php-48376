<?php
    include 'encabezado.php';
?>
    <h1>Bucle for en PHP</h1>

    <div class="alert shadow">
        <ul>
<?php
    for( $n = 1; $n < 15; $n++ ){
        echo '<li>', $n, '</li>';
    }
?>
        </ul>
    </div>

    <div class="alert shadow">
<?php
    $marcas = [
                'Nike', 'Adidas', 'Topper', 'Fila',
                'Gaelle', 'Flecha', 'UniQlo', 'Asics',
                'Umbro'
        ];
    $cantidad = count($marcas);
?>
        <ul class="list-group col-2">
<?php
    //inicio del bucle
    for ( $n = 0; $n < $cantidad; $n++ ) {
?>
            <li class="list-group-item list-group-item-action">
                <?= $marcas[$n]; ?>
            </li>
<?php
    }
    //fin del bucle
?>
        </ul>

    </div>


<?php
    include 'pie.php';
?>