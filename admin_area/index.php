<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagination</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href="../style.css">
    
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
   <img src="../images/Logo.jpeg" alt="" class="logo">
    
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav">
        <li class="nav-item">
            
          <a class="nav-link-home active"  href="#">Welcome guest
  <a href="#" class="btn btn-secondary">Log Out</a>
</a>
        </li>
        

      </ul>
    </nav>
  </div>
</nav>

  </header>

<!--navbar ends-->


<!--2 child-->
  <h1 class="heading">
    <span>manage</span> details
  </h1>
  <!--3 child-->
<div class="row">
    <div class="dettail-row col-md-12  ">
<div class="button text-center">
    <button><a href="#" class="nav-link text-black  my-1">View Categories</a>
</button>
<button><a href="index.php?insert_category" class="nav-link text-black  my-1">Insert Category</a>
</button>
<button><a href="#" class="nav-link text-black my-1">Insert new story</a></button>
</div>
    </div>
</div>


  <!--4 child-->
<div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    ?>
</div>


  </div>
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

</body>
</html>