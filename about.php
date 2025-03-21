<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about me</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="c3b7e25f-ed76-42d2-8f18-5f17b32b34a4.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Why Choose juURA Collection?<br>
1. Unique Designs: Discover exclusive, trendy pieces that stand out.<br>

2. High Quality: Enjoy premium fabrics and durable, comfortable clothing.<br>

3. Ethical Fashion: Shop with confidence knowing our practices are sustainable and ethical.<br>

4. Personal Service: Our dedicated team is here to assist with all your fashion needs.<br>

5. Affordable Luxury: Get chic, high-end fashion at prices you'll love.<br>

6. For Every Occasion: Find the perfect outfit for any event, from casual to formal.<br>

7. Fast Shipping: Enjoy quick delivery and hassle-free returns.<br>

Join the Mabel's Collection community and elevate your style with confidence. Thank you for choosing us!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Albert (3).JPG" alt="">
         <p>I'm Albert and I recommend juURA Collection to you. Best in the world</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Prah Albert</h3>
      </div>

      <div class="box">
         <img src="images/Ace.JPG" alt="">
         <p>I'm Gideon and I recommend juURA Collection to you. Best in the world</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Appau Gideon</h3>
      </div>

      <div class="box">
         <img src="images/Mica.JPG" alt="">
         <p>I'm Mica and I recommend juURA Collection to you. Best in the world</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nduamon Mica</h3>
      </div>

     
     
      
      
   </div>

</section><br><br><br><br><br><br><br><br><br><br><br><br><br><br>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>