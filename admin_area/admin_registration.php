<?php include('../DbConnector/connect.php');

if(isset($_POST['admin_regi'])){
        $message=null;

    $admin_username=$_POST['username'];
    $admin_email=$_POST['email'];
     $admin_password=$_POST['password'];
     $hash_password=password_hash($admin_password,PASSWORD_DEFAULT);
     $confirm_admin_password=$_POST['confirm_password'];
    $admin_contact=$_POST['contact'];
    $admin_image=$_FILES['admin_pro_img']['name'];
    $admin_image_tem=$_FILES['admin_pro_img']['tmp_name'];

//select query
$select_query="select * from `user` where username='$admin_username'";
$rs=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($rs);
if($row_count>0){

$message="<h6 class='text-danger'>Username is already exist<h6>";

}else if($admin_password!=$confirm_admin_password){
$message="<h6 class='text-danger'>Passwords do not match<h6>";

}else{
    
move_uploaded_file($admin_image_tem,"./admin_images/$admin_image");
$insert_query="insert into `admin`
(username,admin_email,admin_password,admin_image,admin_mobile) 
values('$admin_username','$admin_email','$hash_password','$admin_image','$admin_contact')";
$query_execute=mysqli_query($con,$insert_query);
if($query_execute){
    echo "<script>alert('data successfully inserted')</script>";
}
else{
     die (mysqli_error($con));

}

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


    <title>Admin Registration</title>
</head>
<body>
   <div class="container-fluid m-3">
        
    <h2 class="text-center mb-4">
        Admin Registration
    </h2>
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-6 col-xl-5">
            <img src="../images/bg1.jpg" alt="" class="img-fluid">
        </div>
<div class="col-lg-6 col-xl-4">
<form action="" method="post" enctype="multipart/form-data">
    <?php if (isset($message)) { echo $message; } ?>

<div class="form-outline mb-4">
<label for="username" class="form-label">Username</label>
<input type="text" id="username" name="username" placeholder="Enter your username" class="form-control" required autocomplete="off">
        </div>
        <div class="form-outline mb-4">
<label for="email" class="form-label">Email</label>
<input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required autocomplete="off">
        </div>
<div class="form-outline mb-4">
<label for="password" class="form-label">Password</label>
<input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required autocomplete="off">
        </div>
<div class="form-outline mb-4">
<label for="confirm_password" class="form-label">Confirm Password</label>
<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" class="form-control" required autocomplete="off">
        </div>
<div class="form-outline mb-4">
<label for="admin_pro_img" class="form-label">Profile Image</label>
<input type="file" id="admin_pro_img" name="admin_pro_img"class="form-control" required>
        </div>
<div class="form-outline mb-4">
<label for="contact" class="form-label">Contact Number</label>
<input type="text" id="contact" name="contact" placeholder="Enter mobile number" class="form-control" required autocomplete="off">
        </div>
        <div class="">
<input type="submit" value="Register" class="bg-info py-2 px-3" name="admin_regi">
<p class="pt-1 small fw-bold">Have an account? <a href="admin_login.php">Login</a></p>
        </div>
            </form>

    </div>
        </div>
   </div> 
</body>
</html>