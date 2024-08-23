<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
 }else{
    $user_id = '';
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grades.css">
    
    <link rel="stylesheet" href="css/footer.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>
  

    <!-- about section ends -->

    <!-- subjects section starts -->

    <section class="youtube" id="youtube">

        <h1 class="heading">our Grades</h1>

        <div class="box-container">

            <div class="box">
                <div class="image shine">
                    <img src="images/about-1.jpg" alt="">
                    <h3>09 may 2024</h3>
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="Youtube.html"><i class="fas fa-user"></i>by admin</a>
                    </div>
                    <h3>1st secondary</h3>
                    <p>Here you can see your homework answer to know your mistake and learn from it </p>
                    <a href="index2.php" class="btn">
                        <span class="text text-1">Watch now</span>
                        <span class="text text-2" aria-hidden="true">Click Here</span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <img src="images/about-1.jpg" alt="">
                    <h3>09 may 2024</h3>
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fas fa-user"></i>by admin</a>
                    </div>
                    <h3>2nd secondary</h3>
                    <p>Here you can see your homework answer to know your mistake and learn from it </p>
                    <a href="index3.php" class="btn">
                        <span class="text text-1">Watch Now</span>
                        <span class="text text-2" aria-hidden="true">Click Here</span>
                    </a>
                </div>
            </div>

            <div class="box">
                <div class="image shine">
                    <img src="images/about-1.jpg" alt="">
                    <h3>09 may 2024</h3>
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#"><i class="fas fa-user"></i>by admin</a>
                    </div>
                    <h3>3rd secondary</h3>
                    <p>Here you can see your homework answer to know your mistake and learn from it </p>
                    <a href="index4.php" class="btn">
                        <span class="text text-1">Watch Now</span>
                        <span class="text text-2" aria-hidden="true">Click Here</span>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <!-- subject section ends -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    <?php include 'components/footer.php'; ?>

    <script src="js/script.js"></script>
  
</body>
</html>
 