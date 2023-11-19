<?php
include('../DbConnector/connect.php');
?>
<body style="background:url(../images/catbg2.jpg)no-repeat;object-fit:contain">
  <!--home section start-->

   <!--home section end-->
     <!--about section start-->
  <!--about section ends-->
    <!--fourth child-->
     <section class="category"id="category" style="padding-top: 10%;">
    <div class="row">
         
      
 
 
<h1 class="heading" >Our <span>Categories</span> </h1>

 
 <div class="row">
  

   
<?php
//getting category in home page

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
  <img src='../admin_area/category_images/$category_image' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h3 class='card-title'>$category_title</h5>

     <a href='user_index.php?category_stories=$category_id' class='btn btn-secondary'>Read more</a>
  </div>
</div>
  </div>";
}

?>
 

</div>
</div>
    
 


     </section> 


    


    


</body>
</html>