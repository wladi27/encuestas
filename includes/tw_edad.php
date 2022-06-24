<?php

$query = "SELECT * FROM tw_edad WHERE edad = '18-25'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tw1 = $row['votos'];
        }

$query2 = "SELECT * FROM tw_edad WHERE edad = '26-33'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $tw2 = $row['votos'];
        }

$query2 = "SELECT * FROM tw_edad WHERE edad = '34-40'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $ig3 = $row['votos'];
        }

$query = "SELECT * FROM tw_edad WHERE edad = '40+'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tw4 = $row['votos'];
        }

        $maxv = max($tw1, $tw2, $ig3, $tw4);
        $minv = min($tw1, $tw2, $ig3, $tw4);

        $query3 = "SELECT * FROM tw_edad WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_maxtw = $row['votos'];
                $name_maxtw = $row['edad'];
                }

        $query4 = "SELECT * FROM tw_edad WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_mintw = $row['votos'];
                $name_minitw = $row['edad'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>