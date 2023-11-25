<?php
include '../DbConnector/connect.php';




//getting category
/*function getcategory(){
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

     <a href='display_category_stories.php?category_id=$category_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}
}*/


//getting unique categories
function get_unique_cat(){
    global $con;
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
$select_query="Select * from `view_stories` where category_id=$category_id order by rand() limit 0,6";
$result_query=mysqli_query($con,$select_query);
$num_row=mysqli_num_rows($result_query);
if(empty($num_row)){
    echo "<h2 class='text-center text-danger'>No Stories under this category!!</h2>";
}
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
  <img src='./user_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='display_category_stories.php?category_id=$category_id' class='btn btn-secondary'>Read more</a>
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
$select_query="Select * from `view_stories` order by rand() limit 0,3";
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
    <div class='card ' >
  <img src='./user_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
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
  <img src='./user_area/story_cover_images/$story_image' class='card-img-top' alt='...'>
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
$search_query="Select * from `view_stories` where story_title like '%$search_value%'";
$result_query=mysqli_query($con,$search_query);
$num_row=mysqli_num_rows($result_query);
if(empty($num_row)){
    echo "<h2 class='text-center text-danger'>No Stories under this category!!</h2>";
}
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
  <img src='./story_cover_images/$story_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";

}
    }
}function view_story_details(){
   global $con;
if(isset($_GET['story_id'])){
    if(!isset($_GET['category'])){
      $story_id=$_GET['story_id'];
$select_query="Select * from `view_stories` where story_id=$story_id";
$result_query=mysqli_query($con,$select_query);
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
echo "



   <div class='tab'>
<div class='stoy_details'>
  <div class='story-image'>
   <div class='card' style='width: 18rem;'>
  <img src='../user_area/story_cover_images/$story_image' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>Card title</h5>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
  
<div class='writter_name'>
      
    <label for='writter_name' class='form-label bg-info'>
        Writter Name: <h3 class='card-title'>$writter_name</h5> 
  
    </label>
</div>
<div class='story_title'>
      <!--title-->
    <label for='story_title' class='form-label bg-info'>
        Story Title: <h3 class='card-title'>$story_title</h5>

    </label>
</div>
    <!--description-->
    <div class='story_detail'>
    <label for='story_description' class='form-label bg-info'>
        Story description: <div>$story_description</div>
    </label>
    </div>  </div>
  </div>
   </div>
</section>
<div style='overflow: hidden;'>
      <div style='float: right;'>
        <div style='overflow:auto;'>
          <div style='float:right;'>
            <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
          </div>
        </div>
      </div>
    </div>
    <div class='tab'>

<div class='form-outline mb-4 w-50 m-auto'>
$content
       
        
</div>

  
  
  
  
  
  ";
}
    }
}
}


//view story details


?>