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
  
  <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--add CKEDITOR library-->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      :root{
    --color-1: #2f3240;
}
body{
	font-family: sans-serif;
	background-color: #e8eef3;
}
*{
	box-sizing: border-box;
	margin:0;
	padding:0;
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
@media(max-width:991px){
   .nav-toggler{
   	display: block;
   }
   .header .nav{
   	width: 100%;
   	padding:0;
   	max-height: 0px;
   	overflow: hidden;
   	visibility: hidden;
   	transition: all 0.5s ease;
   }
   .header .nav.open{
   	visibility: visible;
   }
   .header .nav ul{
   	padding:12px 15px 0;
   	margin-top: 12px;
   	border-top:1px solid rgba(255,255,255,0.2);
   }
   .header .nav ul li{
   	display: block;
   	margin:0;
   }
}



    </style>
</head>
<body  style="background: #f0d5f5;">

 <header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
               <a href="#">lavendar<span>Stories</span></a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                 <li><a class="sub-btn">Categories<i class="fa-solid fa-angle-right dropdown"></i></a>
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
                    </ul>
                  </li>      
                    
                    
   <li ><a  href="user_index.php?display_all_stories">All Stories</a></li>
            <li ><a  href="user_index.php?user_stories">My Stories</a></li>
            <li><a href="user_index.php?insert_story">Write Story</a></li>
            <li><a  href="user_index.php?delete_user_acc" data-toggle="modal" data-target="#exampleModalauseracc">Delete Account</a></li>
            <li ><a href="logout.php">Log out</a></li>
            
               </ul>
              

            </nav>
            <div class="">
              <h1> <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
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

     
      </div>
            </div>
        </div>
    </div>
 </header>
     <script src="../index.js"></script>

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
