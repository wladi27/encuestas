<?php

$query = "SELECT * FROM tik_edad WHERE edad = '18-25'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tik1 = $row['votos'];
        }

$query2 = "SELECT * FROM tik_edad WHERE edad = '26-33'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $tik2 = $row['votos'];
        }

$query2 = "SELECT * FROM tik_edad WHERE edad = '34-40'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $tik3 = $row['votos'];
        }

$query = "SELECT * FROM tik_edad WHERE edad = '40+'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tik4 = $row['votos'];
        }

        $maxv = max($tik1, $tik2, $tik3, $tik4);
        $minv = min($tik1, $tik2, $tik3, $tik4);

        $query3 = "SELECT * FROM tik_edad WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_maxtik = $row['votos'];
                $name_maxtik = $row['edad'];
                }

        $query4 = "SELECT * FROM tik_edad WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_mintik = $row['votos'];
                $name_mintik = $row['edad'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>