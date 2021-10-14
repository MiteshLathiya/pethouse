
<script type="text/javascript">
function sub()
{
var p=document.getElementById("price").value;
var q=document.getElementById("qty").value;
var t=p*q;
document.getElementById("subtot").innerHTML=t;

}
</script>
<br><br>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo $mainurl?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cart </li>
		</ol>
	</div>
</nav>

<div class="cart_area cart-area-padding sp-inner-page--top">
			<div class="container">
				<div class="page-section-title">
					<h1>SHOPPING CART</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<form  method="post">
							<!-- Cart Table -->
							<div class="cart-table table-responsive mb--40">
								<table class="table">
									<!-- Head Row -->
									<thead>
										<tr>
											<th class="pro-remove">Product</th>
											<th class="pro-thumbnail">Name</th>
											<th class="pro-title">Price</th>
											<th class="pro-price">Quantity</th>
											<th class="pro-quantity">Total</th>
										
											
										</tr>

									</thead>
									<tbody>
										<!-- Product Row -->
									
										<tr>
											<?php foreach ($productdata as $productdata1) {
											?>
											
												
												<td class="pro-thumbnail"><a href="#"><img src="admin/<?php echo $productdata1["pimage"];?>" alt="Product"></a></td>
											
												<input type="text" name="pid" value="<?php echo $productdata1["pid"];?>" readonly style="border:none; display:none">

											
												<td class="pro-title"><input type="text" name="pname" value="<?php echo $productdata1["pname"];?>" readonly style="border:none;  "></td>
											
											<td class="pro-price"><span>Rs.
											<input type="text"  name="pprice" id="price" value="<?php echo $productdata1["psprice"];?>" readonly style="border:none"></h5>
											</span></td>
											<td class="pro-quantity">
												<div class="pro-qty">
													<div class="count-input-block">
														<input type="number" class="form-control text-center" value="1" name="qty" id="qty" min="1" max="10" onchange="return sub(this.value)">
													</div>
												</div>
											</td>
											
											<td class="pro-subtotal"><span> Rs.<label id="subtot"><?php echo $productdata1["psprice"];?></label></span></td>
											
										
											<?php }
											?>
										</tr>
										
										<tr>
											<td colspan="6" >

												

												<div class="update-block text-right">
												<!-- <input type="submit" name="addcart" class="btn-black" > -->
												<button type="submit" name="addcart" class="btn-black">AddToCart</button>
													
												</div>
											</td>
										</tr>
										
									</tbody>
								</table>
							</div>

						</form>

						
					</div>
				</div>
			</div>
		</div>

		