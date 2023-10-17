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
          <a class="nav-link-home active" aria-current="page" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#category">categories</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="display_all_stories.php">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>

        
      </ul>
      <form class="d-flex search-form" role="search" action="search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn bg-info" name="search_data_story">
      </form>
    </div>
  </div>
</nav>
  </div>
  </header>
 


         <!--all stories-->
     <section class="category" id="category">
    <div class="row">

 <!--story  section-->
 
<h1 class="heading">all <span>stories</span> </h1>

 <!--row start-->
 <div class="row px-1">
 <!--view card details-->
 <form action="">
     <!--about section start-->
     
<section class="about" id="about">
   <div class="tab">

  <div class="row">
   <div class="card" style="width: 18rem;">
  <img src="./images/ts1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
     <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
  <div class="content">
<div class="form-outline mb-4 w-50 m-auto">
      <!--title-->
    <label for="writter_name " class="form-label bg-info">
        Writter Name:     <label for="story_title " class="form-label bg-info">
        Story Title
    </label>
    </label>
    <input type="text" name="writter_name" id="writter_name" class="form-control" placeholder="Enter Story Title" autocomplete="off" required>
</div>bg-info
<div class="form-outline mb-4 w-50 m-auto">
      <!--title-->
    <label for="story_title " class="form-label bg-info">
        Story Title
    </label>
    <input type="text" name="story_title" id="story_title" class="form-control" placeholder="Enter Story Title" autocomplete="off" required>
</div>
    <!--description-->
    <div class="form-outline mb-4 w-50 m-auto">
    <label for="story_description" class="form-label bg-info">
        Story description
    </label>
    <input type="text" name="story_description" id="story_description" class="form-control" placeholder="Enter Story Description" autocomplete="off" required>
    </div>  </div>
  </div>
   </div>
</section>
      
 </form>
   <!--fetching cate-->
<?php
//call function
view_story_details();
get_unique_cat();
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