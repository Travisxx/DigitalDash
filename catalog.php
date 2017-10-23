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

<div id="wrapper">
	
	<nav class="pure-g">
		<div class="body" id="webnav">
			<div class="pure-u-1 pure-u-md-2-5 pure-u-lg-2-5" id="logo">
				<img src="img/ddlogo.svg">
			</div>
			<div class="pure-u-1 pure-u-md-3-5 pure-u-lg-3-5" id="usericons">
				<ul>
				 	<li><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></li>
				 	<li><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></li>
				 	<li><i class="fa fa-search" aria-hidden="true" id="searchicon"></i></li>
				 	<li><a href="#facebook">Apple</a></li>
				 	<li><a href="#news">Samsung</a></li>
				 	<li><a href="#contact">Headphones</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--
	<div class="pure-g" id="hero">
		<div id="herocontent">
			<div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
				<div id="herotext">
					<h1>FEATURED</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
				</div>	
				<div id="heroexplorebutton">
					<a href="#learnmore">explore</a>
				</div>
			</div>
		</div>
	</div>

	<div class="pure-g" id="emailsignup">
		<div class="signupbody">
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3" id="singuptext">
				<p>Register for our emails!</p>
			</div>
			<div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3" id="signupform">
				<form >
					<input type="text" name="email" placeholder="john@johnson.com">
					<input type="submit" name="submit">
				</form>
			</div>
		</div>	
	</div>
	-->

	<div class="pure-g" id="main">
		<div class="body">
			<div class="pure-u-1 pure-u-md-1 pure-u-lg-1-4">
				<div id="filterbody">
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
								<div class="descbutton">
									<a href="#shop">SEE MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="pure-u-1">
					<div class="lbox">
						<div class="catalogbody">
							<div class="catalogimagecontainer">
								<div class="catalogimage">
									<img src="img/samsungcontent.png">
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
								<div class="descbutton">
									<a href="#shop">SEE MORE</a>
								</div>
							</div>
						</div>	
					</div>	
				</div>

				<div class="pure-u-1">
					<div class="lbox">
						<div class="catalogbody">
							<div class="catalogimagecontainer">
								<div class="catalogimage">
									<img src="img/samsungcontent.png">
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
								<div class="descbutton">
									<a href="#shop">SEE MORE</a>
								</div>
							</div>
						</div>	
					</div>	
				</div>
				<div class="pure-u-1">
					<div class="lbox">
						<div class="catalogbody">
							<div class="catalogimagecontainer">
								<div class="catalogimage">
									<img src="img/samsungcontent.png">
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
								<div class="descbutton">
									<a href="#shop">SEE MORE</a>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>

</div> <!-- wrapper -->

<footer>
	<div class="row">
		<div class="pure-g body">
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
				<ul>
					<li>About us</li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
				<ul>
					<li>Policies</li>
					<li>Security</li>
				</ul>
			</div>
			<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
				<div id="social">
					<ul>
						<li><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></li>
						<li><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></li>
						<li><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>
</html>