
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
  <!--home section start-->
<div class="container-fluid">

    <h2 class="text-center">
        User Registration
    </h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-10 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data" style="background: #eee;">
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
  <?php include("../DbConnector/footer.php");?>

</body>
</html>