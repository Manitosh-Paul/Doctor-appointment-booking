<?php
session_start();
if (!isset($_SESSION["admin_fname"])) {
    header("Location:../adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max24x7 | Admin - Appointment Details</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/site.webmanifest">
    <!-- favicon -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500&display=swap" rel="stylesheet">
    <!-- google fonts -->

    <!-- css links -->
    <link rel="stylesheet" href="../css/adminstyle.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="../css/responsive/adminresponsive.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="../css/adminfooter.css ?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="../css/responsive/sectionfooter.css?v= <?php echo time(); ?>">
    <style>
        .section_datacontainer .img_container {
            background-color: #96b3ff;
        }
    </style>
    <!-- css links -->

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/5b08bf92b7.js" crossorigin="anonymous"></script>
    <!-- font awesome link -->

</head>

<body>
    <div class="container">
        <header class="d-flex">
            <div class="logo">
                <img src="../images/logo/MAX24x7logo.png" alt="logo" class="p-left">
            </div>
            <div class="open_close_btn p-right">
                <i class="fa-solid fa-bars nav-menu"></i>
                <i class="fa-solid fa-xmark nav-close"></i>
            </div>
            <nav>
                <ul class="d-flex">
                    <li><a href="admins.php" class="nav_links">Admins</a></li>
                    <li><a href="appointment.php" class="nav_links" id="current_active">Appointments</a></li>
                    <li><a href="emergency.php" class="nav_links">Emergency</a></li>
                    <li><a href="enquiry.php" class="nav_links">Enquiry</a></li>
                    <li><a href="../action/logoutaction.php" class="logout d-flex">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Logout</p>
                        </a></li>
                </ul>
            </nav>
        </header>
        <section class="section_datacontainer d-flex">
            <div class="admin_name_container">
                <h2>Hello, <?php echo $_SESSION["admin_fname"] ?></h2>
            </div>
            <div class="img_container">
                <img src="../images/adminappointment.jpg" alt="">
            </div>
            <div class="table_container d-flex">
                <div class="table">
                    <div class="table_caption">
                        <h2>Appointment Section</h2>
                    </div>
                    <table class="table-content">
                        <thead>
                            <tr>
                                <th>Appointment Number</th>
                                <th>Appointment For</th>
                                <th>Patient Name</th>
                                <th>Doctor Preferred</th>
                                <th>Booking Date</th>
                                <th>Bookin Time</th>
                                <th>Mobile</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Doctor Assigned</th>
                                <th>Assigned Date</th>
                                <th>Assigned Time</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--    =================================
                            code section
                            ================================= -->
                            <?php
                            include '../action/connection.php';

                            $select_appointment = "SELECT * FROM appointment_form";
                            $process_query = mysqli_query($connect_to, $select_appointment) or die($connect_to);

                            while ($result = mysqli_fetch_array($process_query)) {
                            ?>
                                <tr>
                                    <td><?php echo $result["Appointment_id"] ?></td>
                                    <td><?php echo $result["Service_name"] ?></td>
                                    <td><?php echo $result["Patient_name"] ?></td>
                                    <td><?php echo $result["Doctor_preference"] ?></td>
                                    <td><?php echo $result["Sys_date"] ?></td>
                                    <td><?php echo $result["Sys_time"] ?></td>
                                    <td><?php echo $result["Patient_phone"] ?></td>
                                    <td><?php echo $result["Patient_age"] ?></td>
                                    <td><?php echo $result["Patient_gender"] ?></td>
                                    <td><?php echo $result["Patient_address"] ?></td>
                                    <td><?php echo $result["Doctor_assigned"] ?></td>
                                    <td><?php echo $result["Appointment_date"] ?></td>
                                    <td><?php echo $result["Appointment_time"] ?></td>


                                    <td><a href="editappointmentform.php?appointment_id=<?php echo $result["Appointment_id"] ?>" class="edit"><i class="fa-solid fa-file-pen"></i></a></td>
                                    <td><a href="../action/deleteappointmentaction.php?appointment_id=<?php echo $result["Appointment_id"] ?>" class="delete"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <!--    =================================
                            code section
                            ================================= -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--    =================================
        footer section
        ================================= -->
        <section class="section_footer d-flex" id="contact">
            <div class="homelinks d-flex">
                <div class="social_links d-flex">
                    <div class="social_container fb d-flex">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                    </div>
                    <div class="social_container insta d-flex">
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                    </div>
                    <div class="social_container tweet d-flex">
                        <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="https://twitter.com/" target="_blank">Twitter</a>
                    </div>
                    <div class="social_container ytube d-flex">
                        <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
                        <a href="https://www.youtube.com/" target="_blank">YouTube</a>
                    </div>
                    <div class="social_container admin d-flex">
                        <a href="adminlogin.php" target="_blank"><i class="fas fa-user-lock"></i></a>
                        <a href="adminlogin.php" target="_blank">Admin</a>
                    </div>
                </div>
                <div class="home_nav_links">
                    <ul class="d-flex">
                        <li><a href="admins.php">Admins</a></li>
                        <li><a href="appointment.php">Appointments</a></li>
                        <li><a href="emergency.php">Emergency</a></li>
                        <li><a href="enquiry.php">Enquiry</a></li>
                        <li><a href="../action/logoutaction.php">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright_credits d-flex">
                <p>MAX24x7 &copy;<span> <a href="#" id="github_link"> manitosh paul</a>, </span> 2023</p>
            </div>
        </section>
        <!--    =================================
        footer section  ends
        ================================= -->
    </div>
    <script src="../js/adminemergency.js"></script>
</body>

</html>