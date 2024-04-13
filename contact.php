<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include("./includes/link.php"); ?>
    <style>
        .set-ddj {
            margin: 0px;
        }

        .ri {
            padding: 0px 0px 0px 20px;
        }

        a {
            color: black;
        }

        .set-www {
            width: 100%;
            padding: 8px 10px;
            border-radius: 5px;
        }

        .btn-form {
            width: 100%;
            padding: 8px;
            background-color: #6161ef;
            transition: 0.6s;
            border: 0;
            outline: 0;
        }

        .btn-form:hover {
            background-color: red;
            border: 0;
            border-radius: 25px;
            outline: 0;
            color: white;
        }
        .card-rr{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .heading-ri{
            width: 350px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 10px 10px 20px 10px;
        }
        @media (min-width:0px) and (max-width:576px){
            .set-cont-wi{
                width:330px;
                height: 350px;
            }
        }
        @media (min-width:576px) and (max-width:768px){
            .set-cont-wi{
                width:350px;
                height: 350px;
            }
        }
        @media (min-width:768px) and (max-width:992px){
            .set-cont-wi{
                width:420px;
                height: 350px;
            }
        }
        @media (min-width:768px){
            .main-con{
                width:350px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar start -->
    <?php include("./includes/header.php"); ?>
    <!-- Navbar end -->
    <!-- Hero Section Start -->
    <div class="container-fluid set-all-bg">
        <div class="row">
            <h1 class=" add-p-ser dessss ">Contact</h1>
        </div>
    </div>


    <div class="container my-3 my-lg-5">
        <div class="row">
            <div class="col-12 sdgth col-md-6  my-3 my-md-3 my-lg-5" style="display: flex;flex-direction:column;justify-content: center;align-items: center;">
                <div class="main-con" >
                    <h3 class="text-center">Contact Us</h3>
                    <h3 class="text-center fw-bolder">Get in Touch</h3>
                    <p class="py-3">We love to hear what people have to say. If you have any questions or thoughts you’d like to share with us, please let us know. We’re eager to hear your opinion.</p>
                    <div class="mailmain d-flex align-items-center ">
                        <div class="le">
                            <div class="im">
                                <img src="./assets/mess.png" width="50px" alt="">
                            </div>
                        </div>
                        <div class="ri">
                            <p class="set-ddj">Email Us</p>
                            <a href="mailto:samajkalyannashamukti@gmail.com">samajkalyannashamukti@gmail.com</a>
                        </div>
                    </div>
                    <div class="mailmain d-flex align-items-center my-4">
                        <div class="le">
                            <div class="im">
                                <img src="./assets/telephone.png" width="50px" alt="">
                            </div>
                        </div>
                        <div class="ri">
                            <p class="set-ddj">Call Me</p>
                            <a href="tel:+91 9304516163">+91 9304516163</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 sdgthddd col-md-6">
                <img src="./assets//box-6.jpg" class="set-cont-wi" height="500px" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid my-4">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.357767788182!2d84.98881717517608!3d25.559761377479333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2ab66db17252b%3A0x67fbee78c49d2009!2sSamaj%20Kalyan%20Nasha%20Mukti%20Kendra%20%26%20Drug%20De-addiction%20Cum%20Rehabilitation%20Centre!5e0!3m2!1sen!2sin!4v1712743125530!5m2!1sen!2sin" style="border:0;" width="100%" height="450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container my-3 my-lg-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="main-start ">
                    <div class="heading">
                        <h4 class="text-center">Send Us Message</h4>
                        <h3 class="fw-bolder text-center pb-4">Let's Talk to Us</h3>
                    </div>
                    <div class="form-se">
                        <form action="./formhandler.php" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Name</label><br>
                                    <input type="text" name="name" id="name" placeholder="Name" class="set-www">
                                </div>
                                <div class="col-6">
                                    <label for="">Phone</label><br>
                                    <input type="text" id="phone" placeholder="Phone Number" name="phone" class="set-www">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="py-2">Email</label><br>
                                    <input type="email" name="email" placeholder="Email" id="email" class="set-www">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Message</label><br>
                                    <textarea name="message" id="message" rows="5" class="set-www" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn-form" onclick="return validate_form()">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card-rr">
                    <div class="heading-ri d-flex flex-column align-items-center">
                        <h3 class="py-3">Directions</h3>
                        <h2><a href="./contact.php">Visit Us</a></h2>
                        <div class="add d-flex">
                            <div class="lef">
                                <i class="fa-solid fa-location-dot fs-3"></i>
                            </div>
                            <div>
                                <p style="width: 250px;padding:0px 0px 0px 10px">

                                    DANAPUR NAUBATPUR ROAD BODHGWAN,
                                    SURYAMANDIR SHIVALA PAR,
                                    PATNA BIHAR 801113
                                </p>
                            </div>
                        </div>
                        <div class="mob d-flex " style="display: flex;justify-content: space-between;">
                            <div class="lef">
                            <i class="fa-solid fa-phone fs-3"></i>
                           
                            </div>
                            <div class="rig">
                            <a href="tel:
+91 9304516163">
                                    +91 9304516163</a>
                            </div>
                        </div>
                    </div>
                    <div class="social my-3">
                     <div class="heading">
                        <h3 class="text-center">Follow Our Social <br> Network</h3>
                     </div>
                     <div class="link d-flex justify-content-center">
                    <a href=""> <i class="fa-brands fa-facebook fs-2"></i> </a>
                    <a href=""> <i class="fa-brands fa-instagram fs-2 px-2"></i></a>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./includes/footer.php"); ?>
    <script>
        function validate_form(){
            var name = document.getElementById("name").value;
            var Number = document.getElementById("phone").value;
            var email =document.getElementById("email").value;
            var Message =document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
           if(!name){
            alert("Please Enter Name");
            return false;
           }else if(!namePattern.test(name)){
            alert("Enter Only Alphabets Name");
            return false;
           }
          else if(!Number){
            alert("Please Enter Phone Number");
            return false;
           }else if(!phoneRegex.test(Number)){
            alert("Enter Correct Number");
            return false;
           }else if(!email){
            alert("Enter Email Id");
            return false;
           }else if(!emailRegex.test(email)){
            alert("Enter Valid Email");
            return false;
           }else if(!Message){
            alert("Enter Message");
            return false;
           }
           
        }
    </script>
    <?php include("./includes/script.php"); ?>
</body>

</html>