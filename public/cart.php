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
    $item = $_POST['item'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    if(isset($_POST['item']) == 0)
    {
        $query="SELECT * FROM $tbl_name WHERE user_id='$id'";
        if ($result = mysqli_query($link, $query)) {
            /* fetch associative array */
            $positions = [];
            while ($row = mysqli_fetch_row($result)) {
                $positions[] = [
                    "id" => $row[0],
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
    mysqli_close($link);
     // render cart
    render("cart", ["positions" => $positions, "title" => "Cart"]);
    }
    else {
        $query="INSERT INTO $tbl_name (`user_id`, `item_id`, `name`, `price`, `quantity`) VALUES ('$id', '$item', '$name', '$price', '$quantity') ON DUPLICATE KEY UPDATE `quantity` = quantity + VALUES(quantity)";
        if ($result = mysqli_query($link, $query) === TRUE) {
            $query="SELECT * FROM $tbl_name WHERE user_id='$id'";
            if ($result = mysqli_query($link, $query)) {
                /* fetch associative array */
                $positions = [];
                while ($row = mysqli_fetch_row($result)) {
                    $positions[] = [
                        "id" => $row[0],
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
            print("Cannot add to cart.");
        }
        mysqli_close($link);
         //render cart
        render("cart", ["positions" => $positions, "title" => "Cart"]);
    }
?>