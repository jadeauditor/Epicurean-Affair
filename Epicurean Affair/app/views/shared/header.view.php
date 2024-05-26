
<div class="body-head">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/header/nav.css">
    <!--    <link rel="stylesheet" href="--><?php //= ROOT ?><!--/assets/css/header/styleguide.css">-->


    <!-- Owl Carousel Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>



    <div class="headery">
        <link rel="stylesheet" href="<?= ROOT ?>/assets/css/header/new_style.css" />

        <div class="navigation">

            <div class="small-one">

                <div class="div-3">
                    <img class="map-pin" src="<?= ROOT ?>/assets/images/header/map-pin-1.png" />
                    <p class="store-location">Store Location: M. Logarta Ave. Subangdaku Mandaue City , Cebu Philippines</p>
                </div>

                <div class="links">

                    <div class="div-4">
                        <div class="text-wrapper-5">Eng</div>
                        <img class="group" src="<?= ROOT ?>/assets/images/header/group-1.png" />
                    </div>

                    <div class="div-4">
                        <div class="text-wrapper-5">PHP</div>
                        <img class="group-2" src="<?= ROOT ?>/assets/images/header/group-3.png" />
                    </div>
                </div>

            </div>


            <div class="midle">

                <div class="div-3">
                    <img id="epicurean-logo" class="img-3" src="<?= ROOT ?>/assets/images/header/logo.svg" />
                    <div class="ecobazar">Epicurean Affair</div>
                </div>

                <!-- <div class="search">
                  <div class="frame">
                    <img class="img-4" src="img/search-1.svg" />
                    <div class="text-wrapper-6">Search</div>
                  </div>
                  <button class="button"><div class="text-wrapper-7">Search</div></button>
                </div> -->

                <div class="div-5">
                    <img class="phonecall" src="<?= ROOT ?>/assets/images/header/phonecall-1-1.svg" />
                    <div class="info-2">
                        <div class="text-wrapper-8">Customer Services</div>
                        <div class="text-wrapper-9">(219) 555-0114</div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #1A1A1A;">

<!--        <div class="logo">-->
<!--            <img src="--><?php //= ROOT ?><!--/assets/images/header/logo.png" class="img-fluid ms-2" style="width: 72px;margin-left: -10px;" />-->
<!--        </div>-->
<!---->
<!--        <a class="navbar-brand mr-auto pr-2" href="#" style="margin-left: -11px;">Epicurean Affair</a>-->

        <img class="imgy" src="<?= ROOT ?>/assets/images/header/categories-1.svg" />

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item" style="margin-left: 10px;">
                    <a class="nav-link" href="#" id="toggleSideNav" style="background-color: #333333;">All Categories <span class="header-drop"><img src="<?= ROOT ?>/assets/images/header/header-drop.svg" style="width: 15px;"></span> <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/Home">Home</a>
                </li>

                <li class="nav-item" id="shop">
                    <a class="nav-link" href="<?= ROOT ?>/Shop">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/About">About us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/Contact">Contact us</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link"><img src="<?= ROOT ?>/assets/images/header/heart.svg" style="width: 20px;"></a></li>
                <li class="nav-item"><a href="<?= ROOT ?>/Cart" class="nav-link"><img src="<?= ROOT ?>/assets/images/header/nav-cart.svg" style="width: 20px;"></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><img src="<?= ROOT ?>/assets/images/header/profile.svg" style="width: 20px;"></a></li>
            </ul>

        </div>

    </nav>


    <div id="sideNavbar" class="sidenav" style="margin-top: 20px; display: none; margin-bottom: -175px;">

        <div class="header">

            <div class="free-shipping" style="margin-top: -200px; margin-left: 9px;"></div>

            <div class="banner ml-4">

                <img class="banner ml-4" id="changeMe" src="<?= ROOT ?>/assets/images/header/header-buffet.png" style="margin-left: -343px !important;" />

                <div class="banner-frame">

                    <div class="banner-wrapper">

                        <div class="fresh-healthy-tag-line">Fresh &amp; Healthy<br />Organic Food</div>
                        <div class="sale-div-wrapper">
                            <div class="vertical-line"></div>
                            <div class="sale-up-to-off-text-wrapper">SALE UP TO<br />48% OFF</div>
                        </div>

                    </div>

                    <a href="#" class="shop-now-btn">
                        <div class="text-wrapper-4">Shop now</div>
                        <img class="shop-now" src="<?= ROOT ?>/assets/images/header/shop-now-icon.svg" />
                    </a>

                </div>
            </div>

            <div class="categories ml-3" style="margin-top: -230px;">
                <a class="category-div text-dark" id="regular-buffet">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/regular-buffet.svg" />
                    <div class="category-text-wrapper">Regular Buffet</div>
                </a>
                <a href="#" class="category-div text-dark" id="packed-meal">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/packed-meal.svg" />
                    <div class="category-text-wrapper">Packed Meal</div>
                </a>
                <a href="#" class="category-div text-dark" id="full-board">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/full-board.svg" />
                    <div class="category-text-wrapper">Full Board</div>
                </a>
                <a href="#" class="category-div text-dark" id="debut">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/debut.svg" />
                    <div class="category-text-wrapper">Debut</div>
                </a>
                <a href="#" class="category-div text-dark" id="wedding">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/wedding.svg" />
                    <div class="category-text-wrapper">Wedding</div>
                </a>
                <a href="#" class="category-div text-dark" id="corporate">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/corporate.svg" />
                    <div class="category-text-wrapper">Corporate</div>
                </a>
                <a href="#" class="category-div text-dark" id="kids-party">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/kids-party.svg" />
                    <div class="category-text-wrapper">Kids Party</div>
                </a>
                <a href="#" class="category-div text-dark" id="cocktail">
                    <img class="category-svg" src="<?= ROOT ?>/assets/images/header/cocktail.svg" />
                    <div class="category-text-wrapper">Cocktail</div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="<?= ROOT ?>/assets/js/header/nav.js"></script>


    <script src="<?= ROOT ?>/assets/js/jQuery/jquery-3.7.1.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/header/process.js"></script>

</div>
