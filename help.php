<?php
	require_once("oop.php");
    $db = new DB();
    $meta = $db->meta();
    echo $meta;
?>
<html>
	<head>
		<title>Help Us</title>
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
			<div class = "col-md-6">
				<div class = "custom-body custom-margin">
				<h2>FREQUENTLY ASKED QUESTIONS</h2><br>
				<!-- accordion open -->
				<div class="accordion" id="accordionPanelsStayOpenExample">
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingOne">
					  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						Where is The Fashion Souq located?
					  </button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					  <div class="accordion-body">
						<strong>The Fashion Souq is an online store.</strong>There is no physical location for The Fashion Souq where sales happen. The ordering of products, confirming orders, contacting the customer, and all other operations are executed through online mediums. The Fashion Souq can be accessed via Facebook, instagram and The Fashion Souq website.
					  </div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo">
					  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						How to order from The Fashion Souq?
					  </button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					  <div class="accordion-body">
						<strong>You can order from The Fashion Souq through online mediums.</strong>The products available at TFS can be accessed through The Fashion Souq's facebook account, instagram account and the website. Customers can also check the products through the TFS whatsapp group. If you want to order the products from the website, click on the order button underneath the product, this will redirect to the whatsapp account of TFS. Then customers can send the item and the size they want to order.
					  </div>
					</div>
				  </div>
				  <div class="accordion-item">
					<h2 class="accordion-header" id="headingThree">
					  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Where does The fashion Souq deliver?
					  </button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					  <div class="accordion-body">
						<strong>The Fashion Souq delivers in Sri Lanka.</strong>The products are imported from Dubai. Once they have been imported, the delivery staff of TFS deliver the products to the relevant customer. Delivery operations happen all over Sri Lanka.
					  </div>
					</div>
				  </div>
				</div>
				<!-- accordion close -->
			</div>
			</div>
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5">
				<div class = "custom-body custom-margin" style = "line-height:35px">
				<h2>ASK YOUR QUESTIONS</h2><br>
					<!-- form open -->
					<form class='row g-3' method = 'POST' action = 'help.php'>
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
                            <div class='col-md-9'>
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
                                <label for='inputMessage' class='form-label'>Question/Help</label>
                                <textarea cols = '8' rows = '5' class='form-control' name='help'></textarea>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <button type='reset' class='btn btn-light' style = 'border-color:#000'>Cancel</button>
                        </div>
                        <div class='col-md-6'>
                            <button type='submit' class='btn btn-dark' name='Submit'>Send</button>
                            <!-- when send button is clicked contact function will be called -->
                        </div>
                    </form>
					<?php
                        if(isset ($_POST["Submit"]))
                        {
                            $fn = $_POST["fname"];
                            $ln = $_POST["lname"];
                            $email = $_POST["email"];
                            $contact = $_POST["contact"];
                            $help = $_POST["help"];
            
            
                            if($fn == "" && $ln == "" && $email == "" && $contact == "" && $help == "")
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
                            else if($help == "")					
                            {
                                echo "<script>alert('Please enter your question')</script>";
                                return;
                            }
            
                            $con = $db->connectionDb();
                            $query=mysqli_query($con,"INSERT INTO help(first_name, last_name, contact_no, email, help_mess) VALUES('$fn','$ln','$contact','$email', '$help')");
                            
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
	