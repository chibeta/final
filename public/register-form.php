<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Register"]); ?>
<div class="loginform">
<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <p>Email</p>
            <input autocomplete="off" autofocus class="form-control" name="email" placeholder="Email" type="text"/>
        </div>   
        <div class="form-group">
            <p>Username</p>
            <input class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <p>Password</p>
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
                <div class="form-group">
            <p>Password Confimation</p>
            <input class="form-control" name="confirmation" placeholder="Password Confirmation" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-warning" type="submit">
                Register
            </button>
        </div>
    </fieldset>
</form>
</div>
<div>
    <p class="center">or <a href="login-form.php">log in</a></p>
</div>

<?php render("footer"); ?>