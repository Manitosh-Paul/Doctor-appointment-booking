<?php

include 'connection.php';

$confirm = $_GET["confirm"];
if (isset($confirm)) {

    $delete_appointment = "DELETE FROM appointment_form WHERE Appointment_id=$confirm";
    $process_query = mysqli_query($connect_to, $delete_appointment) or die($connect_to);

    if ($process_query) {
        header("Location:../admin/appointment.php");
    }
} else {
    header("Location:statuserror/error403.html");
}
