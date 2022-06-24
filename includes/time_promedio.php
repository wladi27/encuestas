<?php
$query = "SELECT * FROM tiempo_promedio WHERE red = 'Facebook'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tp = $row['tp'];
         $time_p = $tp+$tpf;
            $sql = "UPDATE tiempo_promedio set tp = '$time_p' WHERE red = 'Facebook'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'WhatsApp'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tp = $row['tp'];
         $time_p = $tp+$tpw;
            $sql = "UPDATE tiempo_promedio set tp = '$time_p' WHERE red = 'WhatsApp'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            // print "<script>alert(\"Actualizado wa\");</script>";
            }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Twitter'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tp = $row['tp'];
         $time_p = $tp+$tptr;
            $sql = "UPDATE tiempo_promedio set tp = '$time_p' WHERE red = 'Twitter'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Instagram'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tp = $row['tp'];
         $time_p = $tp+$tpi;
            $sql = "UPDATE tiempo_promedio set tp = '$time_p' WHERE red = 'Instagram'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            }

$query = "SELECT * FROM tiempo_promedio WHERE red = 'Tiktok'";
    $result=$connection->query($query);
    if ($row = $result->fetch_assoc()){
        $tp = $row['tp'];
         $time_p = $tp+$tpt;
            $sql = "UPDATE tiempo_promedio set tp = '$time_p' WHERE red = 'Tiktok'";
            mysqli_query($connection, $sql);
            $_SESSION['message'] = 'Task Updated Successfully';
            $_SESSION['message_type'] = 'warning';
            }
?>