<h3 class="text-center">All Categories</h3>
<table class="table table-bordered mt-5 w-50 m-auto" >
<tbody class=" m-auto" >
<?php
$query="select * from `categories`";
$rs=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($rs)){
$category_id=$row['category_id'];
$category_title=$row['category_title'];
$category_image=$row['category_image'];


?>

    <tr>
    <td class="d-flex ">
        <img src="./category_images/<?php echo $category_image?>" alt="" class="m-auto" style="width: 100px;height: 100px;object-fit:contain;">
</td><td class="m-auto m-5"> <h4 class="text-center">Category Title:
            <label for=""><?php echo $category_title?></label>
        </h4>

      <div class="m-auto d-flex w-50"> <input type="submit" value="Edit" name="edit">
              <input type="submit" value="Delete" name="delete"></div>

    </td></tr>
    <?php }?>
</tbody>
</table>