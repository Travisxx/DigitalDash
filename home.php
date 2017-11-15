<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lte IE 8]>
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-min.css">
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-min.css">
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
	<!--<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://use.fontawesome.com/3e58986b99.js"></script>
	<script type="text/javascript" src="js/style.js"></script>
	<? include 'serverlogin.php';
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT * FROM products";
		$result = $conn->query($sql);
	?>
</head>
<body>
<?php include 'header.php'; ?>	
<div class="wrapper">
	<div class="pure-g" id="hero">
		<div id="herocontent">
<<<<<<< HEAD
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
				<div id="herotext">
					<h1>Accesorize!</h1>
					<p>Don't be this guy, step up your phone swagg today.</p>
				</div>	
			</div>
=======
			<div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
 				<div id="herotext">
 					<h1>FEATURED</h1>
 					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
 				</div>	
 			</div>
>>>>>>> e0eb24d8b426495febeeb23df75e4b8a13b05aef
		</div>
	</div>

	<div class="pure-g" id="emailsignup">
		<div class="signupbody">
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3" id="singuptext">
				<p>Register for our emails <i class="fa fa-paper-plane" aria-hidden="true"></i></p>
			</div>
			<div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3" id="signupform">
				<form >
					<input type="text" name="email" placeholder="john@johnson.com">
					<input type="submit" name="submit">
				</form>
			</div>
		</div>	
	</div>

	<div class="pure-g" id="main">
		<div class="body">

			<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2" id="apple">
				<div class="lbox">
					<div class="imagecontainer">
						<div class="featuredimage">
							<img src=<?
								  $x = 1;
								  $result = $conn->query($sql);
								  if ($result->num_rows > 0) {
								   while($row = $result->fetch_assoc()) {
								    if($x == 1){//set X equal to product number in database to show
								       echo "\"" .$row['Product_Image']. "\"";
								   }
								   $x = $x + 1;
								   }
								} else {
								  echo "0 results";
								}?>>
						</div>
						<div class="featuredcallout">
							<p>Featured</p>
						</div>
					</div>					
					<div class="maindescription">
						<div class="descparagraph">
							<p><?
								$x = 1;
 							   $result = $conn->query($sql);
 							   if ($result->num_rows > 0) {
 							    while($row = $result->fetch_assoc()) {
 							     if($x == 1){//set X equal to product number in database to show
 							        echo  $row['Description'];
 							        $x = $x + 1;
 							    }
 							    }
 							 } else {
 							   echo "0 results";
 							 }?>
							</p>
						</div>
						<div class="descbutton">
							<a href="#shop"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to Cart</a>
						</div>
					</div>
				</div>
			</div>

			<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2" id="samsung">
				<div class="lbox">
					<div class="imagecontainer">
						<div class="featuredimage">
							<img src=<?
									$x = 1;
								  $result2 = $conn->query($sql);
								  if ($result2->num_rows > 0) {
								   while($row = $result2->fetch_assoc()) {
								    if($x == 2){//set X equal to product number in database to show
								       echo "\"" .$row['Product_Image']. "\"";
								   }
								   $x = $x + 1;
								   }
								} else {
								  echo "0 results";
								}?>>
						</div>
						<div class="featuredcallout">
							<p>Featured</p>
						</div>
					</div>
					<div class="maindescription">
						<div class="descparagraph">
							<p><?
								$x = 1;
 							   $result = $conn->query($sql);
 							   if ($result->num_rows > 0) {
 							    while($row = $result->fetch_assoc()) {
 							     if($x == 2){//set X equal to product number in database to show
 							        echo  $row['Description'];
 							    }
 							    $x = $x + 1;
 							    }
 							 } else {
 							   echo "0 results";
 							 }?>
							</p>
						</div>
						<div class="descbutton">
							<a href="#shop"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div> <!-- wrapper -->

<div id="headphones">
	<div class="pure-g body">
		<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2" id="headphonesimage">
			<img src="img/headphones.png">
		</div>
		<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
			<div id="headphoneinner">
				<h2>HEAD SWAG</h2>
				<P>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</P>
			</div>
			<div id="headphonesbutton">
				<a href="">shop</a>
			</div>
		</div>
	</div>
</div><!-- headphones -->

<?php include 'footer.php'; ?>

</body>
</html>