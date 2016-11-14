<?php require_once("../includes/helpers.php");
    $host="localhost"; // Host name 
    $myusername="chibeta"; // Mysql username 
    $mypassword="v1kCjsvLYytrBTGV"; // Mysql password 
    $db_name="final"; // Database name 
    $tbl_name="items"; // Table name 

    // Connect to server and select databse.
    $link= mysqli_connect("$host", "$myusername", "$mypassword", "$db_name"); 
    if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    //query the database
    $query="SELECT * FROM $tbl_name WHERE 1";
    //make an array of items
    if ($result = mysqli_query($link, $query)) {
        $positions = [];
         while ($row = mysqli_fetch_row($result)) {
        
                $positions[] = [
                "id" => $row[0],
                "name" => $row[1],
                "price" => $row[2],
                "eBook" => $row[3]
            ];
        
         }
    /* free result set */
    mysqli_free_result($result);
    }
    else {
        // else apologize
        print("Cannot render store.");
    }
    /* close connection */
    mysqli_close($link);
    // render store
    render("store", ["positions" => $positions, "title" => "Store"]);
?>