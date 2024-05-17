<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookiez</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="index.php" class="logo"> <i class="fas fa-book"></i> Bookiez </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="checkout.php" class="fas fa-eye"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>
            <a href="#contact">contact us</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
    <a href="#contact" class="fas fa-contact"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    
        

         <table>
            <nav><tr><td><h1 class="acc">Account</h1></td></tr></nav>
                <tr>
                    <td><h1 class="wel">Welcome <span><?php echo $_SESSION['user_name']; ?>
                    </span></h1></td>
                </tr>   

        <tr><td><a class="btn-group" href="login_form">login</a></td></tr>
        <tr><td><a class="btn-group" href="register_form">Register</a></td></tr>
        <tr><td><a class="btn-group" href="logout_form.php">Logout</a></td></tr>

        </table>
    </div>
</div>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>upto 75% off</h3>
            <p>Grab it now or offer will expire soon !</p>
            <a href="cart.php" class="btn">shop now</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="cart.php" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="cart.php" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="cart.php" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="cart.php" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="cart.php" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="cart.php" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over 500rs</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100% secure payments</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days return policy</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Most Popular books & Comics</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Amazing Spider-man</h3>
                    <div class="price">132rs<span>200rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Avengers</h3>
                    <div class="price">300rs <span>350rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Wonder Women Vol-3</h3>
                    <div class="price">200rs <span>300rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tinkel-Holilday Special</h3>
                    <div class="price">155rs <span>250rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Marvels Black Panther-Who is Black panther</h3>
                    <div class="price">355rs <span>430rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Marvels Deadpool</h3>
                    <div class="price">375rs <span>500rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 30.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Harry Potter And the Cursed Child</h3>
                    <div class="price">540rs <span>600rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 22.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Shrimad Bhagwag Gita</h3>
                    <div class="price">200rs <span>300rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 24.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Tukaram maharaj abhanga</h3>
                    <div class="price">322rs <span>400rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="cart.php" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="cart.php" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/book 28.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Great Indian Novel</h3>
                    <div class="price">310rs<span>450rs</span></div>
                    <a href="cart.php" class="btn">add to cart</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="username" name="" placeholder="enter your username" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>Animes manga Exclusive</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Naruto Vol-1</h3>
                    <div class="price">170rs <span>400rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 11.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Demon Slayer Vol-1</h3>
                    <div class="price">230rs <span>320rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 12.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Attack On Titan Vol-1,2,3</h3>
                    <div class="price">650rs <span>710rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 13.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Death Note Vol-13</h3>
                    <div class="price">380rs <span>423rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 14.jpg" alt="">
                </div>
                <div class="content">
                    <h3>One Piece Vol-57</h3>
                    <div class="price">450rs <span>500rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 15.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Jujutsu Kaisen Vol-16</h3>
                    <div class="price">290rs <span>350rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 16.jpg" alt="">
                </div>
                <div class="content">
                    <h3>One Punch Man Vol-1</h3>
                    <div class="price">180rs <span>300rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 17.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Black CLover Vol-4,5</h3>
                    <div class="price">345rs <span>460rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 18.jpg" alt="">
                </div>
                <div class="content">
                    <h3>ChainSawMan Vol-8</h3>
                    <div class="price">420rs <span>500rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="cart.php" class="swiper-slide box">
                <div class="image">
                    <img src="images/book 20.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Your Name</h3>
                    <div class="price">350rs <span>460rs</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->

<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>Never gonna miss this offer.</p>
        <a href="cart.php" class="btn">shop now</a>
    </div>

    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>Harsh Shukla</h3>
                <p>I Loved the books,they are lovely and at the  same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>Runal Bhosle</h3>
                <p>I Loved the books,they are lovely and at the same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>Yash Saundalkar</h3>
                <p>I Loved the books,they are lovely  and at the same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Soham Bhogle</h3>
                <p>I Loved the books,they are lovely  and at the same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>Atharva Patil</h3>
                <p>I Loved the books,they are lovely and at the same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>Murli Kishan</h3>
                <p>I Loved the books,they are lovely and at the same time the delivery is so fast.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Wonderfull stream of books</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Journey of manga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Happy,funny Comics</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>World of Anime</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Krishna Conciousness</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>



<!-- blogs section ends -->

<section class="contact" id="contact">
<h1 class="heading"> <span>Contact Us</span> </h1>
<?php  
 include 'config.php';
 
 $user_id = $_SESSION['user_id'];
 if(!isset($user_id)){
    header('location:login_form.php');
 }
 
 if(isset($_POST['send'])){
 
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
 
    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
 
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
       mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
    }
 
 }
 
 ?>
   <form action="index.php" method="post">
      <h1 style=font-size: 21px;
       color: lightgreen;> say something!</h1>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
      
   </form>

</section>





<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 8356059916 </a>
            <a href="#"> <i class="fas fa-phone"></i> 9594332128 </a>
            <a href="#" style="text-transform:none;"> <i class="fas fa-envelope"></i> nikhilgholap1304@gmail.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>mr. nikhilgholap</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div>
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>