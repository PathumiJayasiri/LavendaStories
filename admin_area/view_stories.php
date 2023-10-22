<h3 class="text-center">All Stories</h3>

<table class="table table-bordered mt-5 w-50 m-auto" >
<tbody class=" m-auto" >
<?php
$query="select * from `view_stories`";
$rs=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($rs)){
$story_id=$row['story_id'];
$user_id=$row['user_id'];
$story_description=$row['story_description'];
$writter_name=$row['writter_name'];
$category_id=$row['category_id'];
$cover_image=$row['cover_image'];
$content=$row['content'];
$story_id=$row['story_id'];
$story_id=$row['story_id'];


?>

    <tr>
    <td class="d-flex ">
        <img src="./category_images/<?php echo $category_image?>" alt="" class="m-auto" style="width: 100px;height: 100px;object-fit:contain;">
</td><td class="m-auto m-5"> <h5 class="text-center">Category Title:
            <label for=""><?php echo $category_title?></label>
        </h5>
<h5 class="text-center">Category Title:
            <label for=""><?php echo $category_title?></label>
        </h5>
        <h5 class="text-center">Category Title:
            <label for=""><?php echo $category_title?></label>
        </h5>
      <div class="m-auto d-flex w-50"> <input type="submit" value="Read" name="read">
              <input type="submit" value="Delete" name="delete"></div>

    </td></tr>
    <?php }?>
</tbody>
</table>