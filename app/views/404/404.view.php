<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/404/404.css"> <!-- Link to external CSS file -->



</head>
<body>

<?php
include '../app/views/shared/header.view.php';
?>



<div class="container">

    <img class="illustration" src="<?= ROOT ?>/assets/images/404/alternative404.svg"
         alt="<?= ROOT ?>/assets/images/404illustration2.svg"/>
    <h1>Oops! Page not found</h1>
    <p>We're sorry, but the page you are looking for could not be found.</p>
    <p>Maybe try one of the links below or <a href="<?= ROOT ?>/Home">go back to the homepage</a>.</p>
    <button class="button">Back to Home</button>
</div>


<?php
include '../app/views/shared/footer.view.php';
?>
</body>
</html>