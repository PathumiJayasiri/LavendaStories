<?php
$username_session=$_SESSION['username'];
if(isset($_POST['delete'])){
$delete_query="delete from `user` where username='$username_session'";
$rs=mysqli_query($con,$delete_query);
if($rs){
    session_destroy();
     echo "<script>alert('Account successfully deleted')</script>";
                                                      echo "<script>window.open('../home.php','_self')</script>";
}

}
if(isset($_POST['dont_delete'])){

echo "<script>window.open('user_index.php','_self')</script>";


}

?>
    <form action="" method="post" class="mt-5 mb-5">
        <h4 class="text-center mb-5">Are you sure you want to delete this account?</h4>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="delete" value="Yes">
        </div>
        <div class="form-outline mb-4">
            <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="No">
        </div>
    </form>
