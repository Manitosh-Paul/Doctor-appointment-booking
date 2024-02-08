<?php

session_start();

include 'connection.php';

if (isset($_POST["submit"])) {
    $admin_log_email = $_POST["email"];
    $admin_log_pass = $_POST["pass"];

    $select = "SELECT admin_email,admin_password,Admin_fname FROM max_admin where admin_email='$admin_log_email'";

    $process_query = mysqli_query($connect_to, $select);

    if ($res = mysqli_fetch_array($process_query)) {
        $verify_password = password_verify($admin_log_pass, $res['admin_password']);
        if ($verify_password) {
            $_SESSION["admin_fname"] = $res['Admin_fname'];
            $_SESSION["Admin_email"] = $res['admin_email'];
            header("Location:../admin/emergency.php");
        } else {
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Max24x7 | Admin Signin</title>
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
                            <p>Invalid Credentials!</p>
                            <button><a href="../adminlogin.php">Ok</a></button>
                        </div>
                        <picture>
                            <source media="(max-width: 426px)" srcset="../images\responsive_img\admin_login\admin320w.png">
                            <source media="(max-width: 768px)" srcset="../images\responsive_img\admin_login\admin768w.png">
                            <source media="(max-width: 1024px)" srcset="../images\responsive_img\admin_login\admin1024w.png">
                            <img src="../images\responsive_img\admin_login\admin1400w.png" alt="bg-image">
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
                        top: -20%;
                        left: 50%;
                        transform: translateX(-50%);
                        background-color: var(--secondary);
                        border-bottom-left-radius: 1rem;
                        border-bottom-right-radius: 1rem;
                        border: 2px solid var(--text);
                        transition: all 0.2s linear;
                        animation: slide_down;
                        animation-duration: 1s;
                        animation-iteration-count: 1;
                        animation-fill-mode: forwards;
                    }

                    @keyframes slide_down {
                        from {
                            top: -20%;
                            opacity: 0;
                            visibility: hidden;
                            pointer-events: none;
                        }

                        to {
                            top: 0;
                            opacity: 1;
                            visibility: visible;
                            pointer-events: auto;
                        }
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
    } else {
        header("Location:statuserror/error403.html");
    }
} else {
    header("Location:statuserror/error403.html");
}
