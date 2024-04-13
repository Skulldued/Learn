<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery </title>
    <link rel="stylesheet" href="./lightbox.css">
    <?php include("./includes/link.php"); ?>
    <style>
        .container-set{
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 8%;
        }
        .gallery{
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
            grid-gap: 30px;
        }
        .gallery img{
            width: 100%;
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
            <h1 class=" add-p-ser dessss ">Gallery</h1>
        </div>
    </div>

<div class="container-set my-3 my-lg-5">
    
      <div class="gallery">
        <a href="./assets/g1.jpeg" data-lightbox="models" data-title="1" >
            <img src="./assets/g1.jpeg" height="350px"  alt="">
        </a>
        <a href="./assets/g2.jpeg" data-lightbox="models" data-title="2">
            <img src="./assets/g2.jpeg" height="350px" alt="">
        </a>
        <a href="./assets/g3.jpeg" data-lightbox="models" data-title="3">
        <img src="./assets/g3.jpeg" height="350px" alt="">
        </a>
        <a href="./assets/g4.jpeg" data-lightbox="models" data-title="4">
        <img src="./assets/g4.jpeg" height="350px" alt="">
        </a>
        <a href="./assets/g5.jpeg" data-lightbox="models" data-title="5">
        <img src="./assets/g5.jpeg"  height="350px" alt="">
        </a>
        <a href="./assets/g6.jpeg" data-lightbox="models" data-title="6">
        <img src="./assets/g6.jpeg" height="350px" alt="">
        </a>
        <a href="./assets/g7.jpeg" data-lightbox="models" data-title="6">
        <img src="./assets/g7.jpeg"  height="350px" alt="">
        </a>
       
      </div>
    
</div>
    


    <?php include("./includes/footer.php"); ?>
 <script src="./lightbox-plus-jquery.min.js">

 </script>
    <?php include("./includes/script.php"); ?>
</body>

</html>