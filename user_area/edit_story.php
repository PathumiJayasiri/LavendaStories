<?php
if(isset($_GET['edit_story'])){
   $user_username=$_SESSION['username'];

}
?>


<div class="container mt-5">
    <h3 class="text-center">Edit Story</h3>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="tab">

        <div class="form-outline w-50 m-auto mb-4">
            <label for="writter_name"  class="form-label">Writter Name</label>
            <input type="text" id="writter_name" class="form-control">
        </div>
                <div class="form-outline w-50 m-auto mb-4">
            <label for="story_title"  class="form-label">Story Title</label>
            <input type="text" id="story_title" class="form-control">
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="category"  class="form-label">Categoty</label>
<select name="category" class="form-select">
    <option value="">1</option>
</select>
        </div>
        <div class="form-outline w-50 m-auto mb-4">
            <label for="story_img"  class="form-label">Story Cover Image</label>
            <div class="d-flex">
            <input type="file" id="story_img" class="form-control">
            <img src="./story_cover_images/bg.jpg" alt="" style="width: 100px;height: 100px;object-fit:contain">
            </div>
        </div>
                        <div class="form-outline w-50 m-auto mb-4">
            <label for="story_description"  class="form-label">Story Description</label>
            <input type="text" id="story_description" class="form-control">
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
            <label for="story_title"  class="form-label">Story Title</label>
               <textarea name="content" id="content" cols="80" rows="10"  class="form-control">
                this is my text area
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
        <input type="submit" name="edit_story" value="Submit">
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
            CKEDITOR.replace('editor');
        });
    </script>
