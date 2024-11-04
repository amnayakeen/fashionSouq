<?php
	require_once("oop.php");
    $db = new DB();
    $meta = $db->meta();
    echo $meta;
?>
<html>
	<head>
		<title>Contact Us</title>
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
		<div class = "row">
			<div class = "col-md-5">
				<div class = "custom-body custom-margin">
					<!-- contact us info open -->
					<h2>CONTACT US</h2><br>
					<p>We are available from 10am to 10pm. You can contact us through whatsapp, facebook, instagram and through this site. You can also directly call us to:</p>
					<p>Contact Number : <a class = "active-link" href = "tel:0774027329">077 402 7329</a><br><br>
					<a class = "social-link" href = "https://l.facebook.com/l.php?u=https%3A%2F%2Fwa.me%2F94774027329%3Ffbclid%3DIwAR1_D3oviNiEbyRw0SieimlcWu_WNGwMfo7SnM5WjL1p4zLVsTQz_lBLECY&h=AT2NqJXKdclV3fNq4q6Qt_nwDuI4wYMilh2hjzhxtqGF9n8ID8hU9FJeSG9fVs5SA-382ETvy40Bfqk5Kwfmo2vfSj3iV3PE1IfCkOsxNbrL7IAHLdNBz4rxk0TWfKLtnAsH&__tn__=-UK-R&c[0]=AT2mbDP4uk-ibrLpj5Mqa4x-HB_H847Bm8HhAwOtoIR4E0i5wlsW9frecM050p2PzgaSKeWi1TMUviqsE3cKp4b33fIqgkN_A65dXEG-ZlzYA5iCDZPWP4gqtYM7JN8GdcczVVMvp99dsYP3r9MjidVJsFmbt_KPK0wcCNQ44q4KsOE">
						<img src = "Images/whatsapp1.png" class = "social" alt ="Whatsapp">&emsp;Whatsapp<br><br>
					</a>
					<a class = "social-link" href = "https://www.facebook.com/azra.tfs/?ref=page_internal">
						<img src = "Images/fb1.png" class = "social" alt ="Facebook">&emsp;Facebook<br><br>
					</a>
					<a class = "social-link" href = "https://www.instagram.com/the_fashionsouq/">
						<img src = "Images/insta1.png" class = "social" alt ="Instagram">&emsp;Instagram
					</a>
					<!-- contact us info close -->
				</div>
			</div>
			<div class = "col-md-1">
			</div>
			<div class = "col-md-6">
				<div class = "custom-body custom-margin" style = "line-height:35px">
					<!-- form open -->
					<form class='row g-3' method = 'POST' action = 'contact.php'>
                            <div class = 'row'>
                                <div class='col-md-6'>
                                    <label for='inputFname' class='form-label'>First Name</label>
                                    <input type='text' class='form-control' name='fname'>
                                </div>
                                <div class='col-md-6'>
                                    <label for='inputLname' class='form-label'>Last Name</label>
                                    <input type='text' class='form-control' name='lname'>
                                </div>
                            </div>
                            <div class = 'row'>
                                <div class='col-md-8'>
                                    <label for='inputEmail4' class='form-label'>Email</label>
                                    <input type='email' class='form-control' name='email'>
                                    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
                                </div>
                            </div>
                            <div class = 'row'>
                                <div class='col-md-7'>
                                    <label for='inputContact' class='form-label'>Contact Number</label>
                                    <input type='text' class='form-control' name='contact'>
                                </div>
                            </div>
                            <div class = 'row'>
                                <div class='col-md-12'>
                                    <label for='inputMessage' class='form-label'>Message</label>
                                    <textarea cols = '8' rows = '5' class='form-control' name='mess'></textarea>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <button type='reset' class='btn btn-light' style = 'border-color:#000'>Cancel</button>
                            </div>
                            <div class='col-md-6'>
                                <button type='submit' class='btn btn-dark' name='Submit'>Send</button>
                                <!-- when send button is clicked contact fuction will be called -->
                            </div>
                    </form>
					<?php
                        if(isset ($_POST["Submit"]))
                        {
                            $fn = $_POST["fname"];
                            $ln = $_POST["lname"];
                            $email = $_POST["email"];
                            $contact = $_POST["contact"];
                            $mess = $_POST["mess"];


                            if($fn == "" && $ln == "" && $email == "" && $contact == "" && $mess == "")
                            {
                                echo "<script>alert('Please enter all the details')</script>";
                                return;
                            }
                            else if($fn == "" && $ln == "")
                            {
                                echo "<script>alert('Please fill in your first and last name')</script>";
                                return;
                            }
                            else if($email == "" && $contact == "")
                            {
                                echo "<script>alert('Please enter email and contact number')</script>";
                                return;
                            }
                            else if($mess == "")
                            {
                                echo "<script>alert('Please enter your question')</script>";
                                return;
                            }

                            $con = $db->connectionDb();
                            $query=mysqli_query($con,"INSERT INTO contact(first_name, last_name, contact_no, email, message) VALUES('$fn','$ln','$contact','$email', '$mess')");

                            if($query>0)
                            {
                                echo "<script>alert('Thank you for contacting us ".$fn." ".$ln.". We will get back to you as soon as possible.')</script>";
                            }
                            else
                            {
                                echo "Error";
                            }
                        }
					?>
					<!-- form close -->
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
