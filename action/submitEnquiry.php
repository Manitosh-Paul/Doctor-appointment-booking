<?php
include 'connection.php';
session_start();
if (!isset($_SESSION["admin_fname"])) {
    header("Location:../adminlogin.php");
}
if (isset($_POST["submit"])) {
    $opt = $_POST["opt"];
    $name = $_POST["name"];
    $sys_date = $_POST["sys_date"];
    $sys_time = $_POST["sys_time"];
    $phone = $_POST["phone"];

    $insert_query = "INSERT INTO enquiry_form(Main_service_name, Client_name, Asked_date, Asked_time, Client_phone) VALUES ('$opt','$name',' $sys_date','$sys_time','$phone')";

    $process_query = mysqli_query($connect_to, $insert_query);

    if ($process_query) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>MAX24x7</title>
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
                        <p>We will get back to you soon</p>
                        <button><a href="../index.php#enquiry">Ok</a></button>
                    </div>

                    <picture>
                        <source media="(max-width: 426px)" srcset="../images/responsive_img/enquiry_form/enquiry_form_320w.png">
                        <source media="(max-width: 768px)" srcset="../images/responsive_img/enquiry_form/enquiry_form_768w.png">
                        <source media="(max-width: 1200px)" srcset="../images/responsive_img/enquiry_form/enquiry_form_1024w.png">
                        <img src="../images/responsive_img/enquiry_form/enquiry_form_1400w.png" alt="bg-image">
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
    header("Location:statuserror/error403s.html");
}
?>