<?php
if(isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];
    $delete_cat_query="delete from `categories` where category_id=$delete_category";
    $rs=mysqli_query($con,$delete_cat_query);
    if($rs){
            echo "<script>alert('Category deleted successfully')</script>";
        echo "<script>window.open('./admin_index.php?view_categories','_self')</script>";


    }
}
?>