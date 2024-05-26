<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact  Us</title>
<!--    <link rel="stylesheet" href="--><?php //= ROOT ?><!--/assets/css/contact/contact_globals.css" />-->
<!--    <link rel="stylesheet" href="--><?php //= ROOT ?><!--/assets/css/contact/contact_styleguide.css" />-->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/contact/contact_style.css" />
</head>

<body>

<?php
include '../app/views/shared/header.view.php';
?>

<div class="contact-content">

    <div class="layer1">

        <div class="contact-info">

            <div class="div-7">

                <div class="icon"><img class="img" src="<?= ROOT ?>/assets/images/contact/map-pin-1.svg" /></div>

                <p class="text-wrapper-14"> M. Logarta Ave. Subangdaku <br>Mandaue City, Cebu Philippines</p>

            </div>

            <hr class="devider">

            <div class="div-7">

                <div class="icon"><img class="img" src="<?= ROOT ?>/assets/images/contact/email.svg" /></div>


                <div class="text-wrapper-14">
                    <a href="mailto:epicurean.affair@gmail.com"  class="a">epicurean.affair@gmail.com</a><br>
                    <a href="mailto:Help.epicurean.affair@gmail.com"  class="a">Help.epicurean.affair@gmail.com</a>
                </div>

            </div>

            <hr class="devider">

            <div class="div-7">

                <div class="icon"><img class="img" src="<?= ROOT ?>/assets/images/contact/phonecall.svg" /></div>

                <div class="text-wrapper-14">
                    <a href="tel:(219) 555-0114" class="a">(219) 555-0114</a> <br>
                    <a href="tel:(+63) 922 786 9752"  class="a">(+63) 922 786 9752</a>
                </div>


            </div>

        </div>
        <!-- 2nd section -->

        <div class="just-say-hello">

            <div class="overlap-3">

                <label for="FirstName" class="text-wrapper-label">First Name</label>
                <input type="text" placeholder="Jade" name="fname" id="fname" class="filled-gmail-com-1">
                <label for="LastName" class="text-wrapper-label-2">Last Name</label>
                <input type="text" placeholder="Santos" name="Lname" id="Lname" class="filled-gmail-com">


                <label for="email" class="text-wrapper-label-3" id="email-label">Email</label>
                <input  placeholder="jade.santos@gmail.com" type="email" name="email" id="email" class="filled-gmail-com-3" required>
                <label for="contact"  class="text-wrapper-label-4" id="contact-label">Contact</label>
                <input type="tel" placeholder="090-0000-000" name="contact" id="contact" class="filled-gmail-com-4" maxlength="11" required>

                <label for="Subject" class="text-wrapper-label-5">Subject</label>
                <input type="text" placeholder="Subject" id="sub" class="typ-wrapper">
                <label for="Message" class="text-wrapper-label-6">Message</label>
                <textarea name="Message" id="message" class="mess-wrapper">Message</textarea>

                <div class="text-wrapper-13">Feast Your Senses!</div>

                <button class="normal-wrapper" id="buttn">
                    <a href="https://www.youtube.com/watch?v=B2bnLUce6wI&list=RDuPklMSpmvGs&" class="normal">Send Message</a>
                </button>


                <p class="text-wrapper-12">Craving mouthwatering dishes for your event ? Need help with your catering arrangements ? Say hello to us! <br>
                    Say hello to us ! Whether it's a wedding, corporate event, or a family gathering, we've got you covered<br>Just fill out the form below, and let's create a culinary experience your  guests won't forget !</p>
            </div>
        </div>

    </div>

    <div class="layer2">

        <!-- <img class="map-image" src="ContactUsimg/map-image.png" /> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.3100856773326!2d123.92237277411607!3d10.317050067500832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99972d6d33fab%3A0x39d8537b5782c806!2sM.%20Logarta%20Ave%2C%20Mandaue%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1715494076400!5m2!1sen!2sph"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-image"></iframe>

    </div>

</div> <!-- </div> ends here the content -->

<div>

    <?php
    include '../app/views/shared/footer.view.php';
    ?>
</div>


</body>



</html>