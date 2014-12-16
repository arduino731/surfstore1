<?php  include("inc2/products.php"); 

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location: shirts.php");
	exit();
}
$section = "shirts";
$pageTitle = $product["name"];

include("inc2/header.php");

?>

  		<li><a href="about.php">ABOUT US</a></li>
        <li><a href="ourblog.php">OUR BLOG</a></li>
        <li><a href="talktous.php" >TALK TO US</a></li>
        <li><a href="location.php">LOCATION</a></li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



		<div class="section page" style="margin-top:52px;">

			<div class="wrapper">

				<div class="breadcrumb" style="text-align:center;"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?>
				</div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>
				
				<div class="shirt-details" style="margin:-314px -66px 198px 50px;">
					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?> </h1>
				
					
					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Size</label>
							</th>
							<td>
								<select na me="os0" id="os0">
									<?php foreach($product["sizes"] as $size) { ?>
									<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
									<?php } ?>
								</select>
							</td>
						</tr>
						</table>
						<input type="image" style= "margin-left:135px;" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>

					<p class="note-designer"> Orders with 3 or more shirts get free shipping!</p> 
					<p class="note-designer">* All shirts are designed by Brian van Vlymen.</p>
				</div>


			</div>
		</div>
			
	









<?php include("inc2/footer.php"); ?>