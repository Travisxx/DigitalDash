<?php  
session_start();
include ('serverlogin.php');
?> 

<!DOCTYPE html> 
<html> 
<head> 

<?php include 'meta-links.php'; ?>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head> 
<body> 
</body>
<?php include 'header.php'; ?>
<div class="row">
	<div class="body">
		<div class="pure-g">
		<?php 
		$table = "SELECT * FROM products WHERE Item_Number='".$_GET['item']."' ";
		$tableresults = $conn->query($table);   
		while ($row = $tableresults->fetch_assoc() ) {
		echo "<div class=\"pure-u-1 pure-u-md-3-5\" id=\""."item".$row['Item_Number']."\">"."\n";
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
						echo "<span class=\"productname\">".$row['Product_Name']."</span>"."\n";
						echo "<span class=\"productprice\">"."$".floatval($row['Cost'])."</span>"."\n";
						echo "<span class=\"productcolor\">"."Color: ".$row['Color']."</span>"."\n";
						echo "<span class=\"productcategory\">"."Category: ".$row['Category']."</span>"."\n";
						echo "<span class=\"productsku\">"."SKU# ".$row['SKU']."</span>"."\n";
						echo "<p>".$row['Description']."</p>"."\n";
						echo "</div>"."\n";
					echo "</div>"."\n";
				echo "</div>"."\n";
			echo "</div>"."\n";
		echo "</div>"."\n";
		}
		?>
			<div class="pure-u-1 pure-u-md-2-5">
				<div class="newreview">
					<?php if (isset($_SESSION['logged_in']) === TRUE) {
						
					echo "<h2>Submit New review</h2>";
					echo "<form method=\"POST\" action=\"\">";
					echo "<label>Star Rating</label>";
					echo "<select name=\"rating\">";
					echo "<option value=\"1\">1 Star</option>";
					echo "<option value=\"2\">2 Star</option>";
					echo "<option value=\"3\">3 Star</option>";
					echo "<option value=\"4\">4 Star</option>";
					echo "<option value=\"5\">5 Star</option>";
					echo "</select>";
					echo "<textarea type=\"textarea\" name=\"reviewtext\"></textarea>";
					echo "<input type=\"submit\" name=\"submitreview\">";
					echo "</form>";
					
						if (isset($_POST['submitreview'])) {
							$insertsql = "
		                    INSERT INTO reviews (review_date, sku, rating, review, user)
		                    VALUES (
		                    CURRENT_TIMESTAMP,
		                    '".$_GET['sku']."',
		                    '".$_POST['rating']."',
		                    '".$_POST['reviewtext']."',
		                    '".$_SESSION['username']."'
		                	)";

		                    $conn->query($insertsql);
		                    unset($_POST['submitreview']);
						}
					} else {
						echo "<div class=\"checkoutbuttons\">";
					    echo "<div class=\"pure-g\">";
					    echo "<div class=\"pure-u-1\">";
					    echo "<h2>log in</h2>";
					    echo "<form method=\"POST\" action=\"accounts.php\">";
					    echo "<input type=\"text\" name=\"username\" placeholder=\"username\">";
					    echo "<input type=\"password\" name=\"password\" placeholder=\"password\">";
					    echo "<input type=\"submit\" name=\"login\" value=\"log in\">";
					    echo "</form>";
					    echo "</div>";
					    echo "</div>";  
					    echo "</div>";      
					}

                    ?>


				</div>
			</div>

			<div class="pure-u-1">
				<div class="reviewbody">
					<h2>Reviews</h2>
					<div class="adminmargin">
						<div class="container">
		                    <table class="table table-striped">
		                        <thead>
		                            <tr>
		                            <th>Rating</th>
		                            <th>Description</th>
		                            <th>User</th>
		                            <th>Time</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        <?php  
		                        $table = "SELECT * FROM reviews WHERE SKU =".$_GET['sku']." ";

		                        $tableresults = $conn->query($table);   
		                        while ($row = $tableresults->fetch_assoc() ) {
		                            echo "<tr>";
		                            echo "<td>".$row['rating']."</td>";
		                            echo "<td>".$row['review']."</td>";
		                            echo "<td>".$row['user']."</td>";
		                            echo "<td>".$row['review_date']."</td>";
		                            echo "</tr>";
		                        }  
		                        ?>
		                        </tbody>
		                    </table> 
	                    </div>
	                </div>
                </div>
			</div>
	    </div>
	</div>
</div>

<?php include 'footer.php'; ?>
</html>
<?php $conn->close(); ?>