<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]?></title>
</head>
<body>
        <h2><?php echo $data["titulo"]?></h2>
        <br/>
        <br/>
        <a href="index.php?c=vehiculos&a=nuevo">Agregar</a>
        
        <table border="1" width="80%">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Color</th>
                </tr>
            </thead>

            <?php
            foreach($data["vehiculos"] as $dato){
                echo "<tr>";
                echo "<tr>";
                echo "<td>".$dato["placa"]."</td>";
                echo "<td>".$dato["marca"]."</td>";
                echo "<td>".$dato["modelo"]."</td>";
                echo "<td>".$dato["anio"]."</td>";
                echo "<td>".$dato["color"]."</td>";
            }

            ?>
        
        </table>
</body>
</html>