<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

  <!-- home section starts-->

  <section class="home" id="home">

<div class="content">
    <h3>the best courses you will find here</h3>
    <b><h2> Dr/ Eman Mahmoud A platform specialized in learning   chemistry for secondary Grades </b> </h2>
    <a href="#" class="btn">
        <span class="text text-1">learn more</span>
        <span class="text text-2" aria-hidden="true">learn more</span>
    </a>    
</div>

</section>

<!-- home section ends -->

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

     
    
      <?php
      
      ?>

      <div class="box">
         <h3 class="title">top lecture</h3>
         <div class="flex">
            <a href="index2.php?"><i class="fas fa-code"></i><span>1st secondary ,lecture 1</span></a>
            <a href="index3.php"><i class="fas fa-chart-simple"></i><span>2nd secondary ,lecture 1</span></a>
            <a href="index4.php"><i class="fas fa-pen"></i><span>3rd secondary ,lecture 1</span></a>
         
         </div>
      </div>

      <div class="box">
         <h3 class="title">our levels</h3>
         <div class="flex">
            <a href="grade.php"><i class="fab fa-1"></i><span>1st secondary</span></a>
            <a href="grade.php"><i class="fab fa-2"></i><span>2nd secondary</span></a>
            <a href="grade.php"><i class="fab fa-3"></i><span>3rd secondary</span></a>
   
         </div>
      </div>

     

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->



<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>