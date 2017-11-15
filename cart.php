<?php  
session_start();
include ('serverlogin.php');
?>

<!DOCTYPE html>
<html>
<head>

<?php include 'meta-links.php'; ?>

</head>
<body>
<?php include 'header.php'; ?>

<div class="cartheading">
	<div class="body">
		<h1><i class="fa fa-cart-plus" aria-hidden="true"></i> Shopping Cart</h1>
	</div>
</div>

<div class="cartcontainer">
	<div class="body">

		<?php

				$carttotal = floatval(0);
				$cartqty = floatval(0);
				if (isset($_COOKIE['cart_id'])) {
				$cart = $_COOKIE['cart_id'];
				$carttable = "SELECT * FROM $cart";
				$carttableresults = $conn->query($carttable);   
            	while ($row = $carttableresults->fetch_assoc() ) {
                	
                	if (!$row) {
                		echo "<div class=\"cartheading\">";
						echo "<div class=\"body\">";
						echo "<hr>";
						echo "<h1 >Your Cart Is Empty <i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> </h1>";
						echo "<hr>";
						echo "</div>";
						echo "</div>";	
                	} else {
					echo "<div class=\"cartbody\">";
						echo "<div class=\"cartimagecontainer\">";
							echo "<div class=\"cartimage\">";
								echo "<img src=\"".$row['image']."\">";
							echo "</div>";
						echo "</div>";
						echo "<div class=\"cartmaindescription\">";
							echo "<div class=\"catalogdescparagraph\">";
								echo "<span class=\"productname\">".$row['product_name']."</span>";
								echo "<span class=\"productprice\">$".$row['price']." /ea.</span>";
								echo "<span class=\"productcolor\">Color: ".$row['color']."";
								echo "<span class=\"productcategory\">ID# ".$row['product_id']."</span>";
								echo "<span class=\"productsku\">SKU# ".$row['sku']."</span>";
							echo "</div>";
						echo "</div>";
						echo "<div class=\"cartqty\">";
							
							echo "<span class=\"cartproductqty\">Qty: <hr><br> ".$row['qty']."</span>";
							echo "<span class=\"cartproductprice\">Sub: <hr><br> $".$row['qty'] * $row['price']."</span>";
							
						echo "</div>";
						echo "<div class=\"cartdescbutton\">";
							echo "<form action=\"shoppingcart.php\" method=\"POST\">";
								echo "<input type=\"hidden\" value=\"".$row['sku']."\" name=\"removesku\">";
								echo "<input type=\"hidden\" value=\"".$_COOKIE['cart_id']."\" name=\"cartid\">";
								echo "<input type=\"submit\" value=\"remove\" name=\"remove\">";
							echo "</form>";
						echo "</div>";
					echo "</div>";

					$qty = $row['qty'];
					$cartqty += $qty;

					$sum = ($row['qty'] * $row['price']);
					$carttotal += $sum;
					}			
                }
               } else {
               	echo "<div class=\"cartheading\">";
				echo "<div class=\"body\">";
				echo "<hr>";
				echo "<h1 >Your Cart Is Empty <i class=\"fa fa-frown-o\" aria-hidden=\"true\"></i> </h1>";
				echo "<hr>";
				echo "</div>";
				echo "</div>";
               }
         ?>      	
		<div class="carttotal">
			<div class="cartdetails">
				<div class="totals">
					<ul>
						<li>$<?php echo $carttotal; ?></li>
						<li>FREE</li>
						<li>FREE</li>
						<li>$<?php echo $carttotal; ?></li>
					</ul>
				</div>
				<div class="totalheadings">
					<ul>
						<li>Subtotal</li>
						<li>Tax</li>
						<li>Shipping</li>
						<li>Total</li>
					</ul>
				</div>
			</div>
			<div class="checkoutbuttons">
				<?php if (isset($_SESSION['logged_in'])) {
					echo "<div class=\"pure-g\">";
					echo "<div class=\"pure-u-1\">";
					echo "<h2>check out</h2>";
					echo "</div>";
					echo "<form method=\"POST\" action=\"shoppingcart.php\">";
					echo "<div class=\"pure-u-1 pure-u-md-1-2 pure-u-lg-1-2\">";
					echo "<input type=\"text\" name=\"firstname\" placeholder=\"first name\">";
					echo "<input type=\"text\" name=\"lastname\" placeholder=\"last name\">";
					echo "<input type=\"text\" name=\"address_1\" placeholder=\"address 1\">";
					echo "<input type=\"text\" name=\"address_2\" placeholder=\"address 2\">";
					echo "</div>";
					echo "<div class=\"pure-u-1 pure-u-md-1-2 pure-u-lg-1-2\">";
					echo "<input type=\"text\" name=\"city\" placeholder=\"city\">";
					echo "<input type=\"text\" name=\"state\" placeholder=\"state\">";
					echo "<input type=\"text\" name=\"zip\" placeholder=\"zip\">";
					echo "<input type=\"text\" name=\"email\" placeholder=\"email\">";
					echo "</div>";
					echo "</form>";
					echo "</div>";
					echo "<form action=\"cartprocess.php\" method=\"POST\">";
					echo "<script
					    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
					    data-key=\"pk_test_Cb3o9aYMwhOPOtMOE1a7VYis\"
					    data-amount=\"".floatval($carttotal)."\"
					    data-name=\"Digital Dash\"
					    data-description=\"give us your money\"
					    data-image=\"img/ddlogo.svg\"
					    data-locale=\"auto\">
					  </script>";
					echo "<input type=\"hidden\" name=\"email\" value=\"".$_SESSION['email']."\" >";
					echo "<input type=\"hidden\" name=\"cartqty\" value=\"$cartqty\" >";
					echo "<input type=\"hidden\" name=\"carttotal\" value=\"$carttotal\" >";
					echo "<input type=\"hidden\" name=\"processcart\" value=\"3\">";
					echo "</form>";
					echo "</div>";
				} else {
					echo "<div class=\"pure-g\">";
					echo "<div class=\"pure-u-1 pure-u-md-1-2 pure-u-lg-1-2\">";
					echo "<h2>log in </h2>";
					echo "<form method=\"POST\" action=\"shoppingcart.php\">";
					echo "<input type=\"submit\" name=\"loginmain\" value=\"login\">";
					echo "</form>";
					echo "</div>";
					echo "<div class=\"pure-u-1 pure-u-md-1-2 pure-u-lg-1-2\">";
					echo "<h2>check out as guest</h2>";
					echo "<form action=\"cartprocess.php\" method=\"POST\">";
					echo "<input type=\"text\" name=\"firstname\" placeholder=\"first name\">";
					echo "<input type=\"text\" name=\"lastname\" placeholder=\"last name\">";
					echo "<input type=\"text\" name=\"address_1\" placeholder=\"address 1\">";
					echo "<input type=\"text\" name=\"address_2\" placeholder=\"address 2\">";
					echo "<input type=\"text\" name=\"city\" placeholder=\"city\">";
					echo "<input type=\"text\" name=\"state\" placeholder=\"state\">";
					echo "<input type=\"text\" name=\"zip\" placeholder=\"zip\">";
					echo "<input type=\"text\" name=\"email\" placeholder=\"email\">";
					echo "<script
					    src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
					    data-key=\"pk_test_Cb3o9aYMwhOPOtMOE1a7VYis\"
					    data-amount=\"".floatval($carttotal)."\"
					    data-name=\"Digital Dash\"
					    data-description=\"give us your money\"
					    data-image=\"img/ddlogo.svg\"
					    data-locale=\"auto\">
					  </script>";
					echo "<input type=\"hidden\" name=\"cartqty\" value=\"$cartqty\" >";
					echo "<input type=\"hidden\" name=\"carttotal\" value=\"$carttotal\" >";
					echo "<input type=\"hidden\" name=\"processcart\">";
					echo "</form>";
					echo "</div>";
					echo "</div>";
					}


				?>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php $conn->close(); ?>