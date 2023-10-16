<?php
include('../DbConnector/connect.php');


if(isset($_POST['insert_cat'])){
            
    $category_title=$_POST['cat_title'];
    
    // File handling for image upload
    if (!empty($_FILES['cat_img']['name'])) {
        $cat_img1 = $_FILES['cat_img']['name'];
        $temp_cat_img = $_FILES['cat_img']['tmp_name'];

        move_uploaded_file($temp_cat_img, "./category_images/$cat_img1");
    } else {
        $cat_img1 = ''; // Set to an empty string if no file is uploaded
    }
$select_query="Select * from `categories` where category_title='$category_title'";
$rs_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($rs_select);
$message=null;
if($number>0){
            $message="<h6 class='text-warning'>!!!This category is already inside the database</h6>";
}
else{
    $insert_query=("INSERT INTO `categories` (category_title,category_image) VALUES ('$category_title','$cat_img1')");
    $rs=mysqli_query($con,$insert_query);
    if($rs){
                    $message="<h6 class='text-success'>This category has been inserted to the database successfully</h6>";

         //echo "<script>alert('This category has been inserted to the database')</script>";
   
    }
}
}
?>
<form action="" method="post" class="mb-2" enctype="multipart/form-data" >
    <div class="input-group form-outline w-50 mb-5 m-auto">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" name="cat_title" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off"> 
</div>

      <!--image-->

<div class="form-outline mb-4 w-50 m-auto">
    <label for="story_img" class="form-label text-white">
        Category Image
    </label>
    <input type="file" name="cat_img" id="cat_img" class="form-control" required>
 </div>
<div class="input-group  w-50 mb-2 m-auto">
  <input type="submit" name="insert_cat" value="Insert Category" class="form-control bg-info border-o my-3" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
</div>
<div class="input-group  w-50 mb-2 m-auto">
<?= $message ?></div>
<!--<button class="bg-info p-2 border-0 ">
    Insert Category
</button>-->
</form>