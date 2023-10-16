<?php
//include_once 'submit.php';
include('../DbConnector/connect.php');


//if form is submitted
if(isset($_POST['insert_infor'])){
    $writter_name=$_POST['writter_name'];
    $story_tit = $_POST['story_title']; // Corrected to 'story_title'
    $story_descri = $_POST['story_description']; // Corrected to 'story_descri'
    $story_cat = $_POST['story_category'];

    // File handling for image upload
    if (!empty($_FILES['story_img']['name'])) {
        $story_img1 = $_FILES['story_img']['name'];
        $temp_story_img = $_FILES['story_img']['tmp_name'];

        move_uploaded_file($temp_story_img, "./story_cover_images/$story_img1");
    } else {
        $story_img1 = ''; // Set to an empty string if no file is uploaded
    }

//check where empty
    if(!empty($writer_name)||!empty($story_tit)||!empty($story_descri)||!empty($story_cat)||!empty($story_img1)){

//move_uploaded_file($tem_story_img,"./story_cover_images/$story_img");

        $insert_story=("INSERT INTO `story` (writter_name,story_title,story_description,category_id,cover_image,date) VALUES ('$writter_name','$story_tit','$story_descri','$story_cat','$story_img1',NOW()) ");
        $result_query=mysqli_query($con,$insert_story);

        if($result_query){
                   //echo "<script>alert('successfully inserted the story')</script>";
                   header("Location:story_write.php");

        }else{
                   echo "<script>alert('not successfully inserted the story')</script>";
        }
    }else{
         echo "<script>alertPleace fill all the fields</script>";
         
    }

  
}

?>


        <h1 class="text-center bg-info">Write your Story</h1>

        <!--writing story-->
         <form action="" method="POST" enctype="multipart/form-data" class="border" style="color: wheat;">
<div class="form-outline mb-4 w-50 m-auto">
      <!--title-->
    <label for="writter_name" class="form-label">
        Writter Name
    </label>
    <input type="text" name="writter_name" id="writter_name" class="form-control" placeholder="Enter Story Title" autocomplete="off" required>
</div>
<div class="form-outline mb-4 w-50 m-auto">
      <!--title-->
    <label for="story_title" class="form-label">
        Story Title
    </label>
    <input type="text" name="story_title" id="story_title" class="form-control" placeholder="Enter Story Title" autocomplete="off" required>
</div>
    <!--description-->
    <div class="form-outline mb-4 w-50 m-auto">
    <label for="story_description" class="form-label">
        Story description
    </label>
    <input type="text" name="story_description" id="story_description" class="form-control" placeholder="Enter Story Description" autocomplete="off" required>
    </div>
<!--category select-->
<div class="form-outline mb-4 w-50 m-auto">
 <label for="story_category" class="form-label">
        Select Category
    </label>
    <select name="story_category" class="form-select">
        <option value="">Select Category</option>

<?php
$select_query="SELECT * FROM `categories`";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['category_title'];
    $category_id=$row['category_id'];
    echo "   <option value='$category_id'> $category_title</option>";
}

?>
    </select>  
</div>

      <!--image-->

<div class="form-outline mb-4 w-50 m-auto">
    <label for="story_img" class="form-label">
        Story Cover Image
    </label>
    <input type="file" name="story_img" id="story_img" class="form-control" required>
 </div>
  




         
        
          <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_infor" value="Submit" class="btn btn-outline-success btn-info mb-3 px-3">
            
   </div>
         </form>
    

           
   
