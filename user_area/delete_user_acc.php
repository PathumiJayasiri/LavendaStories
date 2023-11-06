<?php
$username_session=$_SESSION['username'];
if(isset($_GET['delete_user_acc'])){
$delete_query="delete from `user` where username='$username_session'";
$rs=mysqli_query($con,$delete_query);
if($rs){
    session_destroy();
     echo "<script>alert('Account successfully deleted')</script>";
echo "<script>window.open('../home.php','_self')</script>";
}

}


?>
   