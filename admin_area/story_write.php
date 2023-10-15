<?php
include_once 'submit.php';
include('../DbConnector/connect.php');
$editorContent=$statusMsg='';

//if form is submitted
if(isset($_POST['submit'])){
    $story_title = $_POST['story_title']; 
    $story_descri = $_POST['story_descri']; 
    $story_category = $_POST['story_category'];

    // File handling for image upload
    if (!empty($_FILES['story_img']['name'])) {
        $story_img = $_FILES['story_img']['name'];
        $temp_story_img = $_FILES['story_img']['tmp_name'];

        move_uploaded_file($temp_story_img, "./story_cover_images/$story_img");
    } else {
        $story_img = ''; // Set to an empty string if no file is uploaded
    }

//check where empty
    if(!empty($story_title)||!empty($story_descri)||!empty($story_category)||!empty($story_img)){
//move_uploaded_file($tem_story_img,"./story_cover_images/$story_img");

        $insert_story=("INSERT INTO `story` (story_title,story_description,category_id,cover_image,date) VALUES ('$story_title','$story_descri','$story_img',NOW()) ");
        $result_query=mysqli_query($con,$insert_story);

        if($result_query){
                   echo "<script>alert('successfully inserted the story')</script>";
                   header("Location:story_write.php");

        }else{
                   echo "<script>alert('not successfully inserted the story')</script>";
        }
    }else{
         echo "<script>alertPleace fill all the fields</script>";
         exit();
    }

  
}

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
         <form action="" method="POST" enctype="multipart/form-data">

<div class="form-outline mb-4 w-50 m-auto">

         
            <textarea name="editor" id="editor" cols="80" rows="10">
                this is my text area
            </textarea>
</div>
            <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="submit_story" value="Add Story" class="btn btn-info">

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
             <!--add CKEDITOR to textarea-->
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('editor');
        });
    </script>
   
</body>
</html>