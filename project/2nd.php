<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
   </head>
<body>
    <!-- courses section starts  -->

<section class="courses">

<h1 class="heading">latest courses</h1>

<div class="box-container">

   <?php
      $select_courses = $conn->prepare("SELECT * FROM `playlist2` WHERE status = ? ORDER BY date DESC LIMIT 6");
      $select_courses->execute(['active']);
      if($select_courses->rowCount() > 0){
         while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
            $course_id = $fetch_course['id'];

            $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
            $select_tutor->execute([$fetch_course['tutor_id']]);
            $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
   ?>
   <div class="box">
      <div class="tutor">
         <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
         <div>
            <h3><?= $fetch_tutor['name']; ?></h3>
            <span><?= $fetch_course['date']; ?></span>
         </div>
      </div>
      <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
      <h3 class="title"><?= $fetch_course['title']; ?></h3>
      <a href="playlist2.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no courses added yet!</p>';
   }
   ?>

</div>

<div class="more-btn">
   <a href="courses2.php" class="inline-option-btn">view more</a>
</div>

</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>