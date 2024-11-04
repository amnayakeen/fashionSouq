<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header ("location:Login.php");
    }

    ob_start();
    require_once("oop.php");
    $db = new DB();
?>
<!doctype html>
<html lang='en'>
    <head>
        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
        <meta name='description' content='Elastic Image Slideshow with Thumbnail Preview' />
        <meta name='keywords' content='jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic' />
        <meta name='author' content='Codrops' />
        <link rel='shortcut icon' href='../favicon.ico'> 
        <link rel='stylesheet' type='text/css' href='css/demo.css' />
        <link rel='stylesheet' type='text/css' href='css/style.css' />
        <noscript>
            <link rel='stylesheet' type='text/css' href='css/noscript.css' />
        </noscript>


        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU' crossorigin='anonymous'>
            

        <link rel = 'stylesheet' href = 'css/tfsstyle.css'>
        <TITLE>Supplier Panel</TITLE>
    </head>
    <body>
        <!--nav open-->
        <?php
            $una = $_SESSION["username"];
            $login = $_SESSION["login_id"];

            $con = $db->connectionDb();
            $query=mysqli_query($con,"SELECT * FROM supplier WHERE login_id='$login'");
            $nor=mysqli_num_rows($query);

            $rec=mysqli_fetch_assoc($query);
            $_SESSION["first_name"] = $rec['first_name'];
            $_SESSION["last_name"] = $rec['last_name'];

            $fna = $_SESSION["first_name"];
            $lna = $_SESSION["last_name"];

            echo ("<nav class='navbar navbar-expand-lg navbar-dark bg-black sticky-top'>																			
                <div class='container-fluid custom-body'>
                    <img src='LOGO.png' alt='Logo' height='100'>
                    <a class='navbar-brand' href='index.php'><h4>&nbsp;THE FASHION SOUQ</h4></a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav navbar-brand mb-2 mb-lg-0'>
                            <li class='nav-item' style = 'margin-left:680px'>
                                <svg xmlns='http://www.w3.org/2000/svg' height='28' fill='white' class='bi bi-person' viewBox='0 0 14 14'>
                                    <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
                                </svg>&emsp;".$fna." ".$lna."
                            </li>
                        </ul>
                    </div>                    
                </div>
            </nav>");
        ?>
        
        <?php
            $con = $db->connectionDb();
            $query=mysqli_query($con,"SELECT * FROM supplier WHERE login_id='$login'");
            $nor=mysqli_num_rows($query);


            if($nor=="")
            {
                echo ("<script>alert('Invalid Entry')</script>");
            }
            else
            {
                if($nor >= 1)
                {
                    $rec=mysqli_fetch_assoc($query);
                    echo ("<div class = 'container custom-body custom-margin custom-item2'>
                    <center><h2>Welcome to The Fashion Souq System</h2></center><br>
                    <div class = 'row'>
                    <div class = 'col-md-6'>");
                    echo ("<a href='upload/".$rec['image']."' target='blank'><img src='upload/".$rec['image']."' width='200'></a><br><br>");
                    echo "<b>Id</b>&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; : ". ($rec['supp_id']) ."<br>";
                    echo "<b>Name</b>&emsp;&emsp; : ". ($rec['first_name'])." ".$rec['last_name']."<br>";
                    echo "<b>Email</b>&emsp;&emsp;&nbsp; : ". ($rec['email']) ."<br>";
                    echo "<b>Telephone</b> : ". ($rec['contact_no']) ."<br>";
                    echo "<b>Age</b>&emsp;&emsp;&emsp; : ". ($rec['age']) ."<br>";
                    echo "<b>Address</b>&emsp; : ". ($rec['address']) ."<br>";
                    echo ("<div class = 'row'>
                    <div class = 'col-md-6'>
                    <a href = 'Logout.php'><button type='submit' class='btn btn-light custom-item2' style = 'border-color:#000' name = 'logout' >LOGOUT</button></a>
                    </div></div></div>");
                    mysqli_close($con); 
                }
            }
        ?>

                <div class = 'col-md-6'>
                    <form class='custom-body' method = 'POST' action = 'supplier.php' enctype = 'multipart/form-data'>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputFname' class='form-label'>Product Id</label>
                                <input type='text' class='form-control' placeholder='Enter Product Id only to Search or Delete' name='pid'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputLname' class='form-label'>Product Name</label>
                                <input type='text' class='form-control' placeholder='Name of the product' name='pna'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputEmail4' class='form-label'>Category</label>
                                <input type='text' class='form-control' placeholder='Abaya or Shalwar' name='cat'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Quantity</label>
                                <input type='text' class='form-control' placeholder='Quantity delivered each time' name='quant'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Cost</label>
                                <input type='text' class='form-control' placeholder='Cost of the product' name='cost'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Selling Price</label>
                                <input type='text' class='form-control' placeholder='Selling price of the product' name='sprice'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Available Sizes</label>
                                <input type='text' class='form-control' placeholder='Sizes available/Material' name='size'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Status</label>
                                <input type='text' class='form-control' placeholder='Available or Restock' name='status'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <label for='inputContact' class='form-label'>Profile Image</label>
                                <input type='file' class='form-control' name='file'>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class='col-md-9'>
                                <center><button type='reset' class='btn btn-dark custom-item2'>Clear</button>
                                <button type='submit' class='btn btn-dark custom-item2' name='View'>View</button>
                                <button type='submit' class='btn btn-dark custom-item2' name='Search'>Search</button>
                                <button type='submit' class='btn btn-dark custom-item2' name='Delete'>Delete</button>
                                <button type='submit' class='btn btn-dark custom-item2' name='Submit'>Add</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            

        <!--form open-->
        <!--form close-->

        <?php
            function display()
            {
                require_once("oop.php");
                $db = new DB();
                $sess = $db->session();
                echo $sess;
                $sid = $_SESSION["supp_id"];
                $pid1 = $_POST["pid"];
                $con = $db->connectionDb();
                $query=mysqli_query($con,"SELECT * FROM products where product_id = '$pid1'");
                $nor=mysqli_num_rows($query);


                if($pid1 == "")
                {
                    echo "<script>alert('Please enter the product Id to search the product')</script>";
                }
                else
                {
                    $rec=mysqli_fetch_assoc($query);
                    $_SESSION["product_id"] = $rec['product_id'];
                    $pid = $_SESSION["product_id"];
                    $con = $db->connectionDb();
                    $query=mysqli_query($con,"SELECT * FROM products where product_id='$pid' and supp_id = '$sid'");
                    $nor=mysqli_num_rows($query);

                    if($nor>0)
                    {
                        echo ("<form method='post' action='supplier.php'  enctype = 'multipart/form-data'>");

                        $row = mysqli_fetch_array($query);
                        $id = $row['supp_id'];
                        $pid = $row['product_id'];
                        $pna = $row['name'];
                        $cat = $row['category'];
                        $quantity = $row['quantity'];
                        $cost = $row['cost'];
                        $price = $row['selling_price'];
                        $size = $row['size'];
                        $status = $row['status'];
                        $img = $row['image'];

                        echo ("<hr><br>
                        <form method = 'POST' action ='supplier.php' enctype = 'multipart/form-data'>

                        <div class = 'container custom-item2'>
                        <form class='row g-3 custom-margin' method = 'POST' action = 'Admin.php' enctype = 'multipart/form-data'>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputFname' class='form-label'>Product Id</label>
                                    <input type='text' class='form-control' name='pid' value= $pid>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputLname' class='form-label'>Product Name</label>
                                    <input type='text' class='form-control' name='pna' value= $pna>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputEmail4' class='form-label'>Category</label>
                                    <input type='text' class='form-control' name='cat' value= $cat>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Quantity</label>
                                    <input type='text' class='form-control' name='quant' value= $quantity>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Cost</label>
                                    <input type='text' class='form-control' name='cost' value= $cost>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Selling Price</label>
                                    <input type='text' class='form-control' name='sprice' value= $price>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Available Sizes</label>
                                    <input type='text' class='form-control' name='size' value= $size>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Status</label>
                                    <input type='text' class='form-control' name='status' value= $status>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Profile Image</label>
                                    <input type='file' class='form-control' name='file' value= $img>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <center><button type='reset' class='btn btn-dark custom-item2'>Clear</button>
                                    <button type='submit' class='btn btn-dark custom-item2' name='View'>View</button>
                                    <button type='submit' class='btn btn-dark custom-item2' name='Search'>Search</button>
                                    <button type='submit' class='btn btn-dark custom-item2' name='Update'>Update</button>
                                    <a href = 'supplier.php'><button type='submit' class='btn btn-dark custom-item2' name='Supplier'>Back</button></a></center>
                                </div>
                            </div>
                        </form>
                    </div>");
                    }

                    else
                    {
                        echo "<script>alert('Invalid Entry')</script>";
                    }
                }
            }

            if(isset ($_POST["Submit"]))
            {
                $target="TFS/";
                $target = $target . basename( $_FILES['file']['name']) ;  // file name comes for upload form

                if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                {
                    echo "<script>alert('The file ". basename( $_FILES['file']['name']). " has been uploaded')</script>";
                }
                else 
                {
                    echo "<script>alert('Error')</script>";
                }

                require_once("oop.php");
                $db = new DB();
                $sess = $db->session();
                $sid = $_SESSION["supp_id"];
                $pid=$_POST["pid"];
                $pna=$_POST["pna"];
                $cat=$_POST["cat"];
                $quant=$_POST["quant"];
                $cost=$_POST["cost"];
                $price=$_POST["sprice"];
                $size=$_POST["size"];
                $status=$_POST["status"];
                
                $fname=$_FILES['file']['name'];
                $tmpName= $_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileType=$_FILES['file']['type'];

                if($pna == "" && $price =="" && $cat =="" && $quant =="" && $cost =="" && $size =="" && $status =="" && $fname =="") 
                {
                    echo "<script>alert('Please enter all the details')</script>";
                    return; 
                }
                else if($pna == "")
                {
                    echo "<script>alert('Please Enter the product name')</script>";
                    return;
                }
                else if($cat == "")
                {
                    echo "<script>alert('Please enter the product category as Abaya or Shalwar')</script>";
                    return;
                }
                else if($quant == "")
                {
                    echo "<script>alert('Please enter the quantity of the product')</script>";
                    return;
                }
                else if($cost == "")
                {
                    echo "<script>alert('Please enter the cost of the product')</script>";
                    return;
                }
                else if($price == "")
                {
                    echo "<script>alert('Please enter the selling price of the product')</script>";
                    return;
                } 
                else if($size == "")
                {
                    echo "<script>alert('Please enter the available sizes of the product')</script>";
                    return;
                } 
                else if($status == "")
                {
                    echo "<script>alert('Please enter the status of the product as Available/Need to be restocked/Unavailable')</script>";
                    return;
                }
                else if($fname == "")
                {
                    echo "<script>alert('Please upload product image')</script>";
                    return;
                }

                $con = $db->connectionDb();
                $query=mysqli_query($con,"INSERT INTO products(name, category, quantity, cost, selling_price, size, status, image, supp_id) VALUES('$pna', '$cat', '$quant', '$cost', '$price', '$size', '$status', '$fname', '$sid')");

                if($query>0)
                {
                    
                    echo "<div class = 'container custom-margin'>
                    <div class = 'row'>
                    <div class = 'col-md-12'><center><h2>Successfully Added!</h2>";
                    echo "Product Name: $pna <br>";
                    echo "Product Category: $cat <br>";
                    echo "Quantity: $quant <br>";
                    echo "Cost: $cost <br>";
                    echo "Selling Price: $price <br>";
                    echo "Size: $size <br>";
                    echo "Status: $status <br>";
                    echo "Image name: $fname <br>";
                    echo "Supplier Id: $sid <br></center></div></div></div>"; 
                }
                else
                {
                    echo "<script>alert('Error')</script>";
                }
            }
             
            
            if(isset ($_POST["Search"]))
            {
                echo display();
            }

            if(isset ($_POST["Update"]))
            {
                $target="TFS/";
                $target = $target . basename( $_FILES['file']['name']) ;  // file name comes for upload form

                if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                {
                    echo "<script>alert('The file ". basename( $_FILES['file']['name']). " has been uploaded')</script>";
                }
                
                require_once("oop.php");
                $db = new DB();
                $sess = $db->session();
                echo $sess;
                $sid = $_SESSION["supp_id"];
                $pid = $_POST["pid"];
                $pna=$_POST["pna"];
                $cat=$_POST["cat"];
                $quant=$_POST["quant"];
                $cost=$_POST["cost"];
                $price=$_POST["sprice"];
                $size=$_POST["size"];
                $status=$_POST["status"];
                    
                $fname=$_FILES['file']['name'];
                $tmpName= $_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileType=$_FILES['file']['type'];

                if($pid == "" && $pna == "" && $cat == "" && $quant == "" && $cost == "" && $price == "" && $size == "" && $status == "" && $fname == "")
                {
                    echo "<script>alert('Please fill in all the required details. NOTE - Do not change the given product Id')</script>";
                }
                else if($pid == "")
                {
                    echo "<script>alert('Please do not change the product Id already given')</script>";
                }
                else if($pna == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($cat == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($quant == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($cost == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($price == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($size == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($status == "")
                {
                    echo "<script>alert('Please fill in all the required details.<br>NOTE - Please don't change the product id')</script>";
                }
                else if($fname == "")
                {
                    echo "<script>alert('Please choose an Image')</script>";
                }
                    $con = $db->connectionDb();
                    $query=mysqli_query($con,"UPDATE products SET name = '$pna', category = '$cat', quantity = '$quant', cost = '$cost', selling_price = '$price', size = '$size', status = '$status', image = '$fname'  WHERE product_id='$pid' AND supp_id='$sid'");

                    if($query>0)
                    {
                        echo display(); 
                    }
                    else
                    {
                        echo "<script>alert('Error')</script>";
                    }
            }

            if(isset($_POST["View"]))
            {
                $sess = $db->session();
                $sid = $_SESSION["supp_id"];

                $con = $db->connectionDb();
                $query=mysqli_query($con,"SELECT * FROM products WHERE supp_id='$sid'");
                $nor=mysqli_num_rows($query);

                if($nor = 0)
                {
                    echo "<script>alert('No products found')</script>";
                }

                else
                {
                    echo ("<div class = 'container'>");
                    echo ("<table class = 'table table-bordered '>");
                    echo ("<tr>
                        <th><b>Product Id</th></b>
                        <th><b>Product Name</th></b>
                        <th><b>Category</th></b>
                        <th><b>Quantity</th></b>
                        <th><b>Cost</th></b>
                        <th><b>Price</th></b>
                        <th><b>Size</th></b>
                        <th><b>Status</th></b>
                        <th><b>Supplier Id</th></b>
                        <th><b>Image</th></b>
                        </tr>");

                    While($rec=mysqli_fetch_assoc($query))
                    {
                        echo "<tr>";
                        echo ("<td>".$rec['product_id']."</td>");
                        echo ("<td>".$rec['name']."</td>");
                        echo ("<td>".$rec['category']."</td>");
                        echo ("<td>".$rec['quantity']."</td>");
                        echo ("<td>".$rec['cost']."</td>");
                        echo ("<td>".$rec['selling_price']."</td>");
                        echo ("<td>".$rec['size']."</td>");
                        echo ("<td>".$rec['status']."</td>");
                        echo ("<td>".$rec['supp_id']."</td>");
                        echo ("<td style = 'text-align:center'><a href='TFS/".$rec['image']."' target='blank'><img src='TFS/".$rec['image']."' width='200'></a></td>");
                        echo "</tr>";
                        						
                    }

                    echo ("</table></div>");

                    mysqli_close($con);
                }
            }
            
            if(isset($_POST["Delete"]))
            {
                require_once("oop.php");
                $db = new DB();
                $sess = $db->session();
                echo $sess;
                $sid = $_SESSION["supp_id"];
                $pid = $_POST["pid"];

                $con = $db->connectionDb();
                $query=mysqli_query($con,"DELETE FROM products WHERE product_id = '$pid' AND supp_id = '$sid'");

                if($query<1)
                {
                    echo "<script>alert('Invalid Product Id')</script>";
                }

                else
                {
                    echo "<script>alert('Successfully Deleted!')</script>";
                }
            }

            ob_flush();
        ?>

        <!--footer open-->
        <footer class='py-4 footer-dark bg-black'>																				
            <div class = 'container-fluid'>
                <div class='d-flex justify-content-center custom-body custom-footer'>
                    <p>SUPPLIER PANEL</p>
                </div>
                <div class='d-flex justify-content-center custom-body custom-footer'>
                    <p>&copy; 2021 Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--footer close-->
    </body> 
</html>

