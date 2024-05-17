<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_users.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:index.php');

      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Now</title>
	<link rel="stylesheet" type="text/css" href="css/reg_style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="image/wave.png">
	<div class="container">
		<div class="img">
			<img src="image/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="image/avatar.svg">
				<h2 class="title">Welcome</h2>
				<h5 class="err">
				<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span class="err-msg2">'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
				
				</h5>
           		
					  <div class="input-div two">
					  <div class="i">
           		   		<i class="fa fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" id="" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<a href="register_form.php">Don't Have Acount ? Click Here</a>
            	<input type="submit" class="btn" name="submit" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/reg.js"></script>
</body>
</html>
