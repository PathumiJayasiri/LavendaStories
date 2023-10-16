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


//getting unique categories
function get_unique_cat(){
    global $con;
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
$select_query="Select * from `story` where category_id=$category_id order by rand() limit 0,6";
$result_query=mysqli_query($con,$select_query);
$num_row=mysqli_num_rows($result_query);
if(empty($num_row)){
    echo "<h2 class='text-center text-danger'>No Stories under this category!!</h2>";
}
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $story_id=$row['story_id'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
  $category_id=$row['category_id'];
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
}








//getting story
function getstory(){
    global $con;
    if(!isset($_GET['category'])){
$select_query="Select * from `story` order by rand() limit 0,3";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $story_id=$row['story_id'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
 $category_id=$row['category_id'];
   $story_image=$row['cover_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}
}

}

//getting all story
function getting_all_story(){
    global $con;
    if(!isset($_GET['category'])){
$select_query="Select * from `story` order by rand()";
$result_query=mysqli_query($con,$select_query);
//$row=mysqli_fetch_assoc($result_query);
//echo $row['category_title'];
while($row=mysqli_fetch_assoc($result_query)){
  $story_id=$row['story_id'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
  $category_id=$row['category_id'];
   $story_image=$row['cover_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}
}

}

//seach story

function search_story(){
     global $con;
    if(isset($_GET['search_data_story'])){
        $search_value=$_GET['search_data'];
$search_query="Select * from `story` where story_title like '%$search_value%'";
$result_query=mysqli_query($con,$search_query);
if(empty($num_row)){
    echo "<h2 class='text-center text-danger'>Sorry!! No Result match</h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $story_id=$row['story_id'];
 $story_title=$row['story_title'];
  $story_description=$row['story_description'];
 $category_id=$row['category_id'];
   $story_image=$row['cover_image'];
echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./admin_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";

}
    }
}
?>