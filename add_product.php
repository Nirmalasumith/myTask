<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodocts</title>
</head>
<body>
    <!-- title -->
    <h1>Add Product</h1>

    <!-- insert data -->
    <form action="save_product.php" method="POST" >

          <!--input value text form -->
         <label>Product Name *:</label>
         <input type="text" id="product_name" name="product_name" ><br><br>

          <!--input value text form -->
         <label>Product Category *:</label>
         <input type="text" id="product_category" name="product_category" ><br><br>

         <label>Product Price *:</label>
         <input type="text" id="product_price" name="product_price" ><br><br>

         <label>Product Quantity *:</label>
         <input type="text" id="product_quantity" name="product_quantity" ><br><br>

         <label>Product Size *:</label>
         <input type="text" id="product_size" name="product_size" ><br><br>

         <label>Product Description *:</label>
         <input type="textarea" id="product_description" name="product_description" ><br><br>

         <label>Product Model *:</label>
         <input type="text" id="product_model" name="product_model" ><br><br>
 
         <label>Product Brand *:</label>
         <input type="text" id="product_brand" name="product_brand" ><br><br>

         <!-- Create submit button -->
         <input type="submit" name="submit" onclick="validation()" value="Save">
    </form>

</body>
    <script type="text/javascript" src="./product_validation.js" defer></script>

</html>