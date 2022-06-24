<?php

$query = "SELECT * FROM wa_edad WHERE edad = '18-25'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $wa1 = $row['votos'];
        }

$query2 = "SELECT * FROM wa_edad WHERE edad = '26-33'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $wa2 = $row['votos'];
        }

$query2 = "SELECT * FROM wa_edad WHERE edad = '34-40'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $wa3 = $row['votos'];
        }

$query = "SELECT * FROM wa_edad WHERE edad = '40+'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $wa4 = $row['votos'];
        }

        $maxv = max($wa1, $wa2, $wa3, $wa4);
        $minv = min($wa1, $wa2, $wa3, $wa4);

        $query3 = "SELECT * FROM wa_edad WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_maxw = $row['votos'];
                $name_maxw = $row['edad'];
                }

        $query4 = "SELECT * FROM wa_edad WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_minw = $row['votos'];
                $name_minw = $row['edad'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>