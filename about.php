<?php
	require_once("oop.php");
    $db = new DB();
    $meta = $db->meta();
    echo $meta;
?>
<html>
	<head>
		<title>About Us</title>
  	</head>
  <body>
	<!-- navbar open-->
	<?php
		require_once("oop.php");
		$db = new DB();
		$nav = $db->navbar();
		echo $nav;
	?>
	<!-- navbar close -->


	<div class = "container">
		<div class = "custom-body custom-margin" style = "line-height:35px;">
			<div class = "row">
				<div class = "col-md-6">
					<!-- about us info open -->
					<h2>ABOUT THE FASHION SOUQ</h2>
					<p>The journey of The Fashion Souq intiated in the year 2015. At the beginning of this journey, the only product TFS was considering was abayas. It started off with a simple goal of providing the people of Sri Lanka good quality and fashionable abayas. To accomplish this, abayas were imported from Dubai. Over these 6 years, The Fashion Souq has grown so much, that not only it has a higher customer base, but the variety of the products available have also increased. With the main product, abaya, remaining the same, other products, such as, <a class = "social-link" href = "shalwars.html">Shalwars</a>, Farashas, Jalabiyas and Kaftan are also imported depending on the seasonal sales.</p>
					<img src = "Images/Tfs2.png" alt = "The Fashion Souq">
				</div>
				<!-- aboutus info close -->
				<div class = "col-md-6">
				<!-- carousel open -->
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="Images/a34.jpg" class="d-block w-100 h-100" alt="Unavailable">
						</div>
						<div class="carousel-item">
							<img src="Images/s19.jpg" class="d-block w-100 h-100" alt="Unavailable">
						</div>
						<div class="carousel-item">
							<img src="Images/s22.jpg" class="d-block w-100 h-100" alt="Unavailable">
						</div>
					</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
				</div>
				<!-- carousel close -->
				</div>
			</div>
		</div>
	</div>

	<!-- footer open-->
	<?php
		require_once("oop.php");
		$db = new DB();
		$footer = $db->footer();
		echo $footer;
	?>
	<!-- footer close-->

	<!-- Optional JavaScript; choose one of the two! -->

    	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    	<!-- Option 2: Separate Popper and Bootstrap JS -->
    	<!--
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
