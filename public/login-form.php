<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Log in"]); ?>
<div class="loginform">
<h3 class="center">You must login to view this content.</h3>
    <form action="login.php" method="post">
        <fieldset>
            <div class="form-group">
                <p>Username</p>
                <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
            </div>
            <div class="form-group">
                <p>Password</p>
                <input class="form-control" name="password" placeholder="Password" type="password"/>
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">Log In</button>
            </div>
        </fieldset>    
    </form>
</div>
<div>
    <p class="center">or <a href="register-form.php">register</a></p>
</div>

<?php render("footer"); ?>