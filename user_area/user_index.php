<?php
include('../DbConnector/connect.php');
session_start();

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
    <link rel='stylesheet' href="../user_style.css" />
    <link rel="stylesheet" href="../style.css">
<style>
  .footer {
    padding-bottom: 0px;
  height: 100%;
  position: fixed;
}
@import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

* {
  margin: 0;
  padding: 0;
  list-style: none;
  box-sizing: border-box;
 
}

body {
  
  overflow: hidden;
  font-family: "Open Sans", sans-serif;
}

.sideBar {
  position: relative;
  z-index: 20;
  height: 100vh;
  width: 25%;
  color: white;
  background-color: #13131a;
  transition: 0.3s ease-in-out;
  overflow-y: auto;
}

.sideBar.widthChange {
  width: 8%;
  text-align: center;
}

.sideBar div {
  position: relative;
  height: 10vh;
}

.sideBar li {
  padding: 20px 20px 20px 10px;
  transition: 0.3s ease-in-out;
}
.sideBar .sub-menu {
  padding: 10px;

  color: #ffffff;
}
li label.hideMenuList {
  display: none;
}
.sideBar li a {
  font-size: medium;
  color: #ffffff;
}
.sideBar li .dropdown {
  position: absolute;
  right: 15px;
  margin: 10px;
  transition: 0.3s ease;
}
.sideBar .sub-menu {
  background: #c7c7c7;
  display: none;
}
.sideBar .sub-menu a {
  padding-left: 80px;
}

.sideBar li i {
  margin-right: 8px;
  color: #eff2f5;
}

.sideBar .list-items:hover {
  background-color: #f0d5f5;
  border-radius: 30rem 0rem 0rem 30rem;
  
}
.sideBar .list-items a:hover {
  color: black;
}
.sideBar i:hover {
  color: black;
}

.selected {
  background-color: #f0d5f5;
  border-radius: 30rem 0rem 0rem 30rem;
    color: black;

}

.sideBar span {
  position: absolute;
  color: #ffffff;
  top: 20px;
  right: 20px;
}

.sideBar .cross-icon {
  display: none;
  color: #001629;
}

.sidebar-header {
  display: flex;
}

.content {
  width: 100%;
  height: 100vh;
}

header {
  z-index: 1000;
  position: fixed;
  background-color: #13131a;
  height: 10%;
  padding: 10px;
  width: 100%;
  display: flex;

  justify-content: space-between;
  align-items: center;
}

#mobile {
  display: none;
}

.menu-button {
  position: relative;
  cursor: pointer;
  width: 30px;
  height: 30px;
}

.menu-button div:nth-child(1) {
  position: absolute;
  height: 4px;
  border-radius: 20px;
  background-color: #c7c7c7;
  width: 100%;
}

.menu-button div:nth-child(2) {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  border-radius: 20px;
  background-color: #c7c7c7;
  width: 80%;
}

.menu-button div:nth-child(3) {
  position: absolute;
  height: 4px;
  border-radius: 20px;
  bottom: 0;
  background-color: #c7c7c7;
  width: 100%;
}
.profile-img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}

header h1 {
  color: #0092ff;
}

.content-data {
  background-color: #ffffff;
  margin: 2%;
  padding: 20px;
  height: 100%;
  overflow-y: auto;
}

.sideBar.showMenu {
  left: 0;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #ccc;
}

::-webkit-scrollbar-thumb {
  background:#f0d5f5;
}

main {
  margin-top: 90px;
 background: #f0d5f5;
  height: 100vh;
}
.rotate {
  transform: rotate(90deg);
}

@media (max-width: 1200px) {
  .sideBar {
    width: 30%;
  }
}

@media (max-width: 900px) {
  #desktop {
    display: none;
  }

  #mobile {
    display: block;
  }

  .sideBar {
    position: absolute;
    width: 30%;
    top: 0;
    left: -100%;
  }

  .sideBar .cross-icon {
    display: block;
  }
  .backdrop {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.4);
    top: 0;
    left: -100%;
    height: 100vh;
    width: 100%;
  }

  .backdrop.showBackdrop {
    left: 0;
  }
  main {
    width: 100%;
    min-height: calc(
      100vh - 10%
    ); /* Subtract header height from viewport height */
    overflow-y: auto;
  }
}

