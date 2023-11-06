<?php
if(isset($_GET['delete_story'])){
    $delete_id=$_GET['delete_story'];
    $delete_story="delete from `view_stories` where story_id=$delete_id";
    $rs_query=mysqli_query($con,$delete_story);
    if($rs_query){
                echo "<script>alert('Published story successfully deleted.')</script>";
                echo "<script>window.open('./user_stories.php','_self')<script>";

    }
}
?>