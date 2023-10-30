<?php
include('./DbConnector/connect.php');
include('./functions/common_function.php');
session_start();
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
    

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@100;300;500;700&family=Sen:wght@400;700;800&display=swap");
:root {
  --main-color: aqua;
  --black: #13131a;
  --bg: #010103;
  --border: 0.1rem solid rgba(25, 255, 255, 0.3);
}

* {
  font-family: "Roboto", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: none;
  outline: none;
  text-decoration: none;
  text-transform: capitalize;
  transition: 1ms linear;
}

html {
  font-size: 70%;
  overflow-x: hidden;
  scroll-padding-top: 9rem;
  scroll-behavior: smooth;
}
html::-webkit-scrollbar {
  width: 0.8rem;
}
html::-webkit-scrollbar-track {
  background: transparent;
}
html::-webkit-scrollbar-thumb {
  background: #fff;
  border-radius: 5rem;
}

section {
  height: 100vh;
  padding: 2rem 7%;
}
.heading {
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  padding-bottom: 3.5rem;
  font-size: 4rem;
}
.heading span {
  color: var(--main-color);
  text-transform: uppercase;
}
.home .content.btn {
  margin-top: 1rem;
  display: inline-block;
  padding: 0.8rem 3rem;
  font-size: 3.7rem;
  color: #eee;

  cursor: pointer;
}
.home .content .btn:hover {
  letter-spacing: 0.2rem;
}
.header .navbar {
  background: var(--black);
  position: fixed;
  padding: 1.5rem 2rem;
  width: 100%;
  z-index: 1000;
  padding-top: 0%;
}
.logo {
  height: 5%;
  width: 5%;
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.header a {
  margin: 0 1rem;
  font-size: 1.6rem;
  color: #fff;
}
.navbar a:hover {
  color: var(--main-color);
  border-bottom: 0.1rem solid var(--main-color);
  padding-bottom: 0.5rem;
}
.navbar .nav-link-home {
  margin: 0 1rem;
  font-size: 1.6rem;

  color: var(--main-color);
}
.home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  background: url(./images/file.jpg) no-repeat;
  background-size: cover;
  background-position: center;
  width: 100%;
}
.home .content {
  max-width: 60rem;
}
.home .content p {
  font-size: 2rem;
  font-weight: lighter;
  line-height: 1.8;
  padding: 1rem 0;
  color: #eee;
}
.home .content h3 {
  font-size: 6rem;
  text-transform: uppercase;
  color: #fff;
}
.about .row {
  display: flex;
  align-items: center;
  background: var(--bg);
  flex-wrap: wrap;
}
.about .row .image {
  flex: 1 1 45rem;
}
.about .row .image img {
  width: 100%;
}
.about .row .content {
  flex: 1 1 45rem;
  padding: 2rem;
}
.about .row .content h3 {
  font-size: 3rem;
  color: #fff;
}
.about .row .content p {
  font-size: 1.6rem;
  color: #ccc;
  padding: 1rem 0;
  line-height: 1.8;
}
.category .card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  grid: 1.5rem;
  align-items: center;
}
.category .card-container .card {
  padding: 4rem;
  text-align: center;
  border: var(--border);
  margin-bottom: 2px;
  background: var(--black);
}
.category .card-container .card img {
  width: 100%;
  height: 200px;
  object-fit: contain;
}
.category .card-container .card h3 {
  color: #ccc;
  font-size: 2rem;
  padding: 1rem 0;
}
.category .card-container .card p {
  color: #eee;
  font-size: 1rem;
  padding: 0.5rem 0;
}
.category .card-container .card:hover {
  color: var(--black);
}

.dettail-row {
  background: var(--black);
  padding: 5%;
}
.dettail-row button {
  background: var(--main-color);
  padding: 2rem;
  width: 20%;
  text-transform: capitalize;
  font-size: 1.5rem;
  margin: 2rem;
}



.footer .share {
  padding: 1rem 0;
}
.footer .share a {
  height: 5rem;
  width: 5rem;
  line-height: 5rem;
  font-size: 2rem;
  color: #fff;
  border: var(--border);
  margin: 3rem;
  border-radius: 50%;
}
.footer .share a:hover {
  background-color: var(--main-color);
}
.footer .links {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 2rem 0;
  gap: 1rem;
}
.footer .links a {
  padding: 0.7rem;
}
.footer .links a:hover {
  background-color: var(--main-color);
}
.footer .credit {
  font-size: 1rem;
  color: #fff;

  padding: 1.5rem;
}
.footer .credit span {
  color: var(--main-color);
}
@media (max-width: 768px) {
  .home {
    background-position: left;
    justify-content: center;
    text-align: center;
  }
  .home.content h3 {
    font-size: 4.5rem;
  }
  .home.content p {
    font-size: 1.5rem;
  }
}
@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
}
@media (max-width: 991px) {
  html {
    font-size: 55%;
  }
  .header {
    padding: 1.5rem 2rem;
    padding-top: 0%;
  }
  section {
    padding: 2rem;
  }
}

    </style>
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

        
      </ul>
      <form class="d-flex search-form" role="search" action="search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn bg-info " name="search_data_story">
      </form>
                      <?php
                      if(!isset($_SESSION['username'])){
                        
                        echo "<li class='nav-item'>      
                            <a class='btn bg-info' href='./user_area/checkout.php'>Login</a>
                             </li>
                            ";

                      }else{
                                                echo "<li class='nav-item'>      
                            <a class='btn bg-info' href='./user_area/logout.php'>Logout</a>
                             </li>
                            ";

                      }
                      ?>
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
<section class="about " id="about">
  <h1 class="heading">
    <span>about</span> us
  </h1>
  <div class="row ">
  <div class="image ">
    <img src="./images/face-shadow-line-imagination-light-purple-lighted-mask-wallpaper-preview.jpg" alt="" class="col-md-2">

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
//getting category in home page

    global $con;
$select_query="Select * from `categories`";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $category_id=$row['category_id'];
 $category_title=$row['category_title'];
   $category_image=$row['category_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/category_images/$category_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$category_title</h5>

     <a href='./user_area/checkout.php' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}

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
get_unique_cat();
?>
 

</div>
</div>
    
 <!--row end-->


     </section>
 <!--footer-->
  <?php include("./DbConnector/footer.php");?>

 
  <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--custom js file link--> 
<script src="script.js"></script>


</body>
</html>