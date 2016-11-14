<?php require_once("../includes/helpers.php");
$host="localhost"; // Host name 
    $myusername="chibeta"; // Mysql username 
    $mypassword="v1kCjsvLYytrBTGV"; // Mysql password 
    $db_name="final"; // Database name 
    $tbl_name="cart"; // Table name 

    // Connect to server and select databse.
    $link= mysqli_connect("$host", "$myusername", "$mypassword", "$db_name"); 
    if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    // Set variables and query the db
    $id = $_SESSION["id"];
    $item = $_POST["item"];
    $query="DELETE FROM $tbl_name WHERE user_id=$id";
        if (mysqli_query($link, $query)) {
            $query="SELECT * FROM $tbl_name WHERE user_id='$id'";
            if ($result = mysqli_query($link, $query)) {
                /* fetch associative array */
                $positions = [];
                while ($row = mysqli_fetch_row($result)) {
                    $positions[] = [
                        "item" => $row[0],
                        "user_id" => $row[1],
                        "item_id" => $row[2],
                        "name" => $row[3],
                        "price" => $row[4],
                        "quantity" => $row[5],
                    ];
                }
            }
        /* free result set */
        mysqli_free_result($result);
        }
        else {
            // else apologize
            print("Cannot delete item from cart.");
        }
        mysqli_close($link);
         //render cart
        render("cart", ["positions" => $positions, "title" => "Cart"]);

?>