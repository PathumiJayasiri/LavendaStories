<?php
if(isset($_GET['delete_user'])){
    $delete_user=$_GET['delete_user'];
    $delete_user_query="delete from `user` where user_id=$delete_user";
    $rs=mysqli_query($con,$delete_user_query);
    if($rs){
            echo "<script>alert('User deleted successfully')</script>";
        echo "<script>window.open('./admin_index.php?user_list','_self')</script>";


    }
}
?>