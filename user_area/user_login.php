<?php
include('../DbConnector/connect.php');

if(isset($_POST['user_login'])){
  $message=null;
$user_username=$_POST['user_username'];
$user_password=$_POST['user_password'];

$select_query="select * from `user` where username='$user_username'";
$rs=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($rs);
$row_data=mysqli_fetch_assoc($rs);
if($row_count>0){
if(password_verify($user_password,$row_data['user_password'])){
echo "<script>alert('Login successful')</script>";

}
}else{
$message="<h6 class='text-danger'>Invalid username or password<h6>";

}
}
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
   

<!--add CKEDITOR library-->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
  body{
    overflow-y: hidden;
  }
</style>

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
            
         
        </li>
        

      </ul>
    </nav>
  </div>
</nav>

  </header>

<!--navbar ends-->

<!--navbar ends-->


<!--2 child-->
<div class="container-fluid " style="margin-bottom: 5%;margin-top: 0%;  padding-top: 10%;
">

        <h2 class="text-center">
        User Login
    </h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-10 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data" style="background: #eee;">
            <div class="input-group  w-50 mb-2 m-auto">
<?php if (isset($message)) { echo $message; } ?></div>

<div class="form-outline mb-4">
<label for="user_username" class="form-label">Username</label>
<input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" name="user_username" required>
</div>

<!--passowrd-->
<div class="form-outline mb-4">
<label for="user_password" class="form-label">Password</label>
<input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" name="user_password" required>
</div>


<div class="text-center mt-4 pt-2">
    <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
</div>

<p class="small mt-2 pt-1 pb-4">Don't have an account?<a href="user_registration.php">Sign up</p>
            </form>
        </div>
    

</div>
</div>
<div>
  <?php include("../DbConnector/footer.php");?>
<div>


      <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>