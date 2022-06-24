<?php

$query = "SELECT * FROM redes_sociales WHERE name = 'Facebook'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $facebook = $row['votos'];
        }

$query2 = "SELECT * FROM redes_sociales WHERE name = 'WhatsApp'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $WhatsApp = $row['votos'];
        }

$query2 = "SELECT * FROM redes_sociales WHERE name = 'Twitter'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $Twitter = $row['votos'];
        }

$query = "SELECT * FROM redes_sociales WHERE name = 'Instagram'";
$result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $instagram = $row['votos'];
        }

$query2 = "SELECT * FROM redes_sociales WHERE name = 'Tiktok'";
$result=$connection->query($query2);
    if ($row = $result->fetch_assoc()){
        $tiktok = $row['votos'];
        }

        $maxv = max($facebook, $WhatsApp, $Twitter, $instagram, $tiktok);
        $minv = min($facebook, $WhatsApp, $Twitter, $instagram, $tiktok);

        $query3 = "SELECT * FROM redes_sociales WHERE votos = $maxv LIMIT 1";
        $result=$connection->query($query3);
            if ($row = $result->fetch_assoc()){
                $votos_max = $row['votos'];
                $name_max = $row['name'];
                $color_max = $row['color'];
                }

        $query4 = "SELECT * FROM redes_sociales WHERE votos = $minv LIMIT 1";
        $result=$connection->query($query4);
            if ($row = $result->fetch_assoc()){
                $votos_min = $row['votos'];
                $name_min = $row['name'];
                $color_min = $row['color'];
                }

        $query = "SELECT * FROM encuestas";
        $ejecutar = $connection->query($query);
        $numero = $ejecutar->num_rows;
?>