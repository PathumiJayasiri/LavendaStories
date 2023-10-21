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
 <link rel="stylesheet" href="user_style.css">
   
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
    <input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
           <h1><img src="../images/Logo.jpeg" alt="" class="logo"  style="margin-left: 1rem;margin-right: 2rem;width:3rem;height:3rem"><span>imagination </span></h1>

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
            <li class="list-items"><a href=""><i class="fa-solid fa-right-from-bracket"></i><span>Log out</span></a></li>

        </ul>
    </div>
</div>

  <!--navbar-->
  
  <header class="nav-user">
    <h1>
        <label for="nav-toggle">
<i class="fa-solid fa-bars" style="cursor: pointer;"></i>
        </label>
        guest name
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
    <!--footer-->
  <?php include("../DbConnector/footer.php");?>

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
  



</body>
</html>