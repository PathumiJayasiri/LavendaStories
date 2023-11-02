<?php
if(isset($_GET['edit_account'])){
   $user_username=$_SESSION['username'];
   $select_query="select* from `user` where username='$user_username'";
   $rs=mysqli_query($con,$select_query);
   $row_fetch=mysqli_fetch_array($rs);
$user_id =$row_fetch['user_id'];
$username =$row_fetch['username'];
$user_email =$row_fetch['user_email'];
$user_mobile =$row_fetch['user_mobile'];

if(isset($_POST['user_update'])){
   $update_id=$user_id;
   $username=$_POST['user_username'];
      $user_email=$_POST['user_email'];

         $user_mobile=$_POST['user_mobile'];

            $user_img=$_FILES['user_img']['name'];
                        $user_tem_img=$_FILES['user_img']['tmp_name'];
                        move_uploaded_file($user_tem_img,"./user_images/$user_img");

                        $update_data="update `user` set username='$username',user_email='$user_email',user_image='$user_img',user_mobile='$user_mobile' 
                        where user_id='$update_id'";
                        $rs_query_update=mysqli_query($con,$update_data);
                        if($rs_query_update){
                           echo "<script type='text/javascript'>alert('Data updated')</script>";
                                                      echo "<script>window.open('logout.php','_self')</script>";

                        }


}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
</head>
<body>
    <h1 class="text-center mb-4">My Account</h1>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_username" value="<?php echo $user_username?>">

     </div>   
          <div class="form-outline mb-4">
        <input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo $user_email?>">
        
     </div>   

          <div class="form-outline mb-4 d-flex w-50 m-auto">
        <input type="file" class="form-control " name="user_img">
        <img src="./user_images/<?php echo $user_img;?>" alt="" style="width: 100px;height: 100px; object-fit: contain;
 " class="profile-img">
     </div>   
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="user_mobile" value="<?php echo $user_mobile?>">
        
     </div>   
        <input type="submit" class="btn bg-info py-2 px-3" value="Update" name="user_update">

    </form>
</body>
</html>