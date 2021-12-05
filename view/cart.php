<?php

	
	
	session_destroy();
?>
<p>Cart View</p>

<?php
	
	
	 if(!empty($_SESSION['cart']){
                $total=0;
                foreach ($_SESSION['cart']) as $key => $value) {
                	# code...
             
	?>
<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">
				<div class="main_content">
					<div class="products_iso">
						<div class="row">
							<div class="col-md-12">
								<h3>ADD Cart</h3>
								<p><a href="index.php">continue shopping</a></p>
								<p><a href="?act=cart">xoa gio hang</a></p>
								<tr>
									
								</tr>
									<th>!</th>
									<th>name</th>
									<th>quatity</th>
									<th>price</th>
								<tr>
									<td><?=$value['item_name'];?></td>
									<td><?=$value['item_quatity'];?></td>
									<td><?=$value['item_price'];?></td>
									<th><?php echo number_format($value['item_quatity']*$value['price'],2);?></th>
								</tr>


								<?php

								$total=$total+($value['item_quatity']*$value['price']);
							}
								?>
								<th><?php echo number_format($total,2);?></th>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
}?>