<?php 

session_start();

$_SESSION["username"] = "";



require "../app/core/init.php"; // load core files thru init.php file

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();

