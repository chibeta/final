<?php

    // configuration
    require("../includes/helpers.php"); 
    
    //http://www.phpeasystep.com/phptu/6.html
    $host="localhost"; // Host name 
    $myusername="chibeta"; // Mysql username 
    $mypassword="v1kCjsvLYytrBTGV"; // Mysql password 
    $db_name="final"; // Database name 
    $tbl_name="users"; // Table name 

    // Connect to server and select databse.
    $link= mysqli_connect("$host", "$myusername", "$mypassword", "$db_name"); 
    if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    echo 'Success... ' . mysqli_get_host_info($link) . "\n";



    //make sure the formis filled out   
    if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
    // username and password sent from form 
    $username=$_POST['username']; 
    $password=$_POST['password']; 

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($link, $username);
    $hash = mysqli_real_escape_string($link, $hash);
    $hash=md5($password);
    $query="SELECT * FROM $tbl_name WHERE username='$username' and hash='$hash'";
    if ($result = mysqli_query($link, $query)) {

        /* fetch associative array */
        while ($row = mysqli_fetch_row($result)) {
            $id= $row[0];
            $user= $row[1];
            $_SESSION["id"] = $id;
            $_SESSION["username"]= $user;
        }

    /* free result set */
    mysqli_free_result($result);
    redirect("/index.php");
    }
    else {
        // else apologize
        apologize("Invalid username and/or password.");
    }
    /* close connection */
    mysqli_close($link);
?>