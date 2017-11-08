<?php 
session_start(); 
include ('serverlogin.php');
if (!isset($_COOKIE['cart_id'])) {
	setcookie("cart_id", md5(session_id()), time() + (86400 * 30));
	setcookie("cart_key", 5*rand(), time() + (86400 * 30));
}
?>

<!DOCTYPE html>
<html>
<head>

<?php include 'meta-links.php'; ?>

</head>
<body>

<?php include 'header.php'; ?>

<div class="titleheader">
	<div class="body">
		<h1>phone swag.</h1>
	</div>
</div>
<div id="wrapper">
	<div class="pure-g" id="main">
		<div class="catalogbodycontainer">
			<div class="pure-u-1 pure-u-md-1 pure-u-lg-1-4">
				<div id="filterbody">
					<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1 filterstyle">
						<div class="lbox">
							<span>Color</span>
							<ul>
								<li><input type="checkbox"><label>White</label></li>
								<li><input type="checkbox"><label>Red</label></li>
								<li><input type="checkbox"><label>Blue</label></li>
								<li><input type="checkbox"><label>Clear</label></li>
								<li><input type="checkbox"><label>Silver</label></li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1 filterstyle">
						<div class="lbox">
							<span>Star Rating</span>
							<ul>
								<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
						</div>
					</div>	
					<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1 filterstyle">
						<div class="lbox">
							<span>Price</span>
							<ul>
								<li><input type="checkbox"><label>$10.00</label></li>
								<li><input type="checkbox"><label>$15.00</label></li>
								<li><input type="checkbox"><label>$20.00</label></li>
								<li><input type="checkbox"><label>$25.00</label></li>
								<li><input type="checkbox"><label>$30.00</label></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="pure-u-1 pure-u-md-1 pure-u-lg-3-4">

				<?php  
				$table = "SELECT * FROM products";

				$tableresults = $conn->query($table);   
            
                while ($row = $tableresults->fetch_assoc() ) {
                	echo "<div class=\"pure-u-1\" id=\""."item".$row['Item_Number']."\">"."\n";
					echo "<div class=\"lbox\">"."\n";
					echo "<div class=\"catalogbody\">";
					echo "<div class=\"catalogimagecontainer\">"."\n";
					echo "<div class=\"catalogimage\">"."\n";
					echo "<img src=\"".$row['Product_Image']."\">"."\n";
					echo "</div>"."\n";
					echo "</div>"."\n";					
					echo "<div class=\"catalogmaindescription\">"."\n";
					echo "<div class=\"catalogdescparagraph\">"."\n";
					echo "<span class=\"productrating\">"."\n";
					echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					echo "</span>"."\n";
					echo "<span class=\"productname\"><a href=\"addreview.php?item=".$row['Item_Number']."&sku=".$row['SKU']."\">Reviews</a></span>"."\n";
					echo "<span class=\"productname\">".$row['Product_Name']."</span>"."\n";
					echo "<span class=\"productprice\">"."$".floatval($row['Cost'])."</span>"."\n";
					echo "<span class=\"productcolor\">"."Color: ".$row['Color']."</span>"."\n";
					echo "<span class=\"productcategory\">"."Category: ".$row['Category']."</span>"."\n";
					echo "<span class=\"productsku\">"."SKU# ".$row['SKU']."</span>"."\n";
					echo "<p>".$row['Description']."</p>"."\n";
					echo "</div>"."\n";
					echo "<div class=\"catalogdescbutton\">"."\n";
					echo "<form action=\"shoppingcart.php\" method=\"post\">"."\n";
					echo "<label for=\"qty\">Qty: </label>";
					echo "<select name=\"qty\">"."\n";
					echo "<option value=\"1\">1</option>"."\n";
					echo "<option value=\"2\">2</option>"."\n";
					echo "<option value=\"3\">3</option>"."\n";
					echo "<option value=\"4\">4</option>"."\n";
					echo "</select>"."\n";
					echo "<input type=\"hidden\" name=\"sku\" value=\"".$row['SKU']."\">"."\n";
					echo "<input type=\"hidden\" name=\"id\" value=\"".$row['Item_Number']."\">"."\n";
					echo "<input type=\"hidden\" name=\"price\" value=\"".$row['Cost']."\">"."\n";
					echo "<input type=\"hidden\" name=\"color\" value=\"".$row['Color']."\">"."\n";
					echo "<input type=\"hidden\" name=\"product_name\" value=\"".$row['Product_Name']."\">"."\n";
					echo "<input type=\"hidden\" name=\"image\" value=\"".$row['Product_Image']."\">"."\n";
					echo "<input type=\"submit\" value=\"Add to Cart\" name=\"cartsubmit\">"."\n";
					echo "</form>"."\n";
					echo "</div>"."\n";
					echo "</div>"."\n";
					echo "</div>"."\n";
					echo "</div>"."\n";
					echo "</div>"."\n";
                }

                $conn->close();  
                ?>
                
			</div>
		</div>
	</div>
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>

</body>
</html>