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

    // username and password sent from form 
    $username=$_POST['username']; 
    $password=$_POST['password']; 
    $email=$_POST['email'];

    // To protect MySQL injection (more detail about MySQL injection)
    $username = stripslashes($username);
    $password = stripslashes($password);
    $email = stripslashes($email);
    $username = mysqli_real_escape_string($link, $username);
    $hash = mysqli_real_escape_string($link, $hash);
    $email = mysqli_real_escape_string($link, $email);
    $hash=md5($password);
    $query="INSERT INTO `users`(`username`, `hash`, `email`) VALUES ('$username', '$hash', '$email')";
    if ($result = mysqli_query($link, $query)===true) {

        // fetch associative array //
        $query="SELECT * FROM $tbl_name WHERE username='$username' and hash='$hash'";
        $result = mysqli_query($link,"$query");
        while ($row = mysqli_fetch_row($result)) {
            $id= $row[0];
            $user= $username;
            $_SESSION["id"] = $id;
            $_SESSION["username"]= $user;
        }
        // free result set //
        mysqli_free_result($result);
        redirect("/index.php");
    }
    else
        apologize("Unable to register at this time.");
?>