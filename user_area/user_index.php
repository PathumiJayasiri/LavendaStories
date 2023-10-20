<?php

include('../DbConnector/connect.php');


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
    <link rel='stylesheet' href="user_style.css" />
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    
    <div class="menu-wrapper">
        <div class="sidebar-header">
            <div class="sideBar">
                <div><img src=https://drive.google.com/uc?export=view&id=1aWmbSZADIAOqZZ-TZ6IxTcCO72rDiUn1 class="user-img"/></div>
                <ul>
            <li class="list-items"><a href="" class="active"><i class="fa-regular fa-user"></i><label>My Account</label></a></li>
                    <li><a class="sub-btn"><i class="fa-solid fa-book"></i><label>Categories<i class="fa-solid fa-angle-right dropdown"></i></label></a>
                    <ul class="sub-menu">
                        
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
   <li class=''>
 <a href=''>$category_title</a></li>
";
}

?>
                  </li>      
                    </ul>
                    </li>
                                <li class="list-items"><a href=""><i class="fa-solid fa-list"></i><label>All Stories</label></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-folder-open"></i><label>My Stories</label></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-pen-to-square"></i><label>Write Story</label></a></li>
            <li class="list-items"><a href=""><i class="fa-regular fa-user-pen"></i><label>Edit Account</label></a></li>
            <li class="list-items"><a href=""><i class="fa-solid fa-delete-left"></i><label>Delete Account</label></a></li>
            <li class="list-items"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><label>Log out</label></a></li>

                    <!--li><i class="fas fa-cogs"></i><label>Services</label></li>
                    <li><i class="fas fa-phone-alt"></i><label>Contact</label></li>
                    <li><i class="fas fa-user"></i><label>About us</label></li>
                    <li><i class="fas fa-cog"></i><label>Setting</label></li-->
                </ul> <span class="cross-icon"><i class="fas fa-times"></i></span>
            </div>
            <div class="backdrop"></div>
            <div class="content">
                <header class="user-nav">
                    <div class="menu-button" id='desktop'>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="menu-button" id='mobile'>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <h1> <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn bg-info " name="search_data_story">
      </form></h1> <img src=../images/bg1.jpg class="user-img"/>
                </header>
                        <main>
                            <?php
                    global $con;
    if(isset($_GET['search_data_story'])){
        $search_value=$_GET['search_data'];
$search_query="Select * from `view_stories` where story_title like '%$search_value%'";
$result_query=mysqli_query($con,$search_query);
if($num_row==0){
    echo "<h2 class='text-center text-danger'>Sorry!! No Result match</h2>";
}else{
while($row=mysqli_fetch_assoc($result_query)){
   $story_id=$row['story_id'];
       $user_id=$row['user_id'];

  $writter_name=$row['writter_name'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
 $category_id=$row['category_id'];
   $story_image=$row['cover_image'];
   $content=$row['content'];
$date=$row['created'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";   
}}}?>     
    <!--footer-->
  <?php include("../DbConnector/footer.php");?>

</main>

                <div class="content-data"> </div>
            </div>
        

        </div>
    </div>
     <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="index.js"></script>
    
</body>

</html>