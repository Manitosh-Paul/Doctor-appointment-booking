<?php

include 'connection.php';

$confirm = $_GET["confirm"];
if (isset($confirm)) {

    $delete_admins = "DELETE FROM max_admin WHERE admin_email='$confirm'";
    $process_query = mysqli_query($connect_to, $delete_admins) or die($connect_to);

    if ($process_query) {
        header("Location:../admin/admins.php");
    }
} else {
    header("Location:statuserror/error403.html");
}
