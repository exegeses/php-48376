<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $check = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>
<?php
    if ( $check ){
?>
     <div class="alert alert-success">
         Marca agregada correctamente.
         <a href="adminMarcas.php" class="btn btn-light">Volver a panel</a>
     </div>
<?php
    }
    else{
?>
        <div class="alert alert-danger">
            No se pudo agregar la marca.
            <a href="adminMarcas.php" class="btn btn-light">Volver a panel</a>
        </div>
<?php
    }
?>

    </main>

<?php  include 'includes/footer.php';  ?>