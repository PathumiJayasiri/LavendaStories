    <?php
    $username=$_SESSION['username'];
    $get_user="select * from `user` where username='$username'";
    $rs=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_array($rs);
    $user_id=$row_fetch['user_id'];
    
    ?>
    <div class="container">

<div class="row">
<h2>My Saved Stories</h2>
<hr>
<?php
  $get_user_story="select * from `saved_stories` where user_id=$user_id";
  $rs_stories=mysqli_query($con,$get_user_story);
  while($row_stories=mysqli_fetch_assoc($rs_stories))
  {
    $story_saved_id=$row_stories['saved_story_id'];
  $saved_writter_name=$row_stories['writter_name'];
 $saved_story_title=$row_stories['story_title'];
  $saved_story_description=$row_stories['story_description'];
 $saved_category_id=$row_stories['category_id'];
   $saved_story_image=$row_stories['cover_image'];
   $saved_content=$row_stories['content'];
$saved_date=$row_stories['created'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card ' >
  <img src='./story_cover_images/$saved_story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$saved_story_title</h5>
<p class='card-text'>$saved_story_description</p>
     <a href='../full_story.php?story_saved_id=$story_saved_id' class='btn btn-secondary'>Read more</a>
      <a href='user_index.php?edit_saved_story=$story_saved_id' class='btn btn-secondary'>Edit</a>
     <a href=user_index.php?delete_saved_story=$story_saved_id' class='btn btn-secondary'
      data-toggle='modal' data-target='#exampleModalusersavedstory'>Delete</a>

     </div>
</div>
  </div>
  ";
}
?>

</div>

   <h2>My Published Stories</h2>
   <hr>
 <?php
  $get_user_story="select * from `view_stories` where user_id=$user_id";
  $rs_stories=mysqli_query($con,$get_user_story);
  while($row_stories=mysqli_fetch_assoc($rs_stories))
  {
    $story_id=$row_stories['story_id'];
  $writter_name=$row_stories['writter_name'];
 $story_title=$row_stories['story_title'];
  $story_description=$row_stories['story_description'];
 $category_id=$row_stories['category_id'];
   $story_image=$row_stories['cover_image'];
   $content=$row_stories['content'];
$date=$row_stories['created'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card ' >
  <img src='./story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
<h3 class='card-title'>$date</h5>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
      <a href='user_index.php?edit_story=$story_id' class='btn btn-secondary'>Edit</a>
     <a href=user_index.php?delete_story=$story_id' class='btn btn-secondary'
      data-toggle='modal' data-target='#exampleModaluserpublishstory'>Delete</a>

     </div>
</div>
  </div>
  ";
  }
?>

</div>

  <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--custom js file link--> 
<script>
var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[n].style.display = "block";

  // Update button visibility based on the current tab
  if (n === 0) {
       document.getElementById("prevBtn").style.display = "none";

    document.getElementById("nextBtn").style.display = "inline";

  } else if (n === x.length - 1) {
        document.getElementById("prevBtn").style.display = "inline";

    document.getElementById("nextBtn").style.display = "none";
  
  } else {
        document.getElementById("prevBtn").style.display = "inline";

    document.getElementById("nextBtn").style.display = "inline";
   
  }

}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  showTab(currentTab);
}

</script>

<!-- Modal saved story -->
<div class="modal fade" id="exampleModalusersavedstory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <h5>Are you sure you want to delete this story?</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./user_index.php?user_stories" 
        class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary">
            <a href="user_index.php?delete_saved_story=<?php echo $story_saved_id?>" class="text-light ">
              Yes</a></button>
      </div>
    </div>
  </div>
</div>
<!-- Modal published story -->
<div class="modal fade" id="exampleModaluserpublishstory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <h5>Are you sure you want to delete this story?</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./user_index.php?user_stories" 
        class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary">
            <a href="user_index.php?delete_story=<?php echo $story_id?>" class="text-light ">
              Yes</a></button>
      </div>
    </div>
  </div>
</div>