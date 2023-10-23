<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
    
</head>

<body>
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
</div>

   <h2>My All Stories</h2>
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

?>
<form>
<section class='about' id='about'>
   <div class='tab'>

  <div class='row'>
   <div class='card' style='width: 18rem;'>
  <img src=story_cover_images/<?php echo $story_image?> class='card-img-top'>
 
</div>
  <div class='content'>
<div class='form-outline mb-4 w-50 m-auto h-auto'>
      <!--title-->
    <label for='story_title' class='form-label bg-info'>
        Story Title: <h3 class='card-title'><?php echo $story_title?></h5>

    </label>
</div>
    <!--description-->
    <div class='form-outline mb-4 w-50 m-auto'>
    <label for='story_description' class='form-label bg-info'>
        Story description: <div><?php echo $story_description?></div>
    </label>
    </div>
    <div class='form-outline mb-4 w-50 m-auto'>
      
    <label for='published_date' class='form-label bg-info'>
        Published Date: <h3 class='card-title'><?php echo $date?></h5> 
  
    </label>
</div>
  <div class='form-outline mb-4 w-50 m-auto'>
      
      <div class=""> <a href='user_index.php?edit_story'>Edit</a>
</div>

     </div>
  </div>
  <div style='overflow: hidden;'>
      <div style='float: right;'>
        <div style='overflow:auto;'>
          <div style='float:right;'>
            <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
          </div>
        </div>
      </div>
    </div>

   </div>
   
</section>
<div class='tab'>

<div class='form-outline mb-4 w-50 m-auto'>
<?php echo $content?>
     <div>  
        <div style='overflow: hidden;'>
      <div style='float: right;'>
        <div style='overflow:auto;'>
          <div style='float:left;'>
            <button type='button' id='prevBtn' onclick='nextPrev(-1)'>Previous</button>
          </div>
          </div>
          </div>
          </div>
     </div>

</div>

  </form>


<?php
  }
 ?>
</div>
</div>

  <!--boostrap css link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

</body>
</html>