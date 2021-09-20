<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    
   <div class="main_wrapper">

   <div id="header"></div>

   <div id="right">
       <h2 style="text-align: center; color:aliceblue;">Manage content</h2>

       <a href="index.php?insert_product" >Insert New Products</a>
       <a href="index.php?view_products" >View All Products</a>
       <a href="index.php?insert_cat" >Insert New Category</a>
       <a href="index.php?insert_brand" >Insert New Brand</a>
       <a href="index.php?view_cats" >View All categories</a>
       <a href="index.php?view_brands" >View All Brands</a>
       <a href="index.php?view_customers" >View Customers</a>
       <a href="index.php?view_orders" >View Orders</a>
       <a href="index.php?view_payments" >View Payments</a>
       <a href="index.php?insert_product" >Admin Logout</a>   

   </div>
     
   
   <div id="left">
   <?php 
   if(isset($_GET['insert_product'])){
       include("../insert_product.php");

   }
   if(isset($_GET['view_products'])){
    include("view_products.php");
   }
    if(isset($_GET['edit_pro'])){
        include("edit_pro.php");
    
    }

   ?>

   </div>

   </div>



</body>
</html>