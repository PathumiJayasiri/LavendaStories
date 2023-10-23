
<h3 class="text-center">All Categories</h3>
<table class="table table-bordered mt-5 w-50 m-auto" >
<tbody class=" m-auto" >
<?php
$query="select * from `categories`";
$rs=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($rs)){
$category_id=$row['category_id'];
$category_title=$row['category_title'];
$category_image=$row['category_image'];


?>

    <tr>
    <td class="d-flex ">
        <img src="./category_images/<?php echo $category_image?>" alt="" class="m-auto" style="width: 100px;height: 100px;object-fit:contain;">
</td><td class="m-auto m-5"> <h4 class="text-center">Category Title:
            <label for=""><?php echo $category_title?></label>
        </h4>

      <div class="m-auto d-flex w-50"> <a href="admin_index.php?edit_category=<?php echo $category_id?>"><input type="submit" value="Edit" name="edit"></a>
             <a href="admin_index.php?delete_category=<?php echo $category_id?>" type="button" class="text-light" data-toggle="modal"
              data-target="#exampleModal">
              <input type="submit" value="Delete" name="delete" ></a></div>

    </td></tr>
    <?php }?>
</tbody>
</table>

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