<?php

include 'config.php';
include 'headfoot.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login_form.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login_form.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bookiez Cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/cart_style.css">

</head>
<body>
<div class="container">

<div class="user-profile">

   <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>

   <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>
   <p> email : <span><?php echo $fetch_user['email']; ?></span> </p>
   <div class="flex">
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="option-btn">register</a>
      <a href="login_form.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
   </div>

</div>
<section class="footer">
<div class="credit"> created by <span>mr. nikhilgholap</span> | all rights reserved! </div>

</section>
    </body>
    </html>