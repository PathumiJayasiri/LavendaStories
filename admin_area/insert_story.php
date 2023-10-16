<?php
//include_once 'submit.php';
include('../DbConnector/connect.php');


//if form is submitted
if(isset($_POST['submit'])){
    $writter_name=$_POST['writter_name'];
    $story_tit = $_POST['story_title']; // Corrected to 'story_title'
    $story_descri = $_POST['story_description']; // Corrected to 'story_descri'
    $story_cat = $_POST['story_category'];
$editorContent=$_POST['editor'];
    // File handling for image upload
    if (!empty($_FILES['story_img']['name'])) {
        $story_img1 = $_FILES['story_img']['name'];
        $temp_story_img = $_FILES['story_img']['tmp_name'];

        move_uploaded_file($temp_story_img, "./story_cover_images/$story_img1");
    } else {
        $story_img1 = ''; // Set to an empty string if no file is uploaded
    }

//check where empty
    if(!empty($writer_name)||!empty($story_tit)||!empty($story_descri)||!empty($story_cat)||!empty($story_img1)||!empty($editorContent)){

//move_uploaded_file($tem_story_img,"./story_cover_images/$story_img");

        $insert_story=("INSERT INTO `view_stories` (writter_name,story_title,story_description,category_id,cover_image,content,created) VALUES ('$writter_name','$story_tit','$story_descri','$story_cat','$story_img1','$editorContent',NOW()) ");
        $result_query=mysqli_query($con,$insert_story);

        if($result_query){
                   echo "<script>alert('successfully inserted the story')</script>";
                   

        }else{
                   echo "<script>alert('not successfully inserted the story')</script>";
        }
    }else{
         echo "<script>alertPleace fill all the fields</script>";
         
    }

  
}

?>

<div class="container">
        <h1 class="text-center bg-info">Write your Story</h1>


        <!--writing story-->
         <form action="" method="POST" enctype="multipart/form-data" class="border" style="color: wheat;">
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  
</div>
<div class="tab">
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
  
</div>
<!--textarea-->
<div class="tab">

<div class="form-outline mb-4 w-50 m-auto">

         
            <textarea name="editor" id="editor" cols="80" rows="10">
                this is my text area
            </textarea>
</div>

</div>

<!--move button-->
        <div style="overflow: hidden;">
        <div style="float: right;">
        <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
    </div>
    </div>
          <!--div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-success btn-info mb-3 px-3">
            
   </div-->
         </form>
</div>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}



function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
 <!--add CKEDITOR to textarea-->
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('editor');
        });
    </script>
           
   
