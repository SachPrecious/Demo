<table width="795" align="center" bgcolor="pink">



      <tr align="center">
          <td colspan="6"><h2>View All Products</h2></td>
      </tr>

      <tr align="center"  >
              <th>Serial Number</th>
              <th>Title</th>
              <th>Images</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>              
      </tr>
<?php 

include("../DatabaseConnection.php");

$get_pro="select * from products";
$run_pro=mysqli_query($con,$get_pro);
$i=0;
while($row_pro=mysqli_fetch_array($run_pro)){

    $pro_id=$row_pro['product_id'];
    $pro_title=$row_pro['product_title'];
    $pro_image=$row_pro['product_image'];
    $pro_price=$row_pro['product_price'];
$i++;



?>


      <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $pro_title; ?></td>
          <td><img src="../product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>
          <td><?php echo $pro_price; ?></td>
          <td><a href="index.php?edit_pro=<?php $pro_id;?> ">Edit</a></td>
          <td><a href="delete_pro.php?delete_pro=<?php $pro_id;?>">Delete</a></td>

      </tr>

<?php } ?>






</table>