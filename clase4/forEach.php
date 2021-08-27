<?php
    include 'includes/encabezado.php';
    $italianos = [
                    'Bugatti', 'Lamborghini', 'Masserati',
                    'Ferrari', 'Pagani', 'Lancia',
                    'Fiat',
                    'Alfa Romeo'
                 ];
    echo '<pre>';
    print_r($italianos);
    echo '</pre>';
?>
    <h1>Bucle foreach</h1>

    <ul class="list-group col-4 mx-auto">
   <?php
       // foreach ( $contenedor as $auxiliar )
        foreach ( $italianos as $key => $italiano ){
   ?>
        <li class="list-group-item list-group-item-action">
            <?= $key ?>: <?= $italiano ?>
        </li>
   <?php
        }
   ?>
    </ul>

<?php
    include 'includes/pie.php';
?>

