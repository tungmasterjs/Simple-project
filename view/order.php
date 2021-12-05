	<?php
		var_dump($_SESSION['cart']);
		// foreach ($user as $user) {
		// 	# code...
		// }
	// if (isset($_POST['buy'])) {
 //               echo '<script>alert("Cam on ban da mua hang @@ Vui long kiem tra mail de nhan xem chi tiet nhan hang ");</script>';
 //           }
	?>
	<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">

					<div>
												<h2 style="text-align: center;">ORDER PRODUCT</h2>
						<form action="?act=buy" method="post">
							  <div class="form-row">
							  	 <div class="form-group col-md-6">
							      <label for="inputPassword4">Name</label>
							      <input value="<?=$user['name'];?>" type="text" class="form-control" id="inputPassword4">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="inputEmail4">Email</label>
							      <input value="<?=$user['email'];?>" type="email" class="form-control" id="inputEmail4">
							    </div>
							   
							  </div>
							  <div class="form-row">
							  	 <div class="form-group col-md-6">
							      <label for="inputPassword4">Address</label>
							      <input value="<?=$user['address'];?>" type="text" class="form-control" id="inputPassword4">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="inputEmail4">Phone</label>
							      <input value="<?=$user['phone'];?>" type="text" class="form-control" id="inputEmail4">
							    </div>
							   
							  </div>
							  <div>
							  		<h5 style="text-align: center;">Order</h5>
							  		<table class="table">
									
												  <thead>
												    <tr>
												      <th scope="col">#</th>
												      <th scope="col">Name</th>
												      <th scope="col">Image</th>
												      <th scope="col">Quality</th>
												      <th scope="col">Price</th>
												      
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
							  </div>
							  <div class="form-group">
							    <label for="inputAddress">STK cua ban</label>
							    <input type="text" class="form-control" id="inputAddress" placeholder="1223358213654">
							  </div>
							  <div class="form-group">
							    <label for="inputAddress2">Ma giao dich</label>
							    <input type="text" class="form-control" id="inputAddress2" placeholder="12233">
							  </div> 
							  <div class="form-row">
							    
							   
							   
							  </div>
							  
							  <input type="submit" name="buy" value="Buy" class="btn btn-primary">
							</form>

					</div>
				</div>
			</div>
	</div>