<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit account</title>
</head>
<body>
    <h1 class="text-center mb-4">Edit Account</h1>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_username">

     </div>   
          <div class="form-outline mb-4">
        <input type="email" class="form-control w-50 m-auto" name="user_email">
        
     </div>   

          <div class="form-outline mb-4 d-flex w-50 m-auto">
        <input type="file" class="form-control " name="user_img">
        <img src="./user_images/<?php echo $user_img;?>" alt="" style="width: 100px;height: 100px; object-fit: contain;
 " class="profile-img">
     </div>   
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_mobile">
        
     </div>   
        <input type="submit" class="btn bg-info py-2 px-3" value="Update" name="user_update">

    </form>
</body>
</html>