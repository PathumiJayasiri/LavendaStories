<?php
if(isset($_GET['category_stories'])){
    $cat_story=$_GET['category_stories'];
    $query="select*from `view_stories` where category_id=$cat_story";
       $rs=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($rs)){

   $story_id=$row['story_id'];

    $writter_name=$row['writter_name'];
    $story_title=$row['story_title'];
    $category=$row['category_id'];
    $story_img=$row['cover_image'];
    $story_description=$row['story_description'];
    $content=$row['content'];

echo "<div class='col-md-3 mb-2 m-5 card-container'>
    <div class='card'>
  <img src='./story_cover_images/$story_img' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$story_title</h5>
<p class='card-text'>$story_description</p>
     <a href='../full_story.php?story_id=$story_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";

}
}

?>