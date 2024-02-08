<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAX24x7-Website tester</title>
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
    <link rel="stylesheet" href="../css/admintesterstyle.css?v= <?php echo time(); ?>">
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/5b08bf92b7.js" crossorigin="anonymous"></script>
    <!-- font awesome link -->
</head>

<body>

    <script>
        alert('Since this is a project website and there can be many tester admins. Hence, DO NOT PROVIDE YOUR ACTUAL DETAILS. EXCEPT FOR YOUR EMAIL ID AS YOU CAN REGISTER WITH A UNIQUE EMAIL ONLY.');
    </script>

    <div class="container">
        <section id="admintester" class="section_admintester d-flex">
            <div class="img_container">
                <img src="../images/Version control-amico.png" alt="tester img" class="enquiryabout">
            </div>
            <div class="admintester_form d-flex">
                <form action="../action/admintesteraction.php" method="post" class="admintester_form_container d-flex">
                    <div class="label_input_container">
                        <h2>Become a website tester.</h2>
                    </div>
                    <div class="label_input_container">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input type="email" name="email" id="email" placeholder="E.g. example@gmail.com" autocomplete="off" required>

                    </div>
                    <div class="label_input_container">
                        <label for="fname">First Name <span style="color: red;">*</span></label>
                        <input type="text" name="fname" id="fname" placeholder="E.g. Joe" autocomplete="off" required>
                    </div>
                    <div class="label_input_container">
                        <label for="lname">Last Name <span style="color: red;">*</span></label>
                        <input type="text" name="lname" id="lname" placeholder="E.g. Walton" autocomplete="off" required>
                    </div>
                    <div class="label_input_container">
                        <label for="pass">Admin's Password <span style="color: red;">*</span></label>
                        <div class="password_container">
                            <input class="style_pass" type="password" name="pass" id="pass" maxlength="16" placeholder="*******" autocomplete="off" required>
                            <i class="fa-solid fa-eye icon_see" id="icon_eye" onclick="see()"></i>
                            <i class="fa-sharp fa-solid fa-eye-slash icon_see" id="icon_eye_cross" style="display:none" onclick="seenot()"></i>
                        </div>
                        <br>
                        <div id="p_text"></div>
                    </div>
                    <div class="label_input_container">
                        <label for="phone">Phone Number <span style="color: red;">*</span></label>
                        <input type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" name="phone" id="phone" placeholder="Do not provide actual phone number" autocomplete="off" required>
                    </div>
                    <div class="label_input_container submit">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        const icon_eye = document.getElementById("icon_eye");
        const icon_eye_cross = document.getElementById("icon_eye_cross");
        var pass = document.getElementById("pass");

        function see() {
            icon_eye.style.display = "none";
            icon_eye_cross.style.display = "block";
            pass.type = "text";
        }

        function seenot() {
            icon_eye.style.display = "block";
            icon_eye_cross.style.display = "none";
            pass.type = "password";
        }
    </script>
    <script src="../js/admintester.js"></script>
</body>

</html>