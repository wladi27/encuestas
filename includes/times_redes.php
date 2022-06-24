<?php
$query = "SELECT * FROM tiempo_promedio WHERE red = 'Facebook'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $time_f = $row['tp'];
        }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'WhatsApp'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $time_w = $row['tp'];
        }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Twitter'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $time_tw = $row['tp'];
        }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Instagram'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $time_i = $row['tp'];
        }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Tiktok'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $time_t = $row['tp'];
        }
?>