<?php
include('../DbConnector/connect.php');

if(isset($_POST['admin_login'])){
  $message=null;
$admin_username=$_POST['username'];
$admin_password=$_POST['password'];

$select_query="select * from `admin` where username='$admin_username'";
$rs=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($rs);
$row_data=mysqli_fetch_assoc($rs);
if($row_count>0){
  $_SESSION['username']=$admin_username;
if(password_verify($admin_password,$row_data['admin_password'])){
  if($row_count==1){
      $_SESSION['username']=$admin_username;

echo "<script>alert('Login successful')</script>";
echo "<script>window.open('admin_index.php','_self')</script>";


  }else{

  }
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
    <link rel="stylesheet" href="regi_style.css">

    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Admin Login</title>
</head>
<body>
   <div class="container-fluid m-3">
        
    <h2 class="text-center mb-4">
        Login
    </h2>
    <div class="row d-flex justify-content-center ">
       
<div class="col-lg-6 col-xl-4" >
<form action="" method="post">
    <?php if (isset($message)) { echo $message; } ?>

<div class="form-outline mb-4">
<label for="username" class="form-label">Username</label>
<input type="text" id="username" name="username" placeholder="Enter your username" class="form-control" required autocomplete="off">
        </div>
<div class="form-outline mb-4">
<label for="password" class="form-label">Password</label>
<input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required autocomplete="off">
        </div>
        <div class="">
<input type="submit" value="Login" class="bg-info py-2 px-3" name="admin_login">
<p class="pt-1 small fw-bold">Don't you have an account? <a href="admin_registration.php">Sign up</a></p>
        </div>
            </form>

    </div>
        </div>
   </div> 
</body>
</html>