<?php
$is_invalid = false;


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost:8888/Bloood%20Link%202/public/css/login.css">
</head>

<body>
   

    <div class="main">

        <div class="logo"><img class="logo-1" src="http://localhost:8888/Bloood%20Link%202/public/images/Logo.png" alt=""></div>

        <div class="rectangle">
            <div class="Dont-have-an-account">Don't have an account ? <a href="../SignUp/signup.html" class="">Sign Up!</a> </div>
            <div class="item-2">
                <div class="welcome-back">Welcome Back</div>
                <div class="login-to-your-account">Login into your account</div>
            </div>
            <div class="login-form">
            <?php
    if($is_invalid):?>
    <em>Invalid Login</em>    
    <?php endif ?>
                <form class="login" action="" method="post">
                    <div><input class="input" name="email" type="text" placeholder="  Username / Email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"></div>
                    <div><input class="input" name="password" type="password" placeholder="   Password" id="password" ></div>
                    <div class="forget-password"><a href="">Reset Password</a> </div>
                    <div><button class="login-button">Log In</button></div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>