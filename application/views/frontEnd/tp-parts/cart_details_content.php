<?php 

$contents = $this->cart->contents();

?>


<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($contents as $value) : ?>
			
					<tr>
						<td class="cart_product">
							<a href="#"><img src="<?php echo base_url().$value['options']['image']; ?>" width="100px" height="100px" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="#"><?php echo $value['name']; ?></a></h4>
							<p>Web ID: 1089772</p>
						</td>
						<td class="cart_price">
							<p>$<?php echo $value['price']; ?></p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
							<form action="<?php echo base_url(); ?>Cart/update_cart_item" method="post">
								<input class="cart_quantity_input" type="number" name="quantity" value="<?php echo $value['qty']; ?>" autocomplete="off" size="1">
								<input type="hidden" name="rowid" value="<?php echo $value['rowid']; ?>" >
								<input type="submit" name="update_cart" value="Update Cart">
							</form>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">$<?php echo $value['subtotal']; ?></p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="<?php echo base_url(); ?>Cart/delete_from_cart/<?php echo $value['rowid']; ?>"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="chose_area">
					<ul class="user_option">
						<li>
							<input type="checkbox">
							<label>Use Coupon Code</label>
						</li>
						<li>
							<input type="checkbox">
							<label>Use Gift Voucher</label>
						</li>
						<li>
							<input type="checkbox">
							<label>Estimate Shipping & Taxes</label>
						</li>
					</ul>
					<ul class="user_info">
						<li class="single_field">
							<label>Country:</label>
							<select>
								<option>United States</option>
								<option>Bangladesh</option>
								<option>UK</option>
								<option>India</option>
								<option>Pakistan</option>
								<option>Ucrane</option>
								<option>Canada</option>
								<option>Dubai</option>
							</select>
							
						</li>
						<li class="single_field">
							<label>Region / State:</label>
							<select>
								<option>Select</option>
								<option>Dhaka</option>
								<option>London</option>
								<option>Dillih</option>
								<option>Lahore</option>
								<option>Alaska</option>
								<option>Canada</option>
								<option>Dubai</option>
							</select>
						
						</li>
						<li class="single_field zip-field">
							<label>Zip Code:</label>
							<input type="text">
						</li>
					</ul>
					<a class="btn btn-default update" href="#">Get Quotes</a>
					<a class="btn btn-default check_out" href="#">Continue</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span>$<?php echo $this->cart->total(); ?></span></li>
						<li>Eco Tax <span>$<?php $vat = (10*$this->cart->total())/100; echo $vat; ?></span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total <span>$<?php echo $this->cart->total()+$vat; ?></span></li>
					</ul>
						<a class="btn btn-default update" href="#">Update</a>
						<a class="btn btn-default check_out" href="#">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->