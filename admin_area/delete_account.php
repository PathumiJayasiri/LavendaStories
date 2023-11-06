<?php
$username_session=$_SESSION['username'];
if(isset($_GET['delete_account'])){
$delete_query="delete from `admin` where username='$username_session'";
$rs=mysqli_query($con,$delete_query);
if($rs){
    session_destroy();
     echo "<script>alert('Account successfully deleted')</script>";
                                                      echo "<script>window.open('admin_registration.php','_self')</script>";
}

}


?>
   