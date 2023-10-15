<?php
include_once 'submit.php';
include('../DbConnector/connect.php');
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--style css link-->
<link rel="stylesheet" href="../style.css">
    
    <!--boostrap css link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--font auwsom link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!--add CKEDITOR library-->
<script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>


</head>
<body class="bg-light">
    <title>Insert story admin</title>
</head>
<body>
    <div class="container mt-3">
        <?php
        if(!empty($statusMsg)){
        ?>

        <p class="stmsg">
            <?php echo $statusMsg;
            ?>
        </p>
        <?php }?>



        <div class="sd-frm">
        <h1 class="text-center">Write your Story</h1>

        <!--writing story-->
        <form action="" method="post" enctype="multipart/form-data"> 

<div class="form-outline mb-4 w-50 m-auto">
      <!--title-->
    <label for="story_title" class="form-label">
        Story Title
    </label>
    <input type="text" name="story_title" id="story_title" class="form-control" placeholder="Enter Story Title" autocomplete="off" required>
</div>
    <!--description-->
    <div class="form-outline mb-4 w-50 m-auto">
    <label for="story_descri" class="form-label">
        Story description
    </label>
    <input type="text" name="story_descri" id="story_title" class="form-control" placeholder="Enter Story Description" autocomplete="off" required>
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
    $category_id=$row['category_id '];
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
            <textarea name="story" id="story" cols="80" rows="10">
                this is my text area
            </textarea>
</div>
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="submit" value="Submit" class="btn btn-outline-success btn-info">
             <!--add CKEDITOR to textarea-->
   </div>
        </form>
    </div>

    <?php
    if(empty($editorContent)){
    ?>
    <h4>Pleace Insert story</h4>
    <?php echo $editorContent; ?>
</div>
<?php } ?>
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('story');
        });
    </script>
   
</body>
</html>