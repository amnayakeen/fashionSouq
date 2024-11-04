<?php
    session_start();

    if(!isset($_SESSION["username"]))
    {
        header ("location:Login.php");
    }

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
        <TITLE>Admin Panel</TITLE>
    </head>
    <body>
        <!--nav open-->
        <nav class='navbar navbar-expand-lg navbar-dark bg-black sticky-top'>			
            <div class='container-fluid custom-body'>
                <img src='LOGO.png' alt='Logo' height='100'>
                <a class='navbar-brand justify-content-center' href='index.php'><h4>&nbsp;THE FASHION SOUQ</h4></a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse justify-content-center' id='navbarSupportedContent'>
                    <ul class='navbar-nav mb-2 mb-lg-0'>
                        <li class='nav-item justify-content-center'>
                            <a class = 'custom-a custom-item' aria-current='page' href='Admin.php'>SUPPLIERS</a>
                        </li>
                        <li class='nav-item'>
                            <a class='custom-a custom-item' href='queries.php'>QUERIES</a>
                        </li>
                        <li class='nav-item'>
                            <a class='custom-a custom-item' href='feedback.php'>FEEDBACK</a>
                        </li>
                        <li class='nav-item custom-item1 custom-right' style = 'margin-right:-180px;'>
                            <svg xmlns='http://www.w3.org/2000/svg' height='28' fill='white' class='bi bi-person' viewBox='0 0 14 14'>
                                <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z'/>
                            </svg>&emsp;ADMIN
                        </li>
                    </ul>
                </div>                    
            </div>
        </nav>
        <!--nav close-->

        <!--form open-->
        <div class = 'container custom-margin'>
                <center><h2>Welcome to The Fashion Souq System</h2></center><br>
                    <form class='row g-3' method = 'POST' action = 'Admin.php' enctype = 'multipart/form-data'>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputFname' class='form-label'>Supplier Id</label>
                                <input type='text' class='form-control' placeholder='Enter Supplier Id only to Search' name='id'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputLname' class='form-label'>Login Id</label>
                                <input type='text' class='form-control' placeholder='Enter Login Id only to Add, Search and Delete' name='lid'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputEmail4' class='form-label'>First Name</label>
                                <input type='text' class='form-control' placeholder='First name of supplier' name='fna'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Last Name</label>
                                <input type='text' class='form-control' placeholder='Last name of supplier' name='lna'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Age</label>
                                <input type='text' class='form-control' placeholder='Age of supplier' name='ag'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Email Address</label>
                                <input type='email' class='form-control' placeholder='Enter email address in correct format' name='em'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Contact Number</label>
                                <input type='text' class='form-control' placeholder='Contact number of supplier' name='cont'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Address</label>
                                <input type='text' class='form-control' placeholder='Address of supplier' name='add'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Username</label>
                                <input type='text' class='form-control' placeholder='Username given to login' name='un'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Password</label>
                                <input type='text' class='form-control' placeholder='Password given to login' name='pass'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-6'>
                                <label for='inputContact' class='form-label'>Profile Image</label>
                                <input type='file' class='form-control' name='file'>
                            </div>
                        </div>
                        <div class = 'row justify-content-center'>
                            <div class='col-md-12'>
                                <center><button type='reset' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;'>Clear</button>
                                <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='View'>View</button>
                                <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Search'>Search</button>
                                <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Delete'>Delete</button>
                                <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Submit'>Add</button></center>
                            </div>
                        </div>
                    </form>
                    <div class = 'row justify-content-center'>
                        <center><a href = 'Logout.php'><button type='submit' class='btn btn-light' style = 'border-color:#000'>LOGOUT</button></a></center>
                    </div>
            </div>
        <!--form close-->

        <?php
            function display()
            {
                require_once("oop.php");
                $db = new DB();
                $id = $_POST["id"];
                $lid = $_POST["lid"];

                if($id == "" && $lid =="")
                {
                    echo "<script>alert('Please enter Supplier Id and Login Id')</script>";
                }
                else if($id == "")
                {
                    echo "<script>alert('Please enter Supplier Id')</script>";
                }
                else if($lid =="")
                {
                    echo "<script>alert('Please enter Login Id')</script>";
                }

                else
                {
                    $con = $db->connectionDb();
                    $query=mysqli_query($con,"SELECT * FROM supplier where supp_id='".$id."' ");
                    $query2=mysqli_query($con,"SELECT * FROM login where login_id='".$lid."' ");
                    $nor=mysqli_num_rows($query);
                    
                    if($nor>0)
                    {
                        $row = mysqli_fetch_array($query);
                        $id = $row['supp_id'];
                        $lid = $row['login_id'];
                        $fna = $row['first_name'];
                        $lna = $row['last_name'];
                        $em = $row['email'];
                        $cont = $row['contact_no'];
                        $age = $row['age'];
                        $add = $row['address'];
                        $img = $row['image'];
                        $row = mysqli_fetch_array($query2);
                        $una = $row['username'];
                        $pass = $row['pass'];

                
                    echo ("<div class = 'container custom-item2'>
                        <hr>
                        <form class='row g-3 custom-margin' method = 'POST' action = 'Admin.php' enctype = 'multipart/form-data'>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputFname' class='form-label'>Supplier Id</label>
                                    <input type='text' class='form-control' name='id' value= $id>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputLname' class='form-label'>Login Id</label>
                                    <input type='text' class='form-control' name='lid' value= $lid>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputEmail4' class='form-label'>First Name</label>
                                    <input type='text' class='form-control' name='fna' value= $fna>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Last Name</label>
                                    <input type='text' class='form-control' name='lna' value= $lna>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Age</label>
                                    <input type='text' class='form-control' name='ag' value= $age>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Email Address</label>
                                    <input type='email' class='form-control' name='em' value= $em>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Contact Number</label>
                                    <input type='text' class='form-control' name='cont' value= $cont>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Address</label>
                                    <input type='text' class='form-control' name='add' value= $add>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Username</label>
                                    <input type='text' class='form-control' name='un'  value= $una>
                                </div>
                            </div>
                            <div class = 'row justify-content-center'>
                                <div class='col-md-6'>
                                    <label for='inputContact' class='form-label'>Password</label>
                                    <input type='text' class='form-control' name='pass' value= $pass>
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
                                    <center><button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='View'>View</button>
                                    <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Search'>Search</button>
                                    <button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Update'>Update</button>
                                    <a href = 'admin.php'><button type='submit' class='btn btn-dark' style = 'margin-top:20px;margin-bottom:20px;' name='Admin'>Back</button></a></center>
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
                $target="upload/";
                $target = $target . basename( $_FILES['file']['name']) ;  // file name comes for upload form


                $lid=$_POST["lid"];
                $fna=$_POST["fna"];
                $lna=$_POST["lna"];
                $em=$_POST["em"];
                $cont=$_POST["cont"];
                $age=$_POST["ag"];
                $add=$_POST["add"];
                $un=$_POST["un"];
                $pass=$_POST["pass"];
                $type1 = 'user';
                
                $fname=$_FILES['file']['name'];
                $tmpName= $_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileType=$_FILES['file']['type'];

                if($lid == "" && $fna == "" && $lna == "" && $em == "" && $cont == "" && $un =="" && $pass == "" &&$fname == "") 
                {
                    echo "<script>alert('Please enter all the required details')</script>";
                }
                else if($lid == "")
                {
                    echo "<script>alert('Please enter the login id')</script>";
                }
                else if($fna == "" && $lna)
                {
                    echo "<script>alert('Please enter the first and last name')</script>";
                }
                else if($em == "")
                {
                    echo "<script>alert('Please enter the email address')</script>";
                }
                else if($cont == "")
                {
                    echo "<script>alert('Please enter the contact number')</script>";
                }
                else if($un == "")
                {
                    echo "<script>alert('Please enter the username')</script>";
                }
                else if($pass == "")
                {
                    echo "<script>alert('Please enter the password')</script>";
                } 
                else if($fname == "")
                {
                    echo "<script>alert('Please choose an image')</script>";
                } 
                else
                {
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                    {
                        echo "<script>alert('The file ". basename( $_FILES['file']['name']). " has been uploaded')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Sorry, there was a problem uploading your file.')</script>";
                    }
    
    
                    $con = $db->connectionDb();
    
                    $query=mysqli_query($con,"INSERT INTO supplier(first_name, last_name, contact_no, email, address, age, image, login_id) VALUES('$fna','$lna','$cont','$em','$add','$age', '$fname', '$lid')");
                    $query=mysqli_query($con,"INSERT INTO login(login_id,username, pass, type) VALUES('$lid','$un','$pass', '$type1')");
    
    
                    if($query=1)
                    {
                        echo "<div class = 'container custom-body custom-margin'>
                        <div class = 'row'>
                        <div class = 'col-md-12'>
                        <center><h2>Successfully Added!</h2>";
                        echo "Login Id : $lid ";
                        echo "<br>First Name: $fna ";
                        echo "<br>Last Name: $lna ";
                        echo "<br>Image name: $fname ";
                        echo "<br>Email: $em ";
                        echo "<br>Contact: $cont ";
                        echo "<br>Age: $age ";
                        echo "<br>Address: $add ";
                        echo "<br>Username: $un ";
                        echo "</center></div></div></div>";
                    }
                    else
                    {
                        echo "<script>alert('Error')</script>";
                    }
                }
            } 
            
            if(isset ($_POST["Search"]))
            {
               echo display();
            }

            if(isset ($_POST["Update"]))
            {
                $target="upload/";
                $target = $target . basename( $_FILES['file']['name']) ;  // file name comes for upload form

                if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
                {
                    echo "<script>alert('The file ". basename( $_FILES['file']['name']). " has been uploaded')</script>";
                }
                else
                {
                    echo "Sorry, there was a problem uploading your file.";
                }

                $id = $_POST["id"];
                $lid = $_POST["lid"];
                $fna = $_POST["fna"];
                $lna = $_POST["lna"];
                $em=$_POST["em"];
                $tel=$_POST["cont"];
                $age=$_POST["ag"];
                $add=$_POST["add"];
                $un=$_POST["un"];
                $pass=$_POST["pass"];
                $type1 = 'user';

                $fname=$_FILES['file']['name'];
                $tmpName= $_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileType=$_FILES['file']['type'];

                if($id=="")
                {		
                        echo "<script>alert('Please fill in all the details')</script>";
                        return;
                }
                else if($lid== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($fna== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($lna== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($em== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($tel== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($age== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($add== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }else if($un== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($pass== "")
                {
                    echo "<script>alert('Please fill in all the details.')</script>";
                }
                else if($fname== "")
                {
                    echo "<script>alert('Please choose an Image.')</script>";
                }
                
                $con = $db->connectionDb();
                $query=mysqli_query($con,"UPDATE supplier SET first_name = '$fna' , last_name = '$lna' , email = '$em' , contact_no = '$tel' , age = '$age' , address = '$add' , image = '$fname' WHERE supp_id='$id'");
                $query=mysqli_query($con,"UPDATE login SET login_id = '$lid', username ='$un', pass = '$pass' WHERE login_id = '$lid'");


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
                $con = $db->connectionDb();
                $query=mysqli_query($con,"SELECT * FROM supplier");
                $nor=mysqli_num_rows($query);

                if($nor = "")
                {
                    echo "<script>alert('No supplier records')</script>";
                }

                else
                {

                    echo ("<div class = 'container'>");
                    echo ("<table class = 'table table-bordered '>");
                    echo ("<tr>
                        <th><b>Id</th></b>
                        <th><b>Name</th></b>
                        <th><b>Email</th></b>
                        <th><b>Telephone</th></b>
                        <th><b>Age</th></b>
                        <th><b>Address</th></b>
                        <th><b>Login Id</th></b>
                        <th><b>Image</th></b>
                        </tr>");

                    While($rec=mysqli_fetch_assoc($query))
                    {
                        echo "<tr>";
                        echo ("<td>".$rec['supp_id']."</td>");
                        echo ("<td>".$rec['first_name']." ".$rec['last_name']."</td>");
                        echo ("<td>".$rec['email']."</td>");
                        echo ("<td>".$rec['contact_no']."</td>");
                        echo ("<td>".$rec['age']."</td>");
                        echo ("<td>".$rec['address']."</td>");
                        echo ("<td>".$rec['login_id']."</td>");
                        echo ("<td style = 'text-align:center'><a href='upload/".$rec['image']."' target='blank'><img src='upload/".$rec['image']."' width='200'></a></td>");
                        echo "</tr>";
                        						
                    }

                    mysqli_close($con);

                    echo ("</table>");
                    echo ("</div>");
                }
            }
            
            if(isset($_POST["Delete"]))
            {
                $id = $_POST["id"];
                $lid = $_POST["lid"];

                if($lid == "")
                {
                    echo "<script>alert('Please enter the login Id')</script>";
                }

                else
                {
                    $con = $db->connectionDb();
                    $query=mysqli_query($con,"DELETE FROM supplier WHERE login_id = '$lid'");
                    $query=mysqli_query($con,"DELETE FROM login WHERE login_id = '$lid'");

                    if($query > 0)
                    {
                        echo "<script>alert('Successfully Deleted!')</script>";
                    }

                    else
                    {
                        echo "<script>alert('Error occured')</script>";
                    }
                }

            }
        ?>

        <!--footer open-->
        <footer class='py-4 footer-dark bg-black'>																				
            <div class = 'container-fluid'>
                <div class='d-flex justify-content-center custom-body custom-footer'>
                    <p>ADMIN PANEL</p>
                </div>
                <div class='d-flex justify-content-center custom-body custom-footer'>
                    <p>&copy; 2021 Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!--footer close-->
    </body> 
</html>

