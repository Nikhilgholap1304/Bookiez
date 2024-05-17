<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Now</title>
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
				<h4><?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
	  </h4>
				<h5 class="err">
				
				</h5>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="name" class="input" required>
           		   </div>
</div>
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
           		    	<input type="password" name="password" class="input" id="pswrd_1" required>
            	   </div>
            	</div>
				<div class="input-div cpass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm password</h5>
           		    	<input type="password" name="cpassword" class="input"
						id="pswrd_2" required>
            	   </div>
            	</div>
				<div class="options" style="text-align:right;
				                            margin-bottom: 12px;
											font-size: 0.9rem;
											color: #504848d1;
											font-size: 18px;
											color: #504848d1;
											transition: .3s;
											
											">
				<select class="slct" name="user_type" id="">
            	<option value="user">User</option>
            	<option value="admin">Admin</option>
				</select>
</div>
            	
            	<a href="login_form">Aready have acount ? Click here</a>
            	<input type="submit" class="btn" name="submit" value="Register" onkeyup="validatePassword();" >
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/reg.js"></script>
	<script>
	var password = document.getElementById("pswrd_1"),
	confirm_password = document.getElementById("pswrd_2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
