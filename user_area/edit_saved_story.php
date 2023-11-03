 <?php
    $username=$_SESSION['username'];
    $get_user="select * from `user` where username='$username'";
    $rs=mysqli_query($con,$get_user);
    $row_fetch=mysqli_fetch_array($rs);
    $user_id=$row_fetch['user_id'];

    ?>

<?php
if(isset($_GET['edit_saved_story'])){
    $edit_id=$_GET['edit_saved_story'];
    $query="select*from `saved_stories` where saved_story_id=$edit_id";
    $rs=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($rs);
    $writter_name=$row['writter_name'];
    $story_title=$row['story_title'];
    $category_saved_id=$row['category_id'];
    $story_img=$row['cover_image'];
    $story_description=$row['story_description'];
    $content=$row['content'];



    //category
    $select_saved_cat="select*from `categories` where category_id=$category_saved_id";
    $rs_saved_cat=mysqli_query($con,$select_saved_cat);
$row_saved_cat=mysqli_fetch_assoc($rs_saved_cat);
$category_saved_title=$row_saved_cat['category_title'];
}
?>


<div class="container mt-5">
    <h3 class="text-center">Edit Story</h3>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="tab">

        <div class="form-outline w-50 m-auto mb-4">
            <label for="writter_name"  class="form-label">Writter Name</label>
            <input type="text" id="writter_name" name="writter_name" class="form-control" value="<?php echo $writter_name?>" required>
        </div>
                <div class="form-outline w-50 m-auto mb-4">
            <label for="story_title"  class="form-label">Story Title</label>
            <input type="text" id="story_title" name="story_title" class="form-control" value="<?php echo $story_title?>" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="category"  class="form-label">Categoty</label>
<select name="category" class="form-select" required>
    <option value="<?php echo $category_saved_title?>"><?php echo $category_saved_title?></option>
    <?php
        //category
    $select_cat_all="select*from `categories`";
    $rs_cat_all=mysqli_query($con,$select_cat_all);
while($row_cat_all=mysqli_fetch_assoc($rs_cat_all)){
$category_saved_title=$row_cat_all['category_title'];
$category_id=$row_cat_all['category_id'];
echo "<option value='$category_id'>$category_saved_title</option>";

};
    ?>
</select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="story_img"  class="form-label">Story Cover Image</label>
            <div class="d-flex">
            <input type="file" id="story_img" class="form-control" name="story_img" required>
            <img src="./story_cover_images/<?php echo $story_img?>" alt="" style="width: 100px;height: 100px;object-fit:contain">
            </div>
        </div>
                        <div class="form-outline w-50 m-auto mb-4">
            <label for="story_description"  class="form-label">Story Description</label>
            <input type="text" id="story_description" class="form-control" name="story_description" value="<?php echo $story_description?>" required>
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
            <div class="tab">
                                <div class="form-outline w-50 m-auto mb-4">
            <label for="story_title"  class="form-label"><?php echo $story_title?></label>
               <textarea name="content" id="content" cols="80" rows="10"  class="form-control" required>
                <?php echo $content?>
            </textarea>
        </div>

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
     <div class="text-center">
        <input type="submit" name="edit_saved_story" value="Submit">
     </div>
            </div>
    </form>

</div>
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
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('content');
        });
    </script>
<?php
//edit story
if(isset($_POST['edit_saved_story'])){
    $writter_name=$_POST['writter_name'];
        $story_title=$_POST['story_title'];
    $category=$_POST['category'];
    $story_img=$_FILES['story_img']['name'];
        $story_temp_img=$_FILES['story_img']['tmp_name'];
    $story_description=$_POST['story_description'];
    $content=$_POST['content'];

move_uploaded_file($story_temp_img,"./story_cover_images/$story_img");
    $update_query="update `saved_stories` set user_id='$user_id',writter_name='$writter_name',story_title='$story_title',
    story_description='$story_description',category_id='$category',cover_image='$story_img',content='$content',created=NOW() where saved_story_id=$edit_id";
$rs_update=mysqli_query($con,$update_query);
    if($rs_update){
        echo "<script>alert('Story Updated successfully.')</script>";
                echo "<script>window.open('./user_stories.php','_self')<script>";

    }
}

?>