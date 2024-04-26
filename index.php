<!-- include header.php -->
<?php include 'includes/header.php'; ?>
<?php include 'includes/slider.php'; ?>


 <div class="homeVehicles">
    <div class="container">
		<div class="container-header">
			<h3>PRODUCTS</h3>
		</div>

		<div class="flex-container">
			<?php
				$product_feathered = $product->getproduct_feathered();
				if($product_feathered){
					while($result_pf=$product_feathered->fetch_assoc()){
			?>
			<div class="card">
				<a href="productdetail.php?productId=<?php echo $result_pf['productId']?>" style="color: inherit; text-decoration: none;">
					<img src="<?php echo $result_pf['productImage'] ?>" class="card-img-top" alt="Product Image">		
					<div class="card-body">
						<h5 class="p3"><?php echo $result_pf['productName']; ?></h5>
						<div class="cart-greenSpacer"></div>
						<p class="card-text">Price: <?php echo $result_pf['productPrice'] ?>đ</p>
						<!-- <a href="#" class="btn btn-primary">Buy now</a> -->
					</div>
				</a>
			</div>
			<?php 
					}
				}
				?>
        </div>
	</div>
 </div>
</body>
<!-- //////// FOOTER ///////// -->
<?php include 'includes/footer.php'; ?>

