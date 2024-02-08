<?php

include 'connection.php';
session_start();
if (!isset($_SESSION["admin_fname"])) {
    header("Location:../adminlogin.php");
}
$emergency_id = $_GET["emergency_id"];
if (isset($emergency_id)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Max24x7 | Admin - Confirm Delete</title>
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
                    <p>Confirm delete</p>
                    <div class="btns_container">
                        <button><a href="confirmemergencydelete.php?confirm=<?php echo $emergency_id ?>">Ok</a></button>
                        <button id="cancel_btn"><a href="../admin/emergency.php">Cancel</a></button>
                    </div>
                </div>
                <picture>
                    <source media="(max-width: 426px)" srcset="../images\responsive_img\emergency_delete\emergency_delete_425w.png">
                    <source media="(max-width: 768px)" srcset="../images\responsive_img\emergency_delete\emergency_delete_768w.png">
                    <img src="../images\responsive_img\emergency_delete\emergency_delete_1400w.png" alt="bg-image">
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

            .message .btns_container {
                width: 60%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .message .btns_container button {
                border: none;
                outline: none;
                background-color: var(--primary);
                font-size: 1.5rem;
                font-weight: 500;
                color: var(--secondary);
                border-radius: 0.5rem;
            }

            #cancel_btn {
                border: 1px solid var(--primary);
                background: transparent;
                margin-left: 3rem;
            }

            #cancel_btn a {
                color: var(--primary);
            }

            .message .btns_container button a {
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

                .message .btns_container button {
                    font-size: 1.4rem;
                }

            }

            @media (max-width:470px) {
                .message {
                    width: 80%;
                }

            }
        </style>
    </body>

    </html>
<?php
} else {
    header("Location:statuserror/error403.html");
}
?>