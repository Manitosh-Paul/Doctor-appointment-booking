<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAX24x7 | Emergency</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <!-- favicon -->

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500&display=swap" rel="stylesheet">
    <!-- google fonts -->

    <!-- css links -->
    <link rel="stylesheet" href="css/style.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/emergencystyle.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/emergency.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/sectionfooter.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/message.css?v= <?php echo time(); ?>">
    <!-- css links -->

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/5b08bf92b7.js" crossorigin="anonymous"></script>
    <!-- font awesome link -->
</head>

<body>
    <div class="container">
        <section class="emergencycontainer d-flex">
            <div class="logo_container">
                <img src="images/logo/MAX24x7logo.png" alt="MAX24x7logo" class="p-left">
            </div>
            <div class="cancelbtn">
                <a href="index.php"><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="sq_polygon d-flex">
                <form action="action/submitemergency.php" method="post" class="emergency_form d-flex">
                    <div class="label_input_container">
                        <label for="opt">Emergency <span style="color: red;">*</span></label>
                        <select name="opt" id="opt" required>
                            <option value="" selected hidden>--Select--</option>
                            <optgroup label="Blood Availability">
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="AB+">AB+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="O-">O-</option>
                                <option value="AB-">AB-</option>
                            </optgroup>
                            <option value="ICU Availability">ICU Availability</option>
                            <option value="Ventilator">Ventilator</option>
                            <option value="Surgery">Surgery</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Neurosurgery">Neurosurgery</option>
                            <option value="Nephrology">Nephrology</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Gynecology&Obstetrics">Gynecology & Obstetrics</option>
                            <option value="Oncology">Oncology</option>
                            <option value="Physiotherapy">Physiotherapy</option>
                            <option value="Dialysis">Dialysis</option>
                        </select>

                    </div>
                    <div class="label_input_container">
                        <label for="name">Your Name <span style="color: red;">*</span></label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off" required>
                    </div>
                    <div class="label_input_container" style="display: none;">
                        <label for="sys_date">System Date <span style="color: red;">*</span></label>
                        <input type="text" name="sys_date" id="sys_date" placeholder="System Date" autocomplete="off" required>
                    </div>
                    <div class="label_input_container" style="display: none;">
                        <label for="sys_time">system time <span style="color: red;">*</span></label>
                        <input type="text" name="sys_time" id="sys_time" placeholder="System Time" autocomplete="off" required>
                    </div>
                    <div class="label_input_container">
                        <label for="phone">Phone Number <span style="color: red;">*</span></label>
                        <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="phone" id="phone" placeholder="Phone Number/Mobile Number" autocomplete="off" required>
                    </div>
                    <div class="label_input_container submit">
                        <button type="submit" name="submit" onclick="setAndDisplay()">Submit</button>
                    </div>
                </form>
            </div>
            <div class="emergency_illustration">
                <img src="images/graph_light.png" alt="" class="graph">
                <img src="images/emergency.png" alt="" class="emergency_img">
            </div>
        </section>

        <!--    =================================
        footer section
        ================================= -->
        <section class="section_footer d-flex">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#services">Services</a></li>
                        <li><a href="index.php#enquiry">Enquiry</a></li>
                        <li><a href="mailto:manitoshraj.mj121@gmail.com">info@max24x7.com</a></li>
                        <li><a href="tel:+919876543210">9876543210</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright_credits d-flex">
                <p>MAX24x7 &copy;<span> <a href="#" id="github_link"> manitosh paul</a>, <a href="admin/admintester.php" id="tester">Be the website testor.</a></span>2023</p>
            </div>
        </section>
        <!--    =================================
        footer section  ends
        ================================= -->
        <script src="js/emergencygetSysDateTime.js"></script>
    </div>

</body>

</html>