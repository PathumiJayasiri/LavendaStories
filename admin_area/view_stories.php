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
$story_title=$row['story_title'];
$created=$row['created'];


?>

    <tr>
    <td class="d-flex ">
        <img src="../user_area/story_cover_images/<?php echo $cover_image?>" alt="" class="m-auto" style="width: 100px;height: 100px;object-fit:contain;">
</td><td class="m-auto m-5"> <h5 class="text-center">Story Title:
            <label for=""><?php echo $story_title?>
</label>
        </h5>
<h5 class="text-center">Writter Name:
            <label for=""><?php echo $writter_name?></label>
        </h5>
        <h5 class="text-center">Date:
            <label for=""><?php echo $created?></label>
        </h5>
      <div class="m-auto d-flex w-50"> <a href="admin_index.php?edit_story"><input type="submit" value="Edit" name="edit"></a>
              <input type="submit" value="Delete" name="delete"></div>
    </td></tr>
    <?php }?>
</tbody>
</table>