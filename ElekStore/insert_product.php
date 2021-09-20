


<!DOCTYPE html>
<?php

include("DatabaseConnection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Products</title>
    
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body bgcolor="skyblue">

<form action="insert_product.php" method="post" enctype="multipart/form-data">

<table align="center" width="750" border="2" bgcolor="orange">
    <tr align="center">
       <td colspan="7"><h2>Insert New Products Here</h2></td>
    </tr>
    
    <tr>
        <td align="right"><b>Product Title</b></td>
        <td><input type="text" name="product_title" id="" size="50"></td>
    </tr>

    <tr>
        <td align="right"><b>Product Category</b> </td>
     
        <td>
             <select name="product_cat" id="">
                <option value="">Select Category</option>
                 <?php
                 
                $get_cats="select * from categories";
                $run_categories=mysqli_query($con,$get_cats);

                 while($row_categories=mysqli_fetch_array($run_categories)){

                    $cat_id=$row_categories['cat_id'];
                    $cat_title=$row_categories['cat_title'];
                    
                   echo "<option value='$cat_id'>$cat_title</option>";

                 }
                ?>
             </select>

        </td>

    </tr>
    <tr>
        <td align="right"><b>Product Brand</b> </td>
        <td>
        <select name="product_brand" id="">
                <option value="">Select Brand</option>
                 <?php
                 
                $get_brands="select * from brands";
                $run_brands=mysqli_query($con,$get_brands);

                 while($row_brands=mysqli_fetch_array($run_brands)){

                    $brand_id=$row_brands['brand_id'];
                    $brand_title=$row_brands['brand_title'];
                    
                   echo "<option value='$brand_id'>$brand_title</option>";

                 }
                ?>
             </select>
        
        
        
        
        
        
        </td>
    </tr>
    
    
    <tr>
        <td align="right"><b>Product Image</b> </td>
        <td><input type="file" name="product_image" id=""></td>
    </tr>
    <tr>
        <td align="right"><b>Product Price</b> </td>
        <td><input type="text" name="product_price" id=""></td>
    </tr>
    <tr>
        <td align="right"><b>Product Description</b> </td>
        <td>
            <textarea name="product_desc" id="" cols="35" rows="8"></textarea>
        </td>
    </tr>
    <tr>
        <td align="right"><b>Product Keywords</b> </td>
        <td><input type="text" name="product_keywords" id=""></td>
    </tr>
    <tr>
        <td align="right"><b>Quantity</b> </td>
        <td><input type="text" name="product_quantity" id=""></td>
    </tr>
    <tr>
        <td colspan="7" align="center"><input type="submit" name="insert_post" value="Insert Now"></td>
    </tr>   
      
      



</table>







</form>





</body>



</html>