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
table{
  border-collapse: collapse;
justify-content: center;
}
tr{
  border-bottom: 1px solid #fff;

}
thead td{
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 400;
  background: #f9f9f9;
  text-align: start;
  padding: 15px;
}
tbody tr td{
padding: 10px 15px;
}
.board{
  width: 100%;
  margin: 30px 0px 30px 30px;
  overflow: auto;
  background: #eee;
border-radius: 8px;
}
.board img{
  width: 45px;
  height: 45px;
  object-fit: cover;
  border-radius: 50%;
  margin-right: 15px;
}
.board h5{
font-weight: 600;
font-size: 14px;
}
.board p{
  font-weight: 400;
  font-size: 13px;

}
.board .board_user{
  display: flex;
  align-items: center;
  justify-content: flex-start;
  text-align: start;
  
}
.delete_btn{
  background: #f0d5f5;
  padding: 2px 10px;
  display: inline-block;
  border-radius: 40px;
}
.delete_btn:hover{
  background: #b034d2;
  color: #f0d5f5;
}
.heading {
  margin-top: 40px;
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
@media (max-width: 769px) {
  .values .val-box {
padding16px 20px: 10px 20px 10px 0;
}

}



</style>
<section>
<!--boxes-->
<div class="values ">
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
    <span>Published Stories</span>
   </div> 
  </div>
  <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Unpublished Stories</span>
   </div> 
  </div>
   <div class="val-box">
   <i class="fa-solid fa-users"></i>
   <div class="">
    <h3>200</h3>
    <span>Categories</span>
   </div> 
  </div>

</div>
<h3 class="heading">
    Users
  </h3><div class="board mb-2 m-auto ">
<table width="100%" >
<thead>
  <tr>
        <td>Name</td>
    <td>Contact</td>
    <td></td>
  </tr>
</thead>
<tbody>
  
    
<?php
 $get_user="select*from `user` ";
 $rs=mysqli_query($con,$get_user);
 $row=mysqli_num_rows($rs);

 if(empty($row)){
                echo "<h3 class='text-danger' text-center>No users</h3>";

 }else{
    while($row=mysqli_fetch_assoc($rs)){
  $user_id =$row['user_id'];
    $user_mobile=$row['user_mobile'] ;
$username=$row['username'];
$user_email=$row['user_email'];
$user_image=$row['user_image'];

    
    echo "
    <tr>
<td class='board_user'><img src='../user_area/user_images/$user_image'  >
<div class='user_info'><h5>$username</h5>
    <p class='text-secondary'>$user_email<p></div>
</td>
<td>$user_mobile</td>
<td><a href='admin_index.php?delete_user=$user_id' type='button' class='text-light' data-toggle='modal'data-target='#exampleModal'>
    <input type='submit' value='Delete' name='delete' class='delete_btn'></a>
</td>


</tr>

    ";
 }
}
?>
  
</tbody>
</table>
</div>
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

