<?php
if(isset($_GET['edit_admin_account'])){
   $admin_username=$_SESSION['username'];
   $select_query="select* from `admin` where username='$admin_username'";
   $rs=mysqli_query($con,$select_query);
   $row_fetch=mysqli_fetch_array($rs);
$admin_id =$row_fetch['admin_id'];
$username =$row_fetch['username'];
$admin_email =$row_fetch['admin_email'];
$admin_mobile =$row_fetch['admin_mobile'];

if(isset($_POST['admin_update'])){
   $update_id=$user_id;
   $username=$_POST['admin_username'];
      $admin_email=$_POST['admin_email'];

         $admin_mobile=$_POST['admin_mobile'];

            $admin_img=$_FILES['admin_img']['name'];
                        $admin_tem_img=$_FILES['admin_img']['tmp_name'];
                        move_uploaded_file($admin_tem_img,"./admin_images/$admin_img");

                        $update_data="update `admin` set username='$username',admin_email='$admin_email',admin_image='$admin_img',admin_mobile='$admin_mobile' 
                        where admin_id='$update_id'";
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
    <title>edit account</title>
</head>
<body>
    <h1 class="text-center mb-4">Edit Account</h1>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="admin_username" value="<?php echo $admin_username?>">

     </div>   
          <div class="form-outline mb-4">
        <input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo $admin_email?>">
        
     </div>   

          <div class="form-outline mb-4 d-flex w-50 m-auto">
        <input type="file" class="form-control " name="admin_img">
        <img src="./admin_images/<?php echo $admin_img;?>" alt="" style="width: 100px;height: 100px; object-fit: contain;
 " class="profile-img">
     </div>   
     <div class="form-outline mb-4">
        <input type="text" class="form-control w-50 m-auto" name="admin_mobile" value="<?php echo $admin_mobile?>">
        
     </div>   
        <input type="submit" class="btn bg-info py-2 px-3" value="Update" name="admin_update">

    </form>
</body>
</html>