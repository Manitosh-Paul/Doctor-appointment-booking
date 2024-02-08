<?php

include 'connection.php';

$confirm = $_GET["confirm"];
if (isset($confirm)) {

    $delete_appointment = "DELETE FROM emergency_form WHERE Emergency_id=$confirm";
    $process_query = mysqli_query($connect_to, $delete_appointment) or die($connect_to);

    if ($process_query) {
        header("Location:../admin/emergency.php");
    }
} else {
    header("Location:statuserror/error403.html");
}
