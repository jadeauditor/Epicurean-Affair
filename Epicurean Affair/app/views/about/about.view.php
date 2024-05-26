<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/about/aboutstyle.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/about/about_styleguide.css" />
    <!-- <link rel="stylesheet" href="/about_style.css" /> -->
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/about/s.css">
</head>

<body>

<?php
include '../app/views/shared/header.view.php';
?>

<div class="about-content">

    <div>
        <div id="greet-section">

            <div class="div-2">
                <p class="p">Indulge. Savor. Celebrate with Epicurean Affair.</p>
            </div>

            <p class="welcome-to-epicurean">
                <span class="text-wrapper-17">Welcome to </span>
                <span class="text-wrapper-18">Epicurean Affair</span>
                <span class="text-wrapper-17">, where culinary mastery meets impeccable service to create unforgettable dining experiences. At
                        Epicurean Affair, we believe that every event is an opportunity to indulge in the finest flavors and
                        elevate the art of dining.</span>
            </p>

        </div>
    </div>

    <div class="overlap-8" id="section-2">

        <div class="leftside">

            <p class="our-story"><span class="span">Our </span> <span class="text-wrapper-3">Story</span></p>

            <p class="at-epicurean-affair">
                At Epicurean Affair, we believe that food is more than just sustenance – it&#39;s an experience to be
                savored and shared. That&#39;s why we source only the freshest, highest quality ingredients, handcrafted
                by our talented chefs into culinary masterpieces that delight the senses.
            </p>

            <p class="text-wrapper-16">
                Epicurean Affair was born out of a passion for exquisite cuisine and a dedication to providing
                exceptional service. Founded by a team of culinary enthusiasts with decades of combined experience, we
                set out to redefine catering by bringing together a fusion of flavors, innovation, and attention to
                detail.
            </p>
        </div>

        <div class="overlap-9">
            <img class="image-5" src="<?= ROOT ?>/assets/images/about/image-3.png" />
        </div>

    </div>

    <div class="section-3">

        <div class="image-3">
            <div class="image-wrapper"><img class="image-4" src="<?= ROOT ?>/assets/images/about/image-2.png" /></div>
        </div>

        <div class="whychoose">

            <p class="our-story"><span class="span">Why </span> <span class="text-wrapper-3">Choose Us</span></p>

            <div class="first">

                <div class="feature">
                    <img class="icon" src="<?= ROOT ?>/assets/images/about/icon.svg" />
                    <div class="info-2">
                        <div class="text-wrapper-13">Culinary Excellence</div>
                        <p class="element-healthy-fresh">100% healthy &amp; Fresh food.</p>
                    </div>
                </div>

                <div class="feature-2">
                    <img class="icon" src="<?= ROOT ?>/assets/images/about/icon-1.svg" />
                    <div class="info-2">
                        <div class="text-wrapper-13">Impeccable Service</div>
                        <div class="text-wrapper-14">Our happy customer</div>
                    </div>
                </div>

                <div class="feature-4">
                    <img class="icon" src="<?= ROOT ?>/assets/images/about/icon-2.svg" />
                    <div class="info-2">
                        <div class="text-wrapper-13">Great Support 24/7</div>
                        <div class="text-wrapper-14">Instant access to Contact</div>
                    </div>
                </div>

                <div class="feature-5">
                    <img class="icon" src="<?= ROOT ?>/assets/images/about/icon-3.svg" />
                    <div class="info-2">
                        <div class="text-wrapper-13">Attention to Detail</div>
                        <p class="text-wrapper-14">100% healthy &amp; Fresh food.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <div class="services-buttons">

        <p class="our-story2"><span class="span">Our </span> <span class="text-wrapper-3">Story</span></p>

        <div class="part1">
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Regular Buffet</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Packed Meal</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Full Board</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Debut</a></button>
        </div>

        <div class="part2">
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Wedding</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Corporate</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Kids Party</a></button>
            <button class="text-wrappery" id="buttn"> <a href="https://www.youtube.com/">Cocktail</a></button>
        </div>

    </div>

</div>

<?php
include '../app/views/shared/footer.view.php';
?>


</body>
</html>