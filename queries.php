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
        <TITLE>Queries</TITLE>
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

        <?php
            require_once("oop.php");
            $db = new DB();
                $con = $db->connectionDb();
                $query=mysqli_query($con,"SELECT * FROM help");
                $nor=mysqli_num_rows($query);

                if($nor = "")
                {
                    echo "Database is empty";
                }

                else
                {

                    echo ("<div class = 'container custom-body custom-margin'>");
                    echo ("<center><h2>Hello! Here are the queries of your customers</h2></center>");
                    echo ("<table class = 'table table-bordered custom-margin'>");
                    echo ("<tr>
                        <th><b>Id</th></b>
                        <th><b>Name</th></b>
                        <th><b>Email</th></b>
                        <th><b>Contact</th></b>
                        <th><b>Question</th></b>
                        </tr>");

                    While($rec=mysqli_fetch_assoc($query))
                    {
                        echo "<tr>";
                        echo ("<td>".$rec['help_id']."</td>");
                        echo ("<td>".$rec['first_name']." ".$rec['last_name']."</td>");
                        echo ("<td>".$rec['email']."</td>");
                        echo ("<td>".$rec['contact_no']."</td>");
                        echo ("<td>".$rec['help_mess']."</td>");
                        echo "</tr>";
                        						
                    }

                    mysqli_close($con);

                    echo ("</table>");
                    echo ("</div>");
                }
        ?>

        <div class = 'container'>
            <div class = 'row justify-content-center custom-margin'>
                <center><a href = 'Logout.php'><button type='submit' class='btn btn-light' style = 'border-color:#000'>LOGOUT</button></a></center>
            </div>
        </div>
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

