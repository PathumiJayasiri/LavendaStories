<?php
include './DbConnector/connect.php';
//getting category
function getcategory(){
    global $con;
$select_query="Select * from `categories`";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $category_id=$row['category_id'];
 $category_title=$row['category_title'];
   $category_image=$row['category_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/category_images/$category_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$category_title</h5>

     <a href='#' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}

}

//getting story
function getstory(){
    global $con;
$select_query="Select * from `story` order by rand() limit 0,8";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $story_id=$row['story_id'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
 $story_id=$row['category_id'];
   $story_image=$row['cover_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='#' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}
}



?>