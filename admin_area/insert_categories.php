<?php
include('../DbConnector/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
$select_query="Select * from `categories` where category_title='$category_title'";
$rs_select=mysqli_query($con,$select_query);
$number=mysqli_num_rows($rs_select);
if($number>0){
    echo "<script>alert('This category is already inside the database')</script>";
}
else{
    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $rs=mysqli_query($con,$insert_query);
    if($rs){
         echo "<script>alert('This category has been inserted to the database')</script>";
   
    }
}
}
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-5">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" name="cat_title" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" name="insert_cat" value="Insert Category" class="form-control bg-info border-o my-3" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
</div>
<!--<button class="bg-info p-2 border-0 ">
    Insert Category
</button>-->
</form>