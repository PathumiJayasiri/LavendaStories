<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All stories</title>
</head>
<body>
  
  <?php
 global $con;
    if(!isset($_GET['category'])){
$select_query="Select * from `view_stories` order by rand()";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
   $story_id=$row['story_id'];
       $user_id=$row['user_id'];

  $writter_name=$row['writter_name'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
 $category_id=$row['category_id'];
   $story_image=$row['cover_image'];
   $content=$row['content'];
$date=$row['created'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}
}  ?>
</body>
</html>

