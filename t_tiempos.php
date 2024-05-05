<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" media="all" href="estilo_tiempo.css">
    <title>Tabla de Viajes</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Tabla de tiempos a otras ciudades desde filadelfia</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">Destino</th>
                        <th scope="col">Auto</th>
                        <th scope="col">Autobus</th>
                        <th scope="col">Bicicleta</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <?php
                    $lista = array(
                        array("New York", "1 h 51 min", "1 h 22 min", "8 h 53 min "),
                        array("Allentown", "1 h 11 min", "-", "6 h 9 min "),
                        array("Reading", "1 h 12 min", "-", "5 h 53 min "),
                    );

                    $tam = count($lista);
                    for ($r=0; $r < $tam; $r++) {  
                        echo "<tr>";
                        echo "<td>". $lista[$r][0] . "</td>";
                        echo "<td>". $lista[$r][1] . "</td>";
                        echo "<td>". $lista[$r][2] . "</td>";
                        echo "<td>". $lista[$r][3] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
                <caption class="tfoot">Tiempo necesario para viajar desde Filadelfia</caption>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>