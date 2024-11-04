<?php
	require_once("oop.php");
    $db = new DB();
    $meta = $db->meta();
    echo $meta;
?>
<html>
	<head>
		<title>Products</title>
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
	<!-- product category open -->
		<h2 class = "custom-text">PRODUCT CATEGORIES</h2>
		<div class = "row">
			<div class = "col-md-6">
				<div class="card custom-card custom-text">
					<a href = "abaya.php"><img src="Images/abaya.png" class="custom-img" alt="Unavailable"></a>
						<div class="card-body">
							<a class = "custom-product" href = "abaya.php"><h4 class="card-title">ABAYAS</h4></a>
						</div>
				</div>
			</div>
			<div class = "col-md-6">
				<div class="card custom-card custom-text">
					<a href = "shalwar.php"><img src="Images/shalwar.jpg" class="custom-img" alt="Unavailable"></a>
						<div class="card-body">
							<a class = "custom-product" href = "shalwar.php"><h4 class="card-title">SHALWARS</h4></a>
						</div>
				</div>
			</div>
		</div>
	<!-- product category close -->

	<!-- abayas open -->
	<a class = "custom-product" href = "abaya.php"><h2 class = "custom-text">ABAYAS</h2></a>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na6.jpg"><img src="Images/na6.jpg" class="custom-img" alt="CHIFFON EMBROIDED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">CHIFFON EMBROIDED ABAYA</h6>
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
							<h6 class="card-title">Rs.6,800.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na5.jpg"><img src="Images/na5.jpg" class="custom-img" alt="NIDHA PRINTED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">NIDHA PRINTED ABAYA</h6>
							<h6 class="card-title">Rs.7,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na1.jpg"><img src="Images/na1.jpg" class="custom-img" alt="NIDHA WORKED ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">NIDHA WORKED ABAYA</h6>
							<h6 class="card-title">Rs.7,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/na2.jpg"><img src="Images/na2.jpg" class="custom-img" alt="SILK OPEN ABAYA"></a>
						<div class="card-body">
							<h6 class="card-title">SILK OPEN ABAYA</h6>
							<h6 class="card-title">Rs.6,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
	<!-- abayas close -->


	<!-- shalwars open -->
	<a class = "custom-product" href = "shalwar.php"><h2 class = "custom-text">SHALWARS</h2></a>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s1.jpg"><img src="Images/s1.jpg" class="custom-img" alt="COTTON SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON SHALWAR</h6>
							<h6 class="card-title">Rs.2,500.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s5.jpg"><img src="Images/s5.jpg" class="custom-img" alt="COTTON SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON SHALWAR</h6>
							<h6 class="card-title">Rs.3,300.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s6.jpg"><img src="Images/s6.jpg" class="custom-img" alt="COTTON EMBROIDERY SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON EMBROIDERY SHALWAR</h6>
							<h6 class="card-title">Rs.4,200.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s4.jpg"><img src="Images/s4.jpg" class="custom-img" alt="COTTON PRINTED SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON PRINTED SHALWAR</h6>
							<h6 class="card-title">Rs.2,200.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s3.jpg"><img src="Images/s3.jpg" class="custom-img" alt="COTTON PRINTED SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">COTTON PRINTED SHALWAR</h6>
							<h6 class="card-title">Rs.2,700.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
			<div class = "col-md-4">
				<div class="card custom-card custom-text">
					<a href = "Images/s2.jpg"><img src="Images/s2.jpg" class="custom-img" alt="RAYON WORKED SHALWAR"></a>
						<div class="card-body">
							<h6 class="card-title">RAYON WORKED SHALWAR</h6>
							<h6 class="card-title">Rs.3.000.00</h6>
							<button class="btn btn-dark"><a class = "custom-a custom-button" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">ORDER NOW</a></button>
						</div>
				</div>
			</div>
		</div>
	<!-- shalwars close -->

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
