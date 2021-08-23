<?php

    /*
        mostrar la fecha
        Lunes 23/08/2021

        en español
        no vale set_locale()
     */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Fecha usando PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark p-4 text-light">
        encabezado
    </header>
    <main class="container">
        <h1>Fecha usando PHP</h1>
<?php
    $diaSemana = date('w');
    $semana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    $diaMes = date('d');
    $nMes = date('m');
    $anio = date('Y');
    //$fecha = $diaMes.'/'.$nMes.'/'.$anio;
    $fecha = date('d/m/Y');
?>
    <div class="alert bg-light shadow">
        <?= $semana[$diaSemana]; ?> <?= $fecha ?>
    </div>

    </main>

</body>
</html>
