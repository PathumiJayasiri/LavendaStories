
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
                     <a href='admin_index.php?delete_category=<?php echo $user_id?>' type='button' class='text-light' data-toggle='modal'
              data-target='#exampleModal'>
              <input type='submit' value='Delete' name='delete' ></a></div>

</div>
<hr>
    ";
 };
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
    <h5>Are you sure yoo want to delete this category?</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./admin_index.php?view_categories" 
        class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary">
            <a href="admin_index.php?delete_category=<?php echo $category_id?>" class="text-light ">
              Yes</a></button>
      </div>
    </div>
  </div>
</div>