@media (max-width: 700px) {
  .sideBar {
    width: 40%;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

@media (max-width: 400px) {
  .sideBar {
    width: 60%;
  }

  header h1 {
    font-size: 20px;
  }

  #mobile {
    height: 25px;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

@media (max-width: 320px) {
  .sideBar {
    width: 80%;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--add CKEDITOR library-->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    
    <div class="menu-wrapper">
                      <header class="user-nav d-flex m-auto">
                        <div class="d-flex">
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
                                                     <div class="logo " style="padding-left: 10px;">lavendar<span>Stories</span></div>

                        </div>
<div class="d-flex m-4">
                    <h1> <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn " name="search_data_story" style="background: #B034D2;" >
      </form></h1>
                          <div style="margin-left: 20px;" >
                   <?php
      $username=$_SESSION['username'];
      $user_img="select * from `user` where username='$username'";
      $user_img=mysqli_query($con,$user_img);
      $row_img=mysqli_fetch_array($user_img);
      $user_img=$row_img['user_image'];
      echo "
        <img src='./user_images/$user_img' class='user-img' style='width:40px;height: 40px;border-radius:50%'/>
      ";
      ?></div>

      <!--img src=../images/bg1.jpg class="user-img"/-->
     
      </div>

                </header>

        <div class="sidebar-header">
            <div class="sideBar">
                <div><img src=https://drive.google.com/uc?export=view&id=1aWmbSZADIAOqZZ-TZ6IxTcCO72rDiUn1 class="user-img"/></div>
                <ul style="list-style: none;">
            <li class="list-items"><a href="user_index.php?edit_account" class="active"><i class="fa-regular fa-user"></i><label>My Account</label></a></li>
                    <li><a class="sub-btn"><i class="fa-solid fa-book"></i><label>Categories<i class="fa-solid fa-angle-right dropdown"></i></label></a>
                    <ul class="sub-menu" style="list-style: none;">
                        
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
   <li class='list-items' style='list-style: none;'>
 <a href='user_index.php?category_stories=$category_id'><label>$category_title</label></a></li>
";
}

?>
                  </li>      
                    </ul>
                    </li>
                                <li class="list-items"><a href="user_index.php?display_all_stories"><i class="fa-solid fa-list"></i><label>All Stories</label></a></li>
            <li class="list-items"><a href="user_index.php?user_stories"><i class="fa-solid fa-folder-open"></i><label>My Stories</label></a></li>
            <li class="list-items"><a href="user_index.php?insert_story"><i class="fa-solid fa-pen-to-square"></i><label>Write Story</label></a></li>
            <li class="list-items"><a href="user_index.php?delete_user_acc"><i class="fa-solid fa-delete-left"></i><label>Delete Account</label></a></li>
            <li class="list-items"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i><label>Log out</label></a></li>

                </ul>
              
                <span class="cross-icon"><i class="fas fa-times"></i></span>
            </div>
            <div class="backdrop"></div>
            <div class="content">
                        <main>
<!--write story-->
 <!--4 child-->

<div class="container my-5">
                                 <div class="row">

                            <?php
                    global $con;
    if(isset($_GET['search_data_story'])){
        $search_value=$_GET['search_data'];
$search_query="Select * from `view_stories` where story_title like '%$search_value%'";
$result_query=mysqli_query($con,$search_query);
$num_row=mysqli_num_rows($result_query);
if(empty($num_row)){
    echo "<h2 class='text-center text-danger'>No Stories under this category!!</h2>";
}
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
  <img src='story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";   
}}?>   
                             </div>

    <?php
    if(isset($_GET['insert_story'])){

       include('insert_story.php');
    }
    ?>
    <?php
    if(isset($_GET['user_stories'])){

       include('user_stories.php');
    }
    ?>
    <div class="row">
      <?php
    if(isset($_GET['edit_account'])){

       include('edit_account.php');
    }
    ?>   
    </div>
        <div class="row">
      <?php
    if(isset($_GET['delete_user_acc'])){

       include('delete_user_acc.php');
    }
    ?>  
            <?php
    if(isset($_GET['edit_story'])){

       include('edit_story.php');
    }
    ?>
             <?php
    if(isset($_GET['delete_story'])){

       include('delete_story.php');
    }
    ?>
<?php
    if(isset($_GET['category_stories'])){

       include('category_stories.php');
    }
    ?>
    <?php
    if(isset($_GET['display_all_stories'])){

       include('display_all_stories.php');
    }
    ?>
    </div>


</div>
    <!--footer-->
 <!--footer-->
 <section class="footer" style="height: 60vh;">
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


                        </main>

            </div>
        

        </div>
    </div>
     <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="../index.js"></script>
    
</body>

</html>
<style>
  .footer {
  width: 100%;
  position: relative;
  background: var(--black);
  text-align: center;
  bottom: 0;
}
@import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

* {
  margin: 0;
  padding: 0;
  list-style: none;
  box-sizing: border-box;
}

body {
  background-color: #eff2f5;
  overflow: hidden;
  font-family: "Open Sans", sans-serif;
}

.sideBar {
  position: relative;
  z-index: 20;
  height: 100vh;
  width: 25%;
  color: white;
  background-color: #001629;
  transition: 0.3s ease-in-out;
  overflow-y: auto;
}

.sideBar.widthChange {
  width: 8%;
  text-align: center;
}

.sideBar img {
  position: absolute;
  height: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.sideBar div {
  position: relative;
  height: 10vh;
}

.sideBar li {
  padding: 20px 20px 20px 10px;
  transition: 0.3s ease-in-out;
}
li label.hideMenuList {
  display: none;
}
.sideBar li a {
  font-size: medium;
  color: #ffffff;
}
.sideBar li .dropdown {
  position: absolute;
  right: 15px;
  margin: 10px;
  transition: 0.3s ease;
}
.sideBar .sub-menu {
  padding: 10px;

  color: #001629;

  display: none;
}
.sideBar .sub-menu a {
  padding-left: 10px;
}

.sideBar li i {
  margin-right: 8px;
  color: #eff2f5;
}

.sideBar .list-items:hover {
  background-color: #0092ff;
  border-radius: 30rem 0rem 0rem 30rem;
}

.selected {
  background-color: #0092ff;
  border-radius: 30rem 0rem 0rem 30rem;
}

.sideBar span {
  position: absolute;
  color: #ffffff;
  top: 20px;
  right: 20px;
}

.sideBar .cross-icon {
  display: none;
  color: #001629;
}

.sidebar-header {
  display: flex;
}

.content {
  width: 100%;
  height: 100vh;
}

header {
  z-index: 1000;
  position: fixed;
  background-color: #13131a;
  height: 10%;
  padding: 10px;
  width: 100%;
  display: flex;

  justify-content: space-between;
  align-items: center;
}

#mobile {
  display: none;
}

.menu-button {
  position: relative;
  cursor: pointer;
  width: 30px;
  height: 30px;
}

.menu-button div:nth-child(1) {
  position: absolute;
  height: 4px;
  border-radius: 20px;
  background-color: #c7c7c7;
  width: 100%;
}

.menu-button div:nth-child(2) {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  border-radius: 20px;
  background-color: #c7c7c7;
  width: 80%;
}

.menu-button div:nth-child(3) {
  position: absolute;
  height: 4px;
  border-radius: 20px;
  bottom: 0;
  background-color: #c7c7c7;
  width: 100%;
}
.profile-img {
  width: 100px;
  height: 100px;
  object-fit: contain;
}

header h1 {
  color: #0092ff;
}

.content-data {
  background-color: #ffffff;
  margin: 2%;
  padding: 20px;
  height: 100%;
  overflow-y: auto;
}

.sideBar.showMenu {
  left: 0;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #ccc;
}

::-webkit-scrollbar-thumb {
  background: #0092ff;
}

main {
  margin-top: 90px;
  overflow-y: auto;
  height: 100vh;
}
.rotate {
  transform: rotate(90deg);
}
@media (max-width: 1200px) {
  .sideBar {
    width: 30%;
  }
}

@media (max-width: 900px) {
  #desktop {
    display: none;
  }

  #mobile {
    display: block;
  }

  .sideBar {
    position: absolute;
    width: 30%;
    top: 0;
    left: -100%;
  }

  .sideBar .cross-icon {
    display: block;
  }
  .backdrop {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.4);
    top: 0;
    left: -100%;
    height: 100vh;
    width: 100%;
  }

  .backdrop.showBackdrop {
    left: 0;
  }
  main {
    width: 100%;
    min-height: calc(
      100vh - 10%
    ); /* Subtract header height from viewport height */
    overflow-y: auto;
  }
}

@media (max-width: 700px) {
  .sideBar {
    width: 40%;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

@media (max-width: 400px) {
  .sideBar {
    width: 60%;
  }

  header h1 {
    font-size: 20px;
  }

  #mobile {
    height: 25px;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

@media (max-width: 320px) {
  .sideBar {
    width: 80%;
  }
  .sideBar .sub-menu {
    display: none;
  }
}

</style>