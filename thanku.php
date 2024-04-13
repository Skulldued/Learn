<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();
ob_start();
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Thank You</title>
    <style>
        .set-bg-thanku{
            background-image: url("./assets/thanku-bg.png");
            background-size: cover;
            height: 350px;
            /* background-position: center; */
        }
        @media (min-width:0px) and (max-width:576px) {
            .set-bg-thanku{
                background-image: url("./assets/thanku_2.png");
                background-size: cover;
            }
            .hiee{
                display: none;
            }
            .sm-sss{
                margin: 90px 0px 50px 0px;
            }
        }
    </style>
    <!-- Favicon Icon -->
    <?php include ("./includes/link.php"); ?>
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <?php include ("includes/header.php"); ?>
        <!--Form Back Drop-->
        <div class="container-fluid set-bg-thanku">
            <div class="row">
                <div class="col-12 d-flex justify-content-center flex-column align-items-center ">
                    <div class="my-3">
                        <img src="./assets/message_icon.png" class="hiee"  alt="message_icon">
                    </div>
                    <div>
                        <h1 class="text-white text-center sm-sss">THANK YOU</h1>
                    </div>
                    <div class="para-thanku">
                        <p class="text-dark text-sm-center fw-bolder fs-3">Your Message has been sent.We'll be in touch shortly to
                            answer all your question!!</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-back-drop"></div>


        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-md-6 my-4 d-flex justify-content-center ">
                    <img src="./assets/thank.svg" width="350px" alt="left-side">
                </div>
                <div class="col-12 col-md-6 my-4">
                    <div style="margin: 10px 20px;">

                        <?php echo $_SESSION["response"]; ?>
                    </div>
                </div>
            </div>
        </div>




        <!-- footer area start -->
        <?php include ("./includes/footer.php"); ?>
        <!-- footer area end -->


    </div>
    <!--End pagewrapper-->



    <?php include ("./includes/script.php"); ?>

</body>

</html>