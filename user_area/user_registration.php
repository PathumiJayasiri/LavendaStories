<?php include('../DbConnector/connect.php');

if(isset($_POST['user_register'])){
        $message=null;

    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
     $user_password=$_POST['user_password'];
     $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
     $confirm_user_password=$_POST['confirm_user_password'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tem=$_FILES['user_image']['tmp_name'];

//select query
$select_query="select * from `user` where username='$user_username'";
$rs=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($rs);
if($row_count>0){

$message="<h6 class='text-danger'>Username is already exist<h6>";

}else if($user_password!=$confirm_user_password){
$message="<h6 class='text-danger'>Passwords do not match<h6>";

}else{
    
move_uploaded_file($user_image_tem,"./user_images/$user_image");
$insert_query="insert into `user`(username,user_email,user_password,user_image,user_mobile) values('$user_username','$user_email','$hash_password','$user_image','$user_contact')";
$query_execute=mysqli_query($con,$insert_query);
if($query_execute){
    echo "<script>alert('data successfully inserted')</script>";
 echo "<script>window.open('checkout.php','_self')</script>";}
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
    <title>User registration</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href="../style.css">
    
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black">
  <!--navbar-->
  <header class="header">
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
   <div class="logo">lavendar<span>Stories</span></div>
   <div>
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link-home active" aria-current="page" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php">categories</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="display_all_stories.php">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

        
      </ul>
      <form class="d-flex search-form" role="search" action="search_story.php" method="get"> 
        <input class="form-control me-2 search-item" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!--button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button-->
        <input type="submit" value="Search" class="btn" style="background: #B034D2;" name="search_data_story">
      </form>
      <div>
                     
                        
                        <li class='nav-item'>      
                            <a class='btn ' style='background: #B034D2;' href='checkout.php'>Login</a>
                             </li>
                            

                    
      </div>
    </div>
   </div>
  </div>
</nav>
  </div>
  </header>
<!--navbar ends-->


  <!--home section start-->
<div class="container-fluid" style="margin-top: 0%; padding-top: 10%;
">

    <h2 class="text-center">
        User Registration
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
<div class="form-outline mb-4">
<label for="user_email" class="form-label">Email</label>
<input type="email" id="user_email" class="form-control" placeholder="Enter your email" autocomplete="off" name="user_email"required>
</div>
<div class="form-outline mb-4">
<label for="user_image" class="form-label">Image</label>
<input type="file" id="user_image" class="form-control" name="user_image">
</div>
<!--passowrd-->
<div class="form-outline mb-4">
<label for="user_password" class="form-label">Password</label>
<input type="password" id="user_password" class="form-control" placeholder="Enter password" autocomplete="off" name="user_password" required>
</div>
<!--confirm passowrd-->
<div class="form-outline mb-4">
<label for="confirm_user_password" class="form-label">Confirm Password</label>
<input type="password" id="confirm_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" name="confirm_user_password" required>
</div>

<!--contact-->

<div class="form-outline mb-4">
<label for="user_contact" class="form-label">Contact</label>
<input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number" autocomplete="off" name="user_contact">
</div>

<div class="text-center mt-4 pt-2">
    <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
</div>

<p class="small mt-2 pt-1 pb-4">Already have an account?<a href="user_login.php">Login</p>
            </form>
        </div>
    </div>

</div>

</body>
</html>