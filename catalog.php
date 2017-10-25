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
					<div class="pure-u-1" id="filtertoggle">
						<h3>Filter</h3>
						<i class="fa fa-caret-square-o-down" aria-hidden="true" id="filtericon"></i>
					</div>
					<div class="pure-u-1 pure-u-md-1-4 pure-u-lg-1 filterstyle">
						<span>Brand</span>
						<ul>
							<li><input type="checkbox"><label>Apple</label></li>
							<li><input type="checkbox"><label>Samsung</label></li>
						</ul>
					</div>
					<div class="pure-u-1 pure-u-md-1-4 pure-u-lg-1 filterstyle">
						<span>Color</span>
						<ul>
							<li><input type="checkbox"><label>White</label></li>
							<li><input type="checkbox"><label>Red</label></li>
							<li><input type="checkbox"><label>Blue</label></li>
							<li><input type="checkbox"><label>Clear</label></li>
							<li><input type="checkbox"><label>Silver</label></li>
						</ul>
					</div>
					<div class="pure-u-1 pure-u-md-1-4 pure-u-lg-1 filterstyle">
						<span>Star Rating</span>
						<ul>
							<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><input type="checkbox"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
						</ul>
					</div>	
					<div class="pure-u-1 pure-u-md-1-4 pure-u-lg-1 filterstyle">
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

			<div class="pure-u-1 pure-u-md-1 pure-u-lg-3-4">
				<div class="pure-u-1">
					<div class="lbox">
						<div class="catalogbody">
							<div class="catalogimagecontainer">
								<div class="catalogimage">
									<img src="img/iphonecontent.png">
								</div>
								<div class="featuredcallout">
									<p>Featured</p>
								</div>
							</div>					
							<div class="catalogmaindescription">
								<div class="descparagraph">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
									</p>
								</div>
								<div class="catalogdescbutton">
									<a href="#shop"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div> <!-- wrapper -->

<?php include 'footer.php'; ?>

</body>
</html>