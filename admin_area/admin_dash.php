<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagination</title>
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href="style.css">
    
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
      <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


<style>
  .values {
  padding: 30px 30px 0 30px;
  display: flex;
justify-content: space-between;
align-items: center;
flex-wrap: wrap;
}
.values .val-box {
  background: #eee;
  width: 235px;
  padding: 16px 20px;
  border-radius: 5px;
  display: flex;
  justify-content: flex-start;
  align-items: center;

}
.values .val-box i {
font-size: 25px;
width: 60px;
height: 60px;
line-height: 60px;
border-radius: 50%;
text-align: center;
margin-right: 50px;
}
.values .val-box h3{
font-size: 18px;
font-weight: 600;
}
.values .val-box span{
  font-size: 15px;
  color: #828282;
}
</style>
<section>
<!--boxes-->
<div class="values">
  <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Users</span>
   </div> 
  </div>
  <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Users</span>
   </div> 
  </div>
  <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Users</span>
   </div> 
  </div>
   <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Users</span>
   </div> 
  </div>

</div>


<h3 class="text-center">All Users</h3>
    <form action="" class="bordered">

<?php
 $get_user="select*from `user` ";
 $rs=mysqli_query($con,$get_user);
 $row=mysqli_num_rows($rs);

 if(empty($row)){
                echo "<h3 class='text-danger' text-center>No users</h3>";

 }else{
    while($row=mysqli_fetch_assoc($rs)){
  $user_id =$row['user_id'];
      
$username=$row['username'];
$user_email=$row['user_email'];
$user_image=$row['user_image'];

    
    echo "
<div class='d-flex'>
        <img src='../user_area/user_images/$user_image' class='m-auto' style='width: 100px;height: 100px;object-fit:contain;'>
        <div>
<h4>$username</h4>
<h5 class='text-secondary'>$user_email<h5>
        </div>
                     <a href='admin_index.php?delete_user=$user_id' type='button' class='text-light' data-toggle='modal'
              data-target='#exampleModal'>
              <input type='submit' value='Delete' name='delete' ></a></div>

</div>
<hr>
    ";
 }
}
?>
        
    </form>
    


<!-- Button trigger modal -->
<!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <h5>Are you sure yoo want to delete this user?</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./admin_index.php?user_list" 
        class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary">
            <a href="admin_index.php?delete_user=<?php echo $user_id?>" class="text-light ">
              Yes</a></button>
      </div>
    </div>
  </div>
</div>

</section>
