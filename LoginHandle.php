<?php
    session_start();
?>

<html>
    <head>
        <title>
            Login Handle
        </title>
    </head>
    <body>
        <?php
            if(isset($_POST["Submit"]))
            {
                $usern = $_POST['un'];
                $pass = $_POST['ps'];

                if ($usern == "" && $pass =="")
                {
                    echo "Invalid Entry";
                    return;
                }
                else if ($usern == "")
                {
                    echo "Invalid Username";
                    return;
                }
                else if ($pass =="")
                {
                    echo "Invalid Password";
                    return;
                }
                else
                {
                    $con = mysqli_connect("localhost","root","","thefashionsouq") or die('Server Error '.mysql_error());
                    $query=mysqli_query($con,"SELECT * FROM login WHERE username='$usern' && pass='$pass'");
                    $nor=mysqli_num_rows($query);

                    if($nor==0)
                    {
                        echo ("<script>alert('Invalid Login')</script>");
                    }
                    else
                    {
                        $rec=mysqli_fetch_assoc($query);
                        $_SESSION["username"]=$rec['username'];
                        $_SESSION["login_id"]=$rec['login_id'];
                                                    
                        if($rec["type"]=="admin")
                        {
                            header('Location: Admin.php');
                        }
                            
                        else
                        {
                            header('Location: supplier.php');
                        }
                                                                                                        
                        mysqli_close($con);
                                            
                    }
                }
            }
        ?>
    </body>
</html>