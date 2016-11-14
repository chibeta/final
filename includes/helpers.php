<?php
session_start();
    if (!in_array($_SERVER["PHP_SELF"], ["/index.php", "/login.php", "/login-form.php", "/logout.php", "/register-form.php", "/register.php", "/blogs.php", "/testamonies.php", "/links.php", "/store.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login-form.php");
        }
    }
//renders views
function render($template, $data = [])
{
    $path = "../views/" . $template . ".php";
    if (file_exists($path))
    {
        extract($data);
        require($path);
    }
}

function apologize($message)
    {
        render("apology.php", ["message" => $message]);
    }
    
function logout()
    {
        // unset any session variables
        $_SESSION = [];

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }
    
function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }
?>