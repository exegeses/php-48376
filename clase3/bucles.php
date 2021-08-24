<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Bucles con PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark p-4 text-light">
        encabezado
    </header>
    <main class="container">
        <h1>Bucles con PHP</h1>

        <div class="alert shadow">
    <?php
        $n = 1;
        while( $n < 15 ){
            echo $n, '<br>',"\n";
            $n++;
        }
    ?>
        </div>
        <div class="alert shadow">
    <?php
        $semana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        $n = 0;
        $cantidad = count($semana);
        echo '<ul>';
        while( $n < $cantidad ){
            echo '<li>', $semana[$n], '</li>';
            $n++;
        }
        echo '</ul>';
    ?>
        </div>

    </main>

</body>
</html>