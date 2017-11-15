<header>	
	<nav class="pure-g">
		<div class="body" id="webnav">
			<div class="pure-u-1 pure-u-md-2-5 pure-u-lg-2-5" id="logo">
				<a href="home.php"><img src="img/ddlogo.svg"></a>
			</div>
			<div class="pure-u-1 pure-u-md-3-5 pure-u-lg-3-5" id="usericons">
				<ul>
				 	<li><a href="cart.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></li>
				 	<?php  
				 	if (isset($_SESSION['logged_in'])) {
				 		echo "<li><a href=\"logout.php\">logout</a></li>";
				 	}

				 	?>
				 	<li><a href="admin.php"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></a></li>
				 	<li><i class="fa fa-search" aria-hidden="true" id="searchicon"></i></li>
				 	<li><a href="catalog.php?device=uni">Universal</a></li>
				 	<li><a href="catalog.php?device=apple">Apple</a></li>
				 	<li><a href="catalog.php?device=samsung">Samsung</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>