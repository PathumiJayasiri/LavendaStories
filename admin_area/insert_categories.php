<?php
include('../DbConnector/connect.php');
?>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-5">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" name="cat_title" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
</div>
<!--div class="input-group w-10 mb-2 m-auto">
  <input type="submit" name="insert_cat" value="Insert Category" class="form-control bg-info" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
</div-->
<button class="bg-info p-2 border-0 ">
    Insert Category
</button>
</form>