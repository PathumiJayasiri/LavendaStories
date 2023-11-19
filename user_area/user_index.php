<?php
include('../DbConnector/connect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--add CKEDITOR library-->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      :root{
    --color-1: #2f3240;
      ---row: #9b939f;
  --main-color: #f0d5f5;
  --black: #13131a;
  --bg: #010103;
  --border: 0.1rem solid rgba(25, 255, 255, 0.3);

}
body{
	font-family: sans-serif;
	background-color: #e8eef3;
}
*{
	margin:0;
	padding:0;
    font-family: "Roboto", sans-serif;
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

.heading {
  padding-top: 1rem;
  padding-left: 20px;
  background: #b034d2;
  border-radius: 0px 50px 50px 0px;
  text-align: start;
  color: var(--main-color);
  text-transform: uppercase;
  padding-bottom: 1rem;
  font-size: 3rem;
}
.heading span {
  color: var(--black);
  text-transform: uppercase;
}
.logo {
  text-transform: lowercase;
  font-size: 2.5rem;
  color: var(--main-color);
}
.logo span {
  color: #b034d2;
  font-family: cursive;
}

ul{
	list-style: none;
}
a{
	text-decoration: none;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.align-items-center{
	align-items: center;
}
.justify-content-between{
	justify-content: space-between;
}
/*header*/
.header{
	background-color: var(--color-1);
	padding: 12px 0;
	line-height: 1.5;
}

.header .logo,
.header .nav{
	padding:0 15px;
}
.header .logo a{
	font-size: 30px;
	color: #ffffff;
	text-transform: capitalize;
}
.header .nav ul li{
	display: inline-block;
	margin-left: 40px;
}
.header .nav ul li a{
	display: block;
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	padding: 10px 0;
	transition: all 0.5s ease;
}
.header .nav ul li a.active,
.header .nav ul li a:hover{
	color: #f3a93d;
}
.header .sub-menu{
  display: none;
}
.sub-btn i{
  margin-left: 20px;
}
.rotate {
  transform: rotate(90deg);
}

.nav-toggler{
	height: 34px;
	width: 44px;
	background-color: #ffffff;
	border-radius: 4px;
	cursor: pointer;
	border:none;
	display: none;
	margin-right: 15px;
}
.nav-toggler:focus{
	outline: none;
	box-shadow: 0 0 15px rgba(255,255,255,0.5);
}
.nav-toggler span{
    height: 2px;
    width: 20px;
    background-color: var(--color-1);
    display: block;
    margin:auto;
    position: relative;
    transition: all 0.3s ease;
}
.nav-toggler.active span{
	background-color: transparent;
}
.nav-toggler span::before,
.nav-toggler span::after{
	content: '';
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-color: var(--color-1);
	transition: all 0.3s ease;
}
.nav-toggler span::before{
	transform: translateY(-6px);
}
.nav-toggler.active span::before{
	transform: rotate(45deg);
}
.nav-toggler span::after{
	transform: translateY(6px);
}
.nav-toggler.active span::after{
	transform: rotate(135deg);
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
.footer {
  height: 100vh;
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
   .nav-dropdown {
      
   }

}



    </style>
</head>
<body  style="background: #f0d5f5;">
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   <div class="logo">lavendar<span>Stories</span></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      <!--categories-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
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
 <a href='user_index.php?category_stories=$category_id' class='dropdown-item'>$category_title</a></li>
";
}

?>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">All</a></li>

          </ul>
        </li>
<!--stories-->
<li class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
  Stories
  </a>
  <ul class="dropdown-menu" >
<li class="list-items">
  <a href="user_index.php?display_all_stories"  class="dropdown-item">All Stories</a>
</li>
<li>
  <a href="user_index.php?user_stories" class="dropdown-item"
  >My Stories</a>
</li>
  </ul>
</li>
          
        <li class="nav-item">
          <a class="nav-link" href="user_index.php?insert_story">Write Story</a>
        </li>
        
      </ul>
 <!--header class="header">
    <div class="container">
        <div class="row user_nav_row align-items-center justify-content-between">
            <div class="logo col-md-2">
               <a href="#">lavendar<span>Stories</span></a>
            </div>
            <button type="button" class="nav-toggler col-md-2">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                 <li><a class="sub-btn">Categories<i class="fa-solid fa-angle-right dropdown"></i></a>
                    <ul class="sub-menu" style="list-style: none;">
                        
    <!?php
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
                    </ul>
                  </li>      
                    
                    
   <li ><a  href="user_index.php?display_all_stories">All Stories</a></li>
            <li ><a  href="user_index.php?user_stories">My Stories</a></li>
            <li><a href="user_index.php?insert_story">Write Story</a></li>
            <li><a  href="user_index.php?delete_user_acc" data-toggle="modal" data-target="#exampleModalauseracc">Delete Account</a></li>
            <li ><a href="logout.php">Log out</a></li>
            <li-->
                        
               <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <!--input type="submit" value="Search" class="btn " name="search_data_story" style="background: #B034D2;" -->
      </form>
        <div class="nav-item p-2 dropdown">
               <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                
                <?php
      $username=$_SESSION['username'];
      $user_img="select * from `user` where username='$username'";
      $user_img=mysqli_query($con,$user_img);
      $row_img=mysqli_fetch_array($user_img);
      $user_img=$row_img['user_image'];
      echo "
        <img src='./user_images/$user_img' class='user-img' style='width:40px;height: 40px;border-radius:50%'/>
      ";
      
      ?>
      <ul class="dropdown-menu dropdown-menu-lg-end"  >
            <li><a class="dropdown-item" href="user_index.php?edit_account">My Profile</a></li>
            <li><a class="dropdown-item" href="user_index.php?delete_user_acc" data-toggle="modal" data-target="#exampleModalauseracc">Delete Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
          </ul>
               </a>
          
            </div>

    </div>   
    </div>
            </nav>
           
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
    if(isset($_GET['edit_saved_story'])){

       include('edit_saved_story.php');
    }
    ?>
    
             <?php
    if(isset($_GET['delete_story'])){

       include('delete_story.php');
    }
    ?>
     <?php
    if(isset($_GET['delete_saved_story'])){

       include('delete_saved_story.php');
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
  <?php include("../DbConnector/footer.php");?>



                        </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


     <script src="../index.js"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModalauseracc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <h5>Are you sure yoo want to delete this category?</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./user_index.php" 
        class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary">
            <a href="user_index.php?delete_user_acc" class="text-light ">
              Yes</a></button>
      </div>
    </div>
  </div>
</div>


     <script>
      const navToggler = document.querySelector(".nav-toggler");
navToggler.addEventListener("click", navToggle);

function navToggle() {
  navToggler.classList.toggle("active");
  const nav = document.querySelector(".nav");
  nav.classList.toggle("open");
  if (nav.classList.contains("open")) {
    nav.style.maxHeight = nav.scrollHeight + "px";
  } else {
    nav.removeAttribute("style");
  }
}
     </script>

</body>
</html>
