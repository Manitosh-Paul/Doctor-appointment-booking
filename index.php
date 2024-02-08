<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAX24x7</title>

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
    <link rel="stylesheet" href="css/responsive/sectionhome.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/sectionfeatures.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/sectionfooter.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/services.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/sectionenquiry.css?v= <?php echo time(); ?>">
    <link rel="stylesheet" href="css/responsive/message.css?v= <?php echo time(); ?>">
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
                        <li><a href="#services" class="navitems services">services</a></li>
                        <li><a href="#enquiry" class="navitems enquiry">enquiry</a></li>
                        <li><a href="#contact" class="navitems">contact</a></li>
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
        home section 
        ================================= -->
        <section id="home" class="section_home d-flex">
            <div class="polygon"></div>
            <div class="texthome d-flex">
                <h2 class="texthome1">providing high quality</h2>
                <h2 class="texthome2">treatement</h2>
                <div class="abouttext d-flex">
                    <p>MAX 24x7 Group has over two decades of experience in the healthcare sector,</p>
                    <p> and is known for providing quality healthcare and valuable experience to all domestic and
                        international patients.</p>
                    <p>Our healthcare offerings are supported by a team of </p>
                    <p>compassionate and dedicated medical professionals who have rich knowledge and experience in their
                        respective domains.</p>
                </div>
                <a href="emergencyform.php" class="emergency">emergency</a>
            </div>
            <div class="imagehome">
                <img src="images/Health professional team-amico.png" alt="" class="homedoctors">
                <img src="images/graph.png" alt="" class="graph">
            </div>
        </section>
        <!--    =================================
        home section  ends
        ================================= -->

        <!--    =================================
        features section
        ================================= -->
        <section class="section_features d-flex">
            <div class="features_container d-flex">
                <div class="featuresdiv d-flex">
                    <i class="fa-solid fa-truck-medical"></i>
                    <h3>24x7 Ambulance Available</h3>
                </div>
                <div class="featuresdiv d-flex">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>24x7 Emergency Service</h3>
                </div>
                <div class="featuresdiv d-flex">
                    <i class="fa-sharp fa-solid fa-house-medical-circle-check"></i>
                    <h3>ICU & Trauma Care</h3>
                </div>
            </div>

        </section>

        <!--    =================================
        features section  ends
        ================================= -->

        <!--    =================================
        services section
        ================================= -->

        <section id="services" class="section_services">
            <div class="service_heading d-flex">
                <h2>Center Of Excellence</h2>
            </div>

            <!--    =================================
        Code to get the services, provided by the hospital, from database
        ================================= -->

            <?php
            include 'action/connection.php';

            $select_services_provided = "SELECT * FROM services_provided";
            $processed_query = mysqli_query($connect_to, $select_services_provided);
            ?>
            <div class="services_container d-flex">
                <?php
                while ($result = mysqli_fetch_array($processed_query)) {
                ?>
                    <div class="service_item"><a href="appointmentform.php?Service_name=<?php echo urlencode($result['Service_name']) ?>">
                            <img src="images/<?php echo $result['Service_img'] ?>" alt="">
                            <div class="service_caption">
                                <h3><?php echo $result['Service_name'] ?></h3>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!--    =================================
        services section ends
        ================================= -->

        <!--    =================================
        enquiry section
        ================================= -->
        <section id="enquiry" class="section_enquiry d-flex">
            <div class="img_container">
                <img src="images/graph_light.png" alt="" class="graph">
                <img src="images/enquiryabout.png" alt="" class="enquiryabout">
            </div>
            <div class="enquiry_form d-flex">
                <form action="action/submitEnquiry.php" method="post" class="enquiry_form_container d-flex">
                    <div class="label_input_container">
                        <h2>Have Some Questions?</h2>
                    </div>
                    <div class="label_input_container">
                        <label for="opt">Enquiry For <span style="color: red;">*</span></label>
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
                        <button type="submit" name="submit" onclick="enquirysetAndDisplay()">Submit</button>
                    </div>
                </form>
            </div>
        </section>
        <!--    =================================
        enquiry section ends
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
                        <li><a href="#services">Services</a></li>
                        <li><a href="#enquiry">Enquiry</a></li>
                        <li><a href="mailto:manitoshraj.mj121@gmail.com">info@max24x7.com</a></li>
                        <li><a href="tel:+919876543210">9876543210</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright_credits d-flex">
                <p>MAX24x7 &copy;<span> <a href="#" id="github_link"> manitosh paul</a>, <a href="admin/admintester.php" id="tester">Be the website testor.</a> </span> 2023</p>
            </div>
        </section>
        <!--    =================================
        footer section  ends
        ================================= -->


        <!--    =================================
        script tag 
        ================================= -->
        <script src="js/navlinks.js"></script>
        <script src="js/sticky.js"></script>
        <script src="js/enquirygetSysDateTime.js"></script>
        <!--    =================================
        script tag 
        ================================= -->
    </div>
</body>

</html>