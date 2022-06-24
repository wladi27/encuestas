<?php

$query = "SELECT * FROM ins_edad WHERE edad = '18-25'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $ig1 = $row['votos'];
        }

$query2 = "SELECT * FROM ins_edad WHERE edad = '26-33'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $ig2 = $row['votos'];
        }

$query2 = "SELECT * FROM ins_edad WHERE edad = '34-40'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $ig3 = $row['votos'];
        }

$query = "SELECT * FROM ins_edad WHERE edad = '40+'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $ig4 = $row['votos'];
        }

        $maxv = max($ig1, $ig2, $ig3, $ig4);
        $minv = min($ig1, $ig2, $ig3, $ig4);

        $query3 = "SELECT * FROM ins_edad WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_maxig = $row['votos'];
                $name_maxig = $row['edad'];
                }

        $query4 = "SELECT * FROM ins_edad WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_minig = $row['votos'];
                $name_minig = $row['edad'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>