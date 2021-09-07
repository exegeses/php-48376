<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $cantidad = productoPorMarca();
    echo $cantidad;
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

        si ( hay productos de esa marca ){
            mensaje que diga que no se puede borrar
                +
            volver a panel
        }
        sino{
            formulario para la confirmación
        }


    </main>

<?php  include 'includes/footer.php';  ?>