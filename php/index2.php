<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <h1>Ejemplo PHP</h1>
    
    <table border="1">
        <tr>
            <td>Id</td>
            <th>Username</th>
            <th>Nombres</th>
        </tr>
        <?php
            try {
                $usuario    = 'root';
                $contraseña = 'root';

                $mbd = new PDO('mysql:host=localhost;dbname=conecta20_2020_02', $usuario, $contraseña);

                $consulta = "SELECT * from usuario LIMIT 50";

                $resultado = $mbd->query($consulta);

                foreach($resultado as $fila) {
                    echo "<tr>";
                    echo "<td>".$fila['id']."</td>";
                    echo "<td>".$fila['username']."</td>";
                    echo "<td>".$fila['nombres']."</td>";
                    echo "</tr>";
                }
                $mbd = null;
            } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        ?>
    </table>

    

</body>
</html>