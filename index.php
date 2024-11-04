<?php
	require_once("oop.php");
    $db = new DB();
    $meta = $db->meta();
    echo $meta;
?>
<html>
	<head>
		<title>THE FASHION SOUQ</title>
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

	<!-- carousel open-->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="Images/Slider1.jpg" class="d-block w-100 h-100" alt="Unavailable">
				<div class="ei-title  custom-slider-txt">
					<h2>The</h2>
					<h2>Fashion Souq</h2>
				</div>
			</div>
			<div class="carousel-item">
				<img src="Images/Slider2.webp" class="d-block w-100 h-100" alt="Unavailable">
				<div class="ei-title custom-slider-txt">
                    <h3>Elegant</h3>
					<h2>Fashion</h2>
                </div>
			</div>
			<div class="carousel-item">
				<img src="Images/Slider3.png" class="d-block w-100 h-100" alt="Unavailable">
				<div class="ei-title custom-slider-txt">
                    <h2>Comfortable</h2>
                    <h3>Style</h3>
                </div>
			</div>
			<div class="carousel-item">
				<img src="Images/Slider4.jpg" class="d-block w-100 h-100" alt="Unavailable">
				<div class="ei-title custom-slider-txt">
                    <h2>Simply</h2>
                    <h3>Beautiful</h3>
                </div>
			</div>
			<div class="carousel-item">
				<img src="Images/Slider5.jpg" class="d-block w-100 h-100" alt="Unavailable">
				<div class="ei-title custom-slider-txt">
                    <h2>Modestly</h2>
                    <h3>Fashionable</h3>
                </div>
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
	<!-- carousel close-->


	<div class = "container">
		<!-- product categories open -->
		<h2 class = "custom-text">PRODUCT CATEGORIES</h2>
		<div class = "row">
			<div class = "col-md-6">
				<div class="card custom-card custom-text">
					<a href = "abaya.html"><img src="Images/abaya.png" class="custom-img" alt="ABAYAS"></a>
						<div class="card-body">
							<a class = "custom-product" href = "abaya.html"><h4 class="card-title">ABAYAS</h4></a>
						</div>
				</div>
			</div>
			<div class = "col-md-6">
				<div class="card custom-card custom-text">
					<a href = "shalwar.html"><img src="Images/shalwar.jpg" class="custom-img" alt="SHALWARS"></a>
						<div class="card-body">
							<a class = "custom-product" href = "shalwar.html"><h4 class="card-title">SHALWARS</h4></a>
						</div>
				</div>
			</div>
		</div>
		<!-- product categories close -->

		<!-- new arrivals open-->
		<h2 class = "custom-text">NEW ARRIVALS</h2>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na6.jpg"><img src="Images/na6.jpg" class="custom-img" alt="CHIFFON EMBROIDED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">CHIFFON EMBROIDED ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.7,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na3.jpg"><img src="Images/na3.jpg" class="custom-img" alt="CHIFFON OPEN ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">CHIFFON OPEN ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.6,300.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na4.jpg"><img src="Images/na4.jpg" class="custom-img" alt="CHIFFON PRINTED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">CHIFFON PRINTED ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.6,800.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s6.jpg"><img src="Images/s6.jpg" class="custom-img" alt="COTTON EMBROIDERY SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON EMBROIDERY SHALWAR</h6>
							<p class="card-text">Material available</p>
							<h6 class="card-title">Rs.4,200.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s3.jpg"><img src="Images/s3.jpg" class="custom-img" alt="COTTON PRINTED SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON PRINTED SHALWAR</h6>
							<p class="card-text">Material available</p>
							<h6 class="card-title">Rs.2,700.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na5.jpg"><img src="Images/na5.jpg" class="custom-img" alt="NIDHA PRINTED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">NIDHA PRINTED ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.7,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na1.jpg"><img src="Images/na1.jpg" class="custom-img" alt="NIDHA WORKED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">NIDHA WORKED ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.7,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s2.jpg"><img src="Images/s2.jpg" class="custom-img" alt="RAYON WORKED SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">RAYON WORKED SHALWAR</h6>
							<p class="card-text">Material available</p>
							<h6 class="card-title">Rs.3.000.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na2.jpg"><img src="Images/na2.jpg" class="custom-img" alt="SILK OPEN ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">SILK OPEN ABAYA</h6>
							<p class="card-text">Available sizes : 52 - 60</p>
							<h6 class="card-title">Rs.6,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
		<!-- new arrivals close -->
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
