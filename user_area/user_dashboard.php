<?php
include('../DbConnector/connect.php');

?>
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


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@100;300;500;700&family=Sen:wght@400;700;800&display=swap");


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
    body{
        overflow-x: hidden;
    }
    /* profile img*/
.profile_img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  margin: auto;
  display: block;
}
.sidebar{
   width: 345px;
   position: fixed;
   left: 0;
   top: 0;
   height: 100%;
   background: var(--black);
   z-index: 100;
}
.sidebar-brand{
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff;
}

.sidebar-menu{
    margin-top: 1rem;
}
.sidebar-menu li{
width: 100%;
margin-bottom: 1.3rem;
padding-left: 2rem;
list-style: none;
}
.sidebar-menu a{
    padding-left: 1rem;
display: block;
color: #fff;
font-size: 1.2rem;
}
.sidebar-menu a.active{
background: #7fd3d3;
padding-top: 1rem;
padding-bottom: 1rem;
color: #13131a;
border-radius: 30px 0px 0px 30px;
}

.sidebar-menu .cat-items a{
display: block;
color: #fff;
font-size: 1rem;
}
.sidebar-menu a i{

font-size: 1.5rem;
padding-right: 1rem;
}

.main-content{
    margin-left: 345px;
}
header{
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    z-index: 100;
    left: 345px;
    width: calc(100%-345px);
}
header h2{
    color: #222;
}
header label i{
font-size: 1.7rem;
padding-right: 1rem;
}
.search-form{
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.user-wrapper{
display: flex;
align-items: center;
}
.user-wrapper img{
border-radius: 50%;
margin-right: 1rem;
}
.user-wrapper small{
    display: inline-block;
    color: gray;
    
}
main{
    margin-top: 90px;
}
</style>


</head>
<body class="">
<div class="sidebar">
    <div class="sidebar-brand">
           <h1><img src="../images/Logo.jpeg" alt="" class="logo"  style="margin-left: 2rem;margin-right: 2rem;width:3rem;height:3rem">imagination</h1>

    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="list-items"><a href="" class="active"><i class="fa-regular fa-user"></i><span>My Account</span></a></li>
                        <li class="list-items"><a href=""><i class="fa-solid fa-book"></i><span>Categories</span></a></li>
                        <ul>

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
echo "
    <li class='cat-items'><a href=''>$category_title</a></li>
";
}

?>
 


                        </ul>
            <li class="list-items"><a href=""><i class="fa-solid fa-list"></i><span>All Stories</span></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-folder-open"></i><span>My Stories</span></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-pen-to-square"></i><span>Write Story</span></a></li>
            <li class="list-items"><a href=""><i class="fa-regular fa-user-pen"></i><span>Edit Account</span></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-delete-left"></i><span>Delete Account</span></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>

        </ul>
    </div>
</div>

  <!--navbar-->
  <div class="main-content">
  <header class="">
    <h1>
        <label for="">
<i class="fa-solid fa-bars"></i>
        </label>
        dashboard
    </h1>
      <form class="d-flex search-form" role="search" action="search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn bg-info " name="search_data_story">
      </form>
    <div class="user-wrapper">
<img src="../images/bg1.jpg" width="30px" height="30px" alt="" >
<div><h4>name</h4>
<small>email</small></div>
    </div>
  </header>
<main>
    <div class="cards">

    </div>
</main>

  <!--navbar>
  <div class="main-content">
  <header class="header">
  <div class="container-fluid p-0"-->
    <!--first child-->
    <!--nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link-home active" aria-current="page" href="../home.php">Home</a>
        </li>
        
        
        
      </ul>
      <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data"-->
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <!--input type="submit" value="Search" class="btn bg-info " name="search_data_story">
      </form>
              
    </div>
  </div>
</nav-->
  </div>
  </header>

<!--body start>
<div class="row container-fluid">
    <div class="col-md-2 p-2 slide_bar">
<ul class="navbar-nav text-center me-auto">
    <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>name</h4></a>
    </li>
    <li class="nav-item bg-info">
        <img src="../images/bg1.jpg" class="profile_img">
    </li>
     <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>Categories</h4></a>
    </li>
     <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>All Stories</h4></a>
    </li>
     <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>My Stories</h4></a>
    </li>
     <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>Edit Account</h4></a>
    </li>
     <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>Delete Account</h4></a>
    </li>
         <li class="nav-item bg-info">
        <a class="nav-link text-light" href="#"><h4>Logout</h4></a>
    </li>
     </ul>
    </div>
</div-->
 <!--footer-->
  <?php include("../DbConnector/footer.php");?>
  

  <!--home section start-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--custom js file link--> 
<script src="script.js"></script>


</body>
</html>