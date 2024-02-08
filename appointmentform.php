<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAX24x7 | Appointment</title>
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

    <!-- resposnive links -->
    <link rel="stylesheet" href="css/responsive/quicklinks.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/navlinks.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/sectionfooter.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/message.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/appointmentform.css?v= <?php echo time(); ?>">
    <!-- resposnive links -->
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
        <header>
            <div class="quick_contact">
                <div class="subtag">
                    <p>"health is real wealth"</p>
                </div>
                <div class="quickphone d-flex">
                    <a href="tel:+919876543210"><i class="fa-solid fa-phone"></i></a>
                    <a href="tel:+919876543210">
                        <p>9876543210</p>
                    </a>
                </div>
                <div class="quickmail">
                    <a href="mailto:manitoshraj.mj121@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                    <a href="mailto:manitoshraj.mj121@gmail.com">info@max24x7.com</a>
                </div>
                <div class="quicksocial">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <nav class="navbar">
                <div class="logo_container">
                    <img src="images/logo/MAX24x7logo.png" alt="MAX24x7logo" class="p-left">
                </div>
                <div class="navlinks">
                    <ul>
                        <li><a href="index.php" class="navitems home">home</a></li>
                        <li><a href="index.php#services" class="navitems services">services</a></li>
                        <li><a href="index.php#enquiry" class="navitems enquiry">enquiry</a></li>
                        <li><a href="index.php#contact" class="navitems">contact</a></li>
                        <li class="p-right"><a href="emergencyform.php" class="emergency">emergency</a></li>
                    </ul>
                </div>
                <div class="open_close_btn p-right">
                    <i class="fa-solid fa-bars nav-menu"></i>
                    <i class="fa-solid fa-xmark nav-close"></i>
                </div>
            </nav>
        </header>
        <!--    =================================
        header section ends
        ================================= -->
        <!--    =================================
        appointment section
        ================================= -->
        <section id="appointment" class="section_appointment">
            <div class="img_container">
                <img src="images/Time management-amico.png" alt="appointment">
            </div>
            <div class="form_container d-flex">
                <form action="action/bookappointment.php" method="post" class="d-flex">
                    <div class="left_input_data d-flex">
                        <!--    =================================
                        Code to put the particular service clicked
                        ================================= -->
                        <?php
                        $Service_name = $_GET["Service_name"];
                        ?>
                        <div class="label_input_container">
                            <label for="s_name">Appointment For <span style="color: red;">*</span></label>
                            <input type="text" name="s_name" id="s_name" autocomplete="off" value="<?php echo $Service_name; ?>" readonly style="cursor:not-allowed;">
                        </div>
                        <div class="label_input_container">
                            <label for="name">Your Name <span style="color: red;">*</span></label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off" required>
                        </div>
                        <div class="label_input_container">
                            <label for="opt">Doctor Preference <span style="color: red;">*</span></label>
                            <select name="opt" id="opt" required>
                                <option value="" selected hidden>--Select--</option>
                                <?php 
                                include 'doctors.php';
                                ?>
                            </select>
                        </div>
                        <div class="label_input_container">
                            <label for="phone">Phone Number <span style="color: red;">*</span></label>
                            <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="phone" id="phone" placeholder="Phone Number/Mobile Number" autocomplete="off" required>
                        </div>
                        <div class="label_input_container" style="display: none;">
                            <label for="sys_date">System Date <span style="color: red;">*</span></label>
                            <input type="text" name="sys_date" id="sys_date" placeholder="System Date" autocomplete="off" required>
                        </div>
                        <div class="label_input_container" style="display: none;">
                            <label for="sys_time">system time <span style="color: red;">*</span></label>
                            <input type="text" name="sys_time" id="sys_time" placeholder="System Time" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="right_input_data d-flex">
                        <div class="label_input_container">
                            <label for="age">Age <span style="color: red;">*</span></label>
                            <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="age" id="age" autocomplete="off" placeholder="Enter your age">
                        </div>
                        <div class="label_input_container">
                            <label for="gender_opt">Gender <span style="color: red;">*</span></label>
                            <select name="gender_opt" id="gender_opt" required>
                                <option value="" selected hidden>--Select--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="label_input_container">
                            <label for="address">Address in short<span style="color: red;">*</span></label>
                            <input type="text" name="address" id="address" placeholder="House No./House(apartment) name/city " autocomplete="off" required>
                        </div>
                        <div class="label_input_container submit">
                            <button type="submit" name="submit" onclick="appointmentsetAndDisplay()">Submit</button>
                        </div>


                    </div>
                </form>
            </div>
        </section>
        <!--    =================================
        appointment section ends
        ================================= -->
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
        <!--    =================================
        style tag 
        ================================= -->
        <style>
            header {
                -webkit-box-shadow: 0px 3px 16px -5px rgba(7, 84, 156, 1);
                -moz-box-shadow: 0px 3px 16px -5px rgba(7, 84, 156, 1);
                box-shadow: 0px 3px 16px -5px rgba(7, 84, 156, 1);
            }
        </style>
        <!--    =================================
        style tag ends
        ================================= -->
        <!--    =================================
        script tag 
        ================================= -->
        <script src="js/navlinks.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/appointmentgetSysDateTime.js"></script>
        <!--    =================================
        script tag 
        ================================= -->
    </div>
    </div>
</body>

</html>