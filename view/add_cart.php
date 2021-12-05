<?php
	
	
	var_dump($_SESSION['cart']);
	
// 
	?>

<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">
				<div class="main_content">
					<div class="products_iso">
						<div class="row">
							<div class="col-md-12">
								<h3>View Cart</h3>
								<p><a href="index.php">continue shopping</a></p>
								<p><a href="?act=del_allcart">xoa gio hang</a></p>
								<form action="?act=order" method="post">
								<table class="table">
									
												  <thead>
												    <tr>
												      <th scope="col">#</th>
												      <th scope="col">Name</th>
												      <th scope="col">Image</th>
												      <th scope="col">Quality</th>
												      <th scope="col">Price</th>
												      <th scope="col">Status</th>
												    </tr>
												  </thead>
								<?php
								$total =0;
									if(!empty($_SESSION['cart'])){
										
									foreach ($_SESSION['cart'] as $key => $value) {
										$total = $total+($value['item_quality']*$value['item_price']);
										echo'
											
												  <tbody>
												    <tr>
												      <th scope="row"></th>
												      <td>'.$value['item_name'].'</td>
												      <td><img style="width:50px;height:50px;" src="../view/images/'.$value['item_image'].'" alt="">

												      </td>
												       <td>'.$value['item_quality'].'</td>
												       <td>'.$value['item_price'].'</td>
												       <td><a href="index.php?act=del_cart&id='.$value['item_id'].'"><i class="fa fa-remove" style="font-size:28px"></i></a></td>
												    </tr>
												     <input type="hidden" name="price" value="'.$value['item_price'].'">
												    <input type="hidden" name="qua" value="'.$value['item_quality'].'">
												    <input type="hidden" name="image" value="'.$value['item_image'].'">
												    <input type="hidden" name="name" value="'.$value['item_name'].'">
											 		
										';

									}
									}
								?>
								<tr>
												      <th scope="col"></th>
												      <th scope="col"></th>
												      <th scope="col">Total</th>
												      <th scope="col"></th>
												      <th scope="col"><?php echo number_format($total); ?></th>
												    </tr>

							 </tbody>
							 
											</table>
											<?php
												   	if(isset($_GET['error'])){
												   		echo '<p style="color:red;">Ban can dang nhap de mua hang</p>';
												   	}
												   ?>
											<input type="hidden" name="total" value="<?=$total;?>">
							 <input class="btn btn-success" type="submit" name="order" value="order">
							 </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
