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
			<div class="pure-u-1">

				<?php  

				
				if (isset($_GET['device'])) {
					$table = "SELECT * FROM products WHERE device='".$_GET['device']."' ";
				} else {
					$table = "SELECT * FROM products";
				}
				
				$tableresults = $conn->query($table);  

                while ($row = $tableresults->fetch_assoc() ) {


					/*--------------- item description --------------*/ 
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

					switch ($row['rating']) {
					    case "1":
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"." /5"."\n";
					        break;
					    case "2":
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"." / 5"."\n";
					        break;
					    case "3":
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"." /5"."\n";
					        break;
					    case "4":
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"." /5"."\n";
					        break;
					     case "5":
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        echo "<i class=\"fa fa-star\" aria-hidden=\"true\"></i>"."\n";
					        break;
					    default:
					        echo "<i class=\"fa fa-chevron-circle-down\" aria-hidden=\"true\"></i>"." Review this product";
					}
					echo "</span>"."\n";
					echo "<span class=\"productname\"><a href=\"addreview.php?item=".$row['Item_Number']."&sku=".$row['SKU']."\">Reviews</a></span>"."\n";
					echo "<span class=\"productname\">".$row['Product_Name']."</span>"."\n";
					echo "<span class=\"productprice\">"."$".$row['price']."</span>"."\n";
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
					echo "<input type=\"hidden\" name=\"price\" value=\"".$row['price']."\">"."\n";
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