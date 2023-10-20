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
         <form action="" method="POST" enctype="multipart/form-data" class="border" style="color: wheat;" id="regForm">
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
     <div style="overflow: hidden;">
      <div style="float: right;">
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
      </div>
    </div>
</div>
<!--textarea-->
<div class="tab">

<div class="form-outline mb-4 w-50 m-auto">

         
            <textarea name="editor" id="editor" cols="80" rows="10">
                this is my text area
            </textarea>
</div>



<!--move button-->
         <div style="overflow: hidden;">
      <div style="float: right;">
        <div style="overflow:auto;">
          <div style="float:left;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          </div>
          <div style="float:right;">
          <input type="submit" name="save" value="Save"  class="btn btn-outline-success btn-info mb-3 px-3">
           <input type="submit" name="submit" value="Submit" id="submitBtn" class="btn btn-outline-success btn-info mb-3 px-3" onclick="nextPrev(1)">
            <!--button type="button" id="submitBtn" name="submit" onclick="nextPrev(1)">Submit</button-->
          </div>
        </div>
      </div>
</div>
</div>
          <!--div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-success btn-info mb-3 px-3">
            
   </div-->
         </form>
</div>
<style>
  /* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04aa6d;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04aa6d;
}

</style>



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
    document.getElementById("submitBtn").style.display = "none";
  } else if (n === x.length - 1) {
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("nextBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "inline";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("submitBtn").style.display = "none";
  }

  // Set the color of the "step" class based on your requirement
  var stepElements = document.getElementsByClassName("step");
  for (var i = 0; i < stepElements.length; i++) {
    if (i === n) {
      stepElements[i].style.backgroundColor = "#04aa6d"; // Set your desired color
    } else {
      stepElements[i].style.backgroundColor = "#bbbbbb"; // Set your inactive color
    }
  }
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  showTab(currentTab);
}

</script>
 <!--add CKEDITOR to textarea-->
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('editor');
        });
    </script>
           
   
