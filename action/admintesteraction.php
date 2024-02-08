<?php
session_start();

include 'connection.php';

try {
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $pass = $_POST["pass"];
        $phone = $_POST["phone"];

        $encrypt_password = password_hash($pass, PASSWORD_BCRYPT);

        $insert_admin = "insert into max_admin(admin_email, Admin_fname, Admin_lname, admin_password, Admin_phone) values('$email', '$fname', '$lname', '$encrypt_password', '$phone')";

        $process_insert = mysqli_query($connect_to, $insert_admin);

        if ($process_insert) {
            $_SESSION["admin_fname"] = $fname;
            header("Location:../adminlogin.php");
        } else {
            echo "error";
        }
    } else {
        header("Location:statuserror/error403.html");
    }
} catch (Exception $e) {
?>
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
        <!-- css links -->
        <link rel="stylesheet" href="../css/style.css?v= <?php echo time(); ?>">
        <!-- css links -->

        <!-- font awesome link -->
        <script src="https://kit.fontawesome.com/5b08bf92b7.js" crossorigin="anonymous"></script>
        <!-- font awesome link -->
    </head>

    <body>
        <div class="container">
            <section class="messgae_container">
                <div class="message d-flex">
                    <p>Email already exists.</p>
                    <button><a href="../admin/admintester.php">Try Again</a></button>
                </div>
                <picture>
                    <source media="(max-width: 426px)" srcset="../images\responsive_img\admintester_form\admin_tester_425w.png">
                    <source media="(max-width: 768px)" srcset="../images\responsive_img\admintester_form\admin_tester_768w.png">
                    <img src="../images\responsive_img\admintester_form\admin_tester_1400w.png" alt="bg-image">
                </picture>
                <div class="overlay"></div>
            </section>
        </div>

        <style>
            .d-flex {
                display: flex;
            }

            .messgae_container {
                position: relative;
                width: 100%;
                height: 100vh;
            }

            .messgae_container img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .message {
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                z-index: 99999;
                position: fixed;
                width: 30%;
                height: 20%;
                top: 0%;
                left: 50%;
                transform: translateX(-50%);
                background-color: var(--secondary);
                border-bottom-left-radius: 1rem;
                border-bottom-right-radius: 1rem;
                border: 2px solid var(--text);
            }

            .message p {
                color: var(--primary);
                font-size: 1.7rem;
                text-align: center;
            }

            .message button {
                border: none;
                outline: none;
                background-color: var(--primary);
                font-size: 1.5rem;
                font-weight: 500;
                color: var(--secondary);
                border-radius: 0.5rem;
            }

            .message button a {
                display: block;
                margin-right: 0;
                width: 100%;
                height: 100%;
                padding: 0.5rem 2rem;
            }

            .overlay {
                z-index: 1;
                width: 100%;
                height: 100vh;
                position: absolute;
                top: 0;
                left: 0;
                background-color: rgba(0, 35, 69, 0.5);
                backdrop-filter: blur(5px);
            }

            @media (max-width:1299px) {
                .message {
                    width: 40%;
                    height: 15%;
                }

                .message p {
                    font-size: 1.5rem;
                }

                .message button {
                    font-size: 1.3rem;
                }

            }

            @media (max-width:862px) {
                .message {
                    width: 40%;
                    height: 15%;
                }

                .message p {
                    font-size: 1.3rem;
                }

                .message button {
                    font-size: 1.2rem;
                }

            }

            @media (max-width:652px) {
                .message {
                    width: 60%;
                    height: 18%;
                }

                .message p {
                    line-height: 2.5rem;
                    font-size: 1.4rem;
                }

                .message button {
                    font-size: 1.4rem;
                }

            }
        </style>
    </body>

    </html>

<?php
}
