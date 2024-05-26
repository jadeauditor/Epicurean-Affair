<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login & Signup/LogIn_Signup_globalss.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login & Signup/LogIn_Signup_styleguide.css " />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/login & Signup/LogIn_Signup_style.css" />
</head>
<body>
<!-- <div class="d-flex justify-content-center"> -->
<!-- <div class="mx-auto" style="width: 200px;"></div> -->

<?php
include '../app/views/shared/header.view.php';
?>

<div class="login" id="login-body">
    <div class="text-wrapper">Create Account</div>
    <div class="field">
        <div class="div">
            <input class="input-field" placeholder="Email" type="email" id="input-1" />
            <input class="input-field" placeholder="Password" type="password" id="input-1"/>
            <input class="input-field" placeholder="Confirm Password" type="password" id="input-1"/>

        </div>
        <div class="links">
            <div class="remember" id="rememberme">
                <!-- <div class="checkbox"></div> -->
                <!-- <div class="text-wrapper-2">Remember me</div> -->
                <input type="checkbox" class="text-wrapper-2" id="chk"/>
                <!-- <label for="checkbox" class="text-wrapper-2" id="rememberlabel"> Remember me</label> -->
                <p class="text-wrapper-2">Accept all terms &amp; Conditions</p>


            </div>
            <a href="https://www.youtube.com/" class="text-wrapper-2" id="forgetpass">Forget Password</a>
            <!-- <div class="text-wrapper-2">Forget Password</div> -->
        </div>
    </div>
    <button class="button" id="buttn"><div class="normal">Create Account</div></button>
    <div class="don-t-have-account">
        <div class="text-wrapper-2">Already have account.</div>
        <a href="<?= ROOT ?>/Signin" class="register" id="regis">Login</a>

    </div>
</div>
<!-- </div> -->
<div style="background-color: aqua; margin-left: auto; margin-right: auto;">
    <?php
    include '../app/views/shared/footer.view.php';
    ?>
</div>

</body>
</html>
