<?php
session_start();
if (!isset($_SESSION["admin_fname"])) {
    header("Location:statuserror/error401.html");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Max24x7 | Admin-Edit Appointments</title>

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
        <link rel="stylesheet" href="../css/editappointmentform.css?v= <?php echo time(); ?>">
        <link rel="stylesheet" href="../css/responsive/message.css?v= <?php echo time(); ?>">
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
            <!--    =================================
        header section
        ================================= -->
            <header class="d-flex">
                <div class="logo">
                    <img src="../images/logo/MAX24x7logo.png" alt="logo" class="p-left">
                </div>
                <a href="appointment.php" class="open_close_btn p-right">
                    <i class="fa-solid fa-xmark nav-close"></i>
                </a>
            </header>
            <!--    =================================
        header section ends
        ================================= -->
            <!--    =================================
        edit appointment section
        ================================= -->
            <section class="section_appointment d-flex">
                <div class="message d-flex">
                    <p>Confirm changes.</p>
                    <div class="btns_container d-flex">
                        <button form="connect_submit" type="submit" name="submit" class="btns confirm_btn">Ok</button>
                        <div class="btns btn_cancel" id="btn_cancel">Cancel</div>
                    </div>
                </div>
                <div class="img_container">
                    <img src="../images/Time management-amico.png" alt="appointment">
                </div>
                <div class="form_container d-flex">
                    <!--    =================================
                    Code section
                    ================================= -->
                    <?php
                    include '../action/connection.php';

                    $appointment_id = $_GET["appointment_id"];

                    if (isset($appointment_id)) {

                        $select_particular = "SELECT * FROM appointment_form where Appointment_id=$appointment_id";
                        $process_the_query = mysqli_query($connect_to, $select_particular);

                        if ($fetch_result = mysqli_fetch_array($process_the_query)) {
                    ?>

                            <form action="../action/editappointmentaction.php" method="get" class="d-flex" id="connect_submit">
                                <div class="input_data_container d-flex">
                                    <div class="left_input_data d-flex">
                                        <div class="label_input_container" style="display:none;">
                                            <label for="a_id">Appointment Id <span style="color: red;">*</span></label>
                                            <input type="text" name="a_id" id="a_id" autocomplete="off" value="<?php echo $fetch_result["Appointment_id"] ?>" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="s_name">Appointment For <span style="color: red;">*</span></label>
                                            <input type="text" name="s_name" id="s_name" autocomplete="off" value="<?php echo $fetch_result["Service_name"] ?>" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="name">Patient Name <span style="color: red;">*</span></label>
                                            <input type="text" name="name" id="name" placeholder="Patient's name" value="<?php echo $fetch_result["Patient_name"] ?>" autocomplete="off" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="opt">Doctor Preffered <span style="color: red;">*</span></label>
                                            <select name="opt" id="opt" required>
                                                <option value="<?php echo $fetch_result["Doctor_preference"] ?>" selected><?php echo $fetch_result["Doctor_preference"] ?></option>
                                                <?php 
                                                include '../doctors.php';
                                                ?>
                                            </select>
                                        </div>
                                        <div class="label_input_container">
                                            <label for="phone">Phone Number <span style="color: red;">*</span></label>
                                            <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="phone" id="phone" value="<?php echo $fetch_result["Patient_phone"] ?>" placeholder="Phone Number/Mobile Number" autocomplete="off" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="usr_sys_date">Booking Date <span style="color: red;">*</span></label>
                                            <input type="text" name="usr_sys_date" id="usr_sys_date" value="<?php echo $fetch_result["Sys_date"] ?>" placeholder="Booking Date" autocomplete="off" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="usr_sys_time">Booking time <span style="color: red;">*</span></label>
                                            <input type="text" name="usr_sys_time" id="usr_sys_time" value="<?php echo $fetch_result["Sys_time"] ?>" placeholder="Booking Time" autocomplete="off" readonly style="cursor:not-allowed;">
                                        </div>
                                    </div>
                                    <div class="right_input_data d-flex">
                                        <div class="label_input_container">
                                            <label for="age">Age <span style="color: red;">*</span></label>
                                            <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="age" id="age" autocomplete="off" value="<?php echo $fetch_result["Patient_age"] ?>" placeholder="Enter your age" readonly style="cursor:not-allowed;">
                                        </div>
                                        <div class="label_input_container">
                                            <label for="gender_opt">Gender <span style="color: red;">*</span></label>
                                            <select name="gender_opt" id="gender_opt" readonly style="cursor:not-allowed;">
                                                <option value="<?php echo $fetch_result["Patient_gender"] ?>" selected><?php echo $fetch_result["Patient_gender"] ?> </option>
                                            </select>
                                        </div>
                                        <div class="label_input_container">
                                            <label for="address">Address in short<span style="color: red;">*</span></label>
                                            <input type="text" name="address" value="<?php echo $fetch_result["Patient_address"] ?>" id="address" placeholder="House No./House(apartment) name/city " autocomplete="off" required>
                                        </div>
                                        <div class="label_input_container">
                                            <label for="ass_opt">Doctor Assigned <span style="color: red;">*</span></label>
                                            <select name="ass_opt" id="ass_opt" required>
                                                <option value="" selected hidden>--Select--</option>
                                                <?php 
                                                include '../doctors.php';
                                                ?>
                                            </select>
                                        </div>
                                        <div class="label_input_container">
                                            <label for="ass_date">Assigned Date <span style="color: red;">*</span></label>
                                            <input type="date" name="ass_date" id="ass_date" autocomplete="off" required>
                                        </div>
                                        <div class="label_input_container">
                                            <label for="ass_time">Assigned time <span style="color: red;">*</span></label>
                                            <input type="time" name="ass_time" id="ass_time" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="update">
                                    <div class="illusion_update" type="submit" onclick="show_msg()">Update</div>
                                </div>
                            </form>
                    <?php
                        }
                    } else {
                        header("Location:statuserror/error404.html");
                    }
                    ?>
                </div>
            </section>
            <!--    =================================
        edit appointment section ends
        ================================= -->
        </div>

        <!--    =================================
        javascript
        ================================= -->
        <script>
            const btn = document.querySelector(".update .illusion_update");
            const sec = document.querySelector(".section_appointment");
            const btn_cancel = document.querySelector("#btn_cancel");
            btn_cancel.addEventListener("click", () => {
                if (sec.classList.contains('messageactive')) {
                    sec.classList.remove('messageactive');
                }
            })

            function show_msg() {
                sec.classList.add('messageactive');
            }
        </script>
        <!--    =================================
        javascript
        ================================= -->
    </body>

    </html>
<?php
}
?>