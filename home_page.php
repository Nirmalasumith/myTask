<?php

	//database connection
include("db_connect.php");

		//retrive feature product
$sqlGetFeatureProducts = "SELECT products.product_id,
						product_image.product_img_id,
						products.product_name,
						products.product_category, 
						products.product_price,
						product_image.product_images,
						product_image.product_image_status 
						FROM   products
						INNER JOIN  product_image 
						ON 
						products.product_id = product_image.product_parent_id 
						WHERE  
						products.product_status = 'active' 
						AND
						products.feature_product = 'yes'
						AND 
						product_image.product_image_status = 1 ";


     //query connection
$resultFeatureProducts = mysqli_query($conn,$sqlGetFeatureProducts);

?>
<h2> FEATURE PRODUCTS </h2>
<a href="add_product.php">Add Product</a><br>
<table>
	<tr>
		<th>Product Name</th>
		<th>Product Image</th>
		<th>Product Category</th>
		<th>Product Prize</th>
		<th>Add Image</th>
		<th>View Product</th>
		<th>Update Product</th>
		<th>Delete Product</th>

	</tr>
	<?php
	while($rowFeatureProducts = mysqli_fetch_assoc($resultFeatureProducts)) 
	{
		?>
		<tr>
			<td> <a href="product_list.php?product_id=<?=$rowFeatureProducts['product_id']; ?>"> <?=$rowFeatureProducts['product_name']; ?></a>
			</td>

			<td><a href="product_list.php?product_id=<?=$rowFeatureProducts['product_id']; ?>"><img src="./images/<?= $rowFeatureProducts['product_images'];?>"  style="height:200px; width:50%;"></a>
			</td>

			<td><?=  $rowFeatureProducts['product_category']; ?></td>
			<td><?= $rowFeatureProducts['product_price']; ?> </td>
			<td><a href="insert_product_image.php?product_id=<?=$rowFeatureProducts['product_id']; ?>">Add Image </a>
			</td>

			<td><a href="view_product.php?product_id=<?=$rowFeatureProducts['product_id']; ?>">View Product </a>
			</td>

			<td><a href="update_value.php?product_id=<?=$rowFeatureProducts['product_id']; ?>">Update Product </a>
			&nbsp;

			<a href="delete_product.php?product_id=<?=$rowFeatureProducts['product_id']; ?>"  onclick="return confirm('Are you sure delete the product?')";>Delete Product </a>
			</td>

			<?php

		}
		
		?>




