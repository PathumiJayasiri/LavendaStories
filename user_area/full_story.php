<?php
include('../DbConnector/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>story</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href=".. /style.css">
    
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      :root{
    --color-1: #2f3240;
      ---row: #9b939f;
  --main-color:#f0d5f5;
  --black: #13131a;
  --bg: #010103;
  --border: 0.1rem solid rgba(25, 255, 255, 0.3);
  --sub:#b034d2;

}
body{
    background: red;
	font-family: sans-serif;
  justify-content: center;
	background-color: #e8eef3;
  min-height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
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
  height: 100%;
  font-size: 70%;
  overflow-x: hidden;
  scroll-padding-top: 9rem;
  scroll-behavior: smooth;
}
html::-webkit-scrollbar {
  width: 0.8rem;
}
html::-webkit-scrollbar-track {
  background: var(--black);
}
html::-webkit-scrollbar-thumb {
  background:var(--bg);
  border-radius: 5rem;
}

.container .stoy_details_tab{
  max-width: 1000px;
  background: #9b939f;
  width: 100%;
  padding: 25px 50px;
  border-radius: 5px;
  margin-top: 20%;
}
.container .stoy_content_tab{
  max-width: 700px;
  background: #9b939f;
  width: 100vh;
  padding: 25px 50px;
  border-radius: 5px;
  margin-top: 20%;
  height: 100vh;
}

.container form .stoy_details{
    max-width: 700px;

  display: flex;
    flex-wrap: wrap;
justify-content: space-between;
  padding: 25px ;

}
form .stoy_details .story_labels{
margin: 20px 20px 12px 50px;
width:calc(100%/2 -20px);
}
.stoy_details .story_labels label{
  font-size:medium;
  display: block;
  font-weight: 500;
  margin-bottom: 10px;
  padding-bottom: 5px;
}
.stoy_details .story_labels h3{
  font-family: cursive;
  font-weight: 600;
}
form .btn_next{
  height: 10%;
  margin: 45px 0;
}
form .btn_next button{
  border-radius: 15px;
  border: none;
  letter-spacing: 1px;
  font-weight: 500;
  font-size: 15px;
  height: 100%;
  width: 100%;
  outline: none;
  color: var(--bg);
  background: linear-gradient(135deg,var(---row),var(--main-color),var(--sub));
}
form .btn_next input:hover{
    background: linear-gradient(-135deg,var(---row),var(--main-color),var(--sub));

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
  color: var(--sub);
  font-family: cursive;
}

ul{
	list-style: none;
}
a{
	text-decoration: none;
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
.navbar{
  background: #13131a;
	padding: 12px ;
	line-height: 1.5;
  position: fixed;
  width: 100%;
  
  z-index: 1000;
}
.navbar .nav-link{
  margin: 0 1rem;
  font-size: 1.5rem;
  color: var(--main-color);
}
.navbar .nav-link.active{
  color: var(--main-color);
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
  padding-left: 0.5rem;
}
.navbar .nav-link:hover {
  background: #9b939f;
  color: var(--main-color);
  border-radius: 20px 20px 20px 20px;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
  padding-left: 0.5rem;
}
.navbar .nav-link-home {
  margin: 0 1rem;
  font-size: 1.6rem;

  color: var(--main-color);
}
.navbar .dropdown-menu{
  background-color: var(--color-1);
  
}
.navbar .dropdown-menu a{
  color: var(--main-color);
}
.navbar .dropdown-menu a:hover{
  background-color: #9b939f;
}

.navbar-toggler{
  background-color: #2f3240;
	color: #b034d2;
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
  margin-top: auto;
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
color: var(--main-color);
}
.footer .credit {
  font-size: 1rem;
  color: #fff;

  padding: 1.5rem;
}
.footer .credit span {
  color: var(--main-color);
}
@media (max-width: 430px) {
.navbar{
  margin-bottom: 20%;
}
  .footer {
  width: auto;
  margin-top: auto;
  height: 50vh;
;
}

  html {
    font-size: 50%;
  }
  .container{
  max-width: 700px;
  justify-content: center;
  }
  form .stoy_details .story_labels{
margin-bottom: 15px;
width:100%;
}
.container form{
    margin-top: 20%;

}
.container form .stoy_details{


  max-height: 300px;
  overflow-y: scroll;
}
form .btn_next{
  height: 10%;
  width: 40%;
}
form .btn_next button{
  letter-spacing: 1px;
  font-weight: 500;
  font-size: 10px;
  height: 90%;
  width: 50%;
}

}
@media (max-width: 991px) {
  html {
    font-size: 55%;
  }
  .container form .stoy_content_tab{
    max-height: 300px;
margin-top: 20%;
    overflow-y: scroll;
width: 700px;
}

}
@media (max-width: 768px) {
    .container form .stoy_content_tab{
    max-height: 300px;
margin-top: 20%;
width: 100%;
max-width: 700px;
}
.container form{
  margin-top: 20%;
}
}



    </style>

</head>
<body >
  <!--navbar-->
 <nav class="navbar navbar-expand-lg fixed-top" >
  <div class="container-fluid">
   <div class="logo">lavendar<span>Stories</span></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./user_index.php">Home</a>
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
            <li><a class="dropdown-item" href="user_index.php?categories">All</a></li>

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
               <form class="d-flex search-form" role="search" action="../search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <!--input type="submit" value="Search" class="btn " name="search_data_story" style="background: #B034D2;" -->
      </form>
        <div class="py-2 dropdown">
               <a class=" " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                
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
           

         <!--all stories-->
     <section class="story_detailes" >
      
    <div class="container  mb-4 ">

 <!--story  section-->
 <form>
   <!--fetching cate-->
<?php
//call function
   global $con;
if(isset($_GET['story_id'])){
    if(!isset($_GET['category'])){
      $story_id=$_GET['story_id'];
$select_query="Select * from `view_stories` where story_id=$story_id";
$result_query=mysqli_query($con,$select_query);
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
}
    }
}


?>



   <div class='tab stoy_details_tab'>
<div class='stoy_details'>
  <div class='story-image p-5'>
   <div class='card' style='width: 20rem;height:100%,'>
  <img src='../user_area/story_cover_images/<?php echo $story_image?>' class='card-img-top'>
  <!--div class='card-body'>
    <h5 class='card-title'></h5>
    <p class='card-text'></p>
  </div-->
</div>
  </div>
  <div class="story_title">
<div class='story_labels'>
      
    <label for='writter_name' class='form-label p-3'>
        Writter Name: <h3 class=' mt-3'><?php echo  $writter_name?></h5> 
  
    </label>
</div>
<div class='story_labels'>
      <!--title-->
    <label for='story_title' class='form-label p-3 '>
        Story Title: <h3 class=' mt-3'><?php echo $story_title?></h5>

    </label>
</div>
    <!--description-->
    <div class='story_labels'>
    <label for='story_description' class='form-label p-3'>
        Story description: <h3 class="mt-3"><?php echo $story_description?></h3>
    </label>
       
    </div>  
        <!--div class='story_labels btn_next'>
            <input type='submit' id='nextBtn' onclick='nextPrev(1)' value="Next">
          </div-->
          <div class='story_labels btn_next'>
            <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
          </div>
       
  </div>
  
   </div>
   </div>
    <div class='tab stoy_content_tab'>

<div class='form-outline mt-5' >
<?php echo $content?>
         <div style="overflow: hidden;">
      <div style="float: right;">
        <div style="overflow:auto;">
          <div style="float:left;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          </div>
        </div>
      </div>
</div>
        
</div>

  
  
    </div>
   
   </form>

  <?php
get_unique_cat();
?>
 



 <!--row start-->

    
 <!--row end-->

    </div>
     </section>

 
  <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--custom js file link--> 
<script>
var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[n].style.display = "block";

  // Update button visibility based on the current tab
  if (n === 0) {
       document.getElementById("prevBtn").style.display = "none";

    document.getElementById("nextBtn").style.display = "inline";

  } else if (n === x.length - 1) {
        document.getElementById("prevBtn").style.display = "inline";

    document.getElementById("nextBtn").style.display = "none";
  
  } else {
        document.getElementById("prevBtn").style.display = "inline";

    document.getElementById("nextBtn").style.display = "inline";
   
  }

}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  showTab(currentTab);
}

</script>


 <!--footer-->
  <?php include("../DbConnector/footer.php");?>

</body>
</html>