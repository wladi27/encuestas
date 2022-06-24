<?php

$query = "SELECT * FROM face_edad WHERE edad = '18-25'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $edad1 = $row['votos'];
        }

$query2 = "SELECT * FROM face_edad WHERE edad = '26-33'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $edad2 = $row['votos'];
        }

$query2 = "SELECT * FROM face_edad WHERE edad = '34-40'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $edad3 = $row['votos'];
        }

$query = "SELECT * FROM face_edad WHERE edad = '40+'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $edad4 = $row['votos'];
        }

        $maxv = max($edad1, $edad2, $edad3, $edad4);
        $minv = min($edad1, $edad2, $edad3, $edad4);

        $query3 = "SELECT * FROM face_edad WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_maxf = $row['votos'];
                $name_maxf = $row['edad'];
                }

        $query4 = "SELECT * FROM face_edad WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_minf = $row['votos'];
                $name_minf = $row['edad'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>