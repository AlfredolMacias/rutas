<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Password</th>
            </tr>
        <?php
            for($i=0;$i<count($lista);$i++){
                echo "<tr>";
                echo "<td>".$lista[$i]->nom."</td>";
                echo "<td>".$lista[$i]->pass."</td>";
                echo "<td><a href='elimina/".$lista[$i]->id."'>Eliminar</a></td>";
                echo "<td><a href='actualiza/".$lista[$i]->id."'>Modificar</a></td>";
                echo "</tr>";
            }
        ?>
        <table>
    </div>
</body>
</html>