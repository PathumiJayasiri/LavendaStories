<?php
if(isset($_GET['edit_category'])){
    $edit_category=$_GET['edit_category'];

    $get_cat="select*from `categories` where category_id=$edit_category";
    $rs=mysqli_query($con,$get_cat);
$row=mysqli_fetch_assoc($rs);
$cat_title=$row['category_title'];
$cat_img=$row['category_image'];

}

//update category
if(isset($_POST['update_cat'])){
    $cat_title=$_POST['cat_title'];
    $cat_img=$_FILES['cat_img']['name'];
        $cat_tmp_img=$_FILES['cat_img']['tmp_name'];
move_uploaded_file($cat_tmp_img,"./category_images/$cat_img");
$update_Cat="update `categories` set category_title='$cat_title',category_image='$cat_img' where category_id=$edit_category";
$rs_update_query=mysqli_query($con,$update_Cat);
if($rs_update_query){
    echo "<script>alert('Category updated successfully')</script>";
        echo "<script>window.open('./admin_index.php?view_categories','_self')</script>";

}
}

?>
<div class="container mt-5">
    <h3 class="text-center">Edit Category</h3>
<form action="" method="post"  enctype="multipart/form-data" >
    <div class=" form-outline w-50 mb-5 m-auto">
            <label for="cat_title" class="form-label">Category Title</label>

  <input type="text" name="cat_title" class="form-control" value="<?php echo $cat_title?>" > 
</div>

      <!--image-->

<div class="form-outline mb-4 w-50 m-auto">
    <label for="cat_img" class="form-label text-black">
        Category Image
    </label>
    <div class="d-flex">
    <input type="file" name="cat_img" id="cat_img" class="form-control" required>
    <img src="./category_images/<?php echo $cat_img?>" alt="" style="width: 100px;height: 100px;object-fit:contain">
 </div>
</div>
<div class="input-group  w-50 mb-2 m-auto">
  <input type="submit" name="update_cat" value="Update Category" class="form-control bg-info px-3 mb-3">
</div>
</form>

</div>