<?php
    include 'encabezado.php';
    $locacion = [
                    "chinatown",
                    "floating-market",
                    "hat-laem",
                    "wat-arun",
                    "khao-san-road",
                    "ko-khai-beach",
                    "kwai-river",
                    "limestone",
                    "longtail-boat",
                    "maya-bay",
                    "pra-nang",
                    "rai-leh-beach",
                    "rawai",
                    "sirocco",
                    "tuk-tuk",
                    "wat-saket"
                ];
    $cantidad = count($locacion);
?>
    <h1>Listado de locaciones</h1>

    <ul class="list-group">
<?php
    //inicio de bucle
    for( $n = 0; $n < $cantidad; $n++) {
?>
        <li class="list-group-item list-group-item-action">
            <img src="tailandia/<?= $locacion[$n] ?>.jpg">
            <?= $locacion[$n] ?>
        </li>
<?php
    }
    //fin de bucle
?>
    </ul>


<?php
    include 'pie.php';
?>