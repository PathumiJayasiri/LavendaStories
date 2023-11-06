<?php
if(isset($_GET['delete_saved_story'])){
    $delete_id=$_GET['delete_saved_story'];
    $delete_story="delete from `saved_stories` where saved_story_id=$delete_id";
    $rs_query=mysqli_query($con,$delete_story);
    if($rs_query){
                echo "<script>alert('Saved story successfully deleted.')</script>";
                echo "<script>window.open('./user_stories.php','_self')<script>";

    }
}
?>