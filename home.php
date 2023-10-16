<?php
include('./DbConnector/connect.php');
include('./functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagination</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href="style.css">
    
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black">
  <!--navbar-->
  <header class="header">
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
   <img src="./images/Logo.jpeg" alt="" class="logo">
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link-home active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#category">categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price</a>
        </li>
        
      </ul>
      <form class="d-flex search-form" role="search">
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>
  </div>
</nav>
  </div>
  </header>
  <!--home section start-->
<section class="home" id="home">
  <div class="content">
    <h3>Imagination</h3>
    <p>Free your self and share your story with the world</p>
   <a href="#" class="btn bg-info">View more</a>
  </div>
</section>
   <!--home section end-->
     <!--about section start-->
<section class="about" id="about">
  <h1 class="heading">
    <span>about</span> us
  </h1>
  <div class="row">
  <div class="image">
    <img src="./images/bg1.jpg" alt="">

  </div>
  <div class="content">
    <h3>Why IMAGINATION?</h3>
    <p>"This website is dedicated to reaching out to individuals who are grappling with loneliness and engage in crafting creative, imaginative stories as a means to release their inner emotions and share them with the world. It serves as a safe haven where they can transform their feelings into words, allowing their unique narratives to resonate with a global audience. This platform empowers them to express themselves and connect with others who may appreciate their creativity and experiences."</p>
  </div>
  </div>
</section>
  <!--about section ends-->
    <!--fourth child-->
     <section class="category" id="category">
    <div class="row">
          <!--sidenav-->
<!--<div class="col-md-2 bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Family</h4></a>
    </li>
      <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Fantacy</h4></a>
    </li>
      <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Comedy</h4></a>
    </li>
      <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Thirller</h4></a>
    </li>
      <li class="nav-item bg-info">
      <a href="" class="nav-link text-light"><h4>Horror</h4></a>
    </li>
  </ul>
</div>-->
      
 <!--category  section-->
 
<h1 class="heading">Our <span>Categories</span> </h1>

 <!--row start-->
 <div class="row">
  

   <!--fetching cate-->
<?php
getcategory();
?>
 

</div>
</div>
    
 <!--row end-->


     </section>

         <!--all stories-->
     <section class="category" id="category">
    <div class="row">

 <!--story  section-->
 
<h1 class="heading">all <span>stories</span> </h1>

 <!--row start-->
 <div class="row">
  

   <!--fetching cate-->
<?php
//call function
getstory();

?>
 

</div>
</div>
    
 <!--row end-->


     </section>
 <!--footer-->
 <section class="footer">
 <div class="share">
  <a href="#" class="fab fa-facebook"></a>
   <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
     <a href="#" class="fab fa-linkedin"></a>
 </div>
 <div class="links">
  <a href="#">home</a>
  <a href="#">category</a>
  <a href="#">about us</a>
  <a href="#">contact us</a>
 </div>
   <div class="credit">created by <span>IMAGINATION web designer</span> |all rights reserved</div>

 </section>
 
  <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--custom js file link--> 
<script src="script.js"></script>


</body>
</html>