<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
    />
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/home/home.css" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/home/styleguide.css" />

</head>
<body>

<?php
include '../app/views/shared/header.view.php';
?>

<div class="home-content">

    <div id="sideNavbar" class="sidenav collapse">
        <div class="header row" style="margin-top: 0.5rem !important">
            <img
                    class="banner ml-4"
                    id="changeMe"
                    src="<?=ROOT?>/assets/images/home/header-buffet.png"
                    style="overflow-x: hidden"
            />
            <div class="banner ml-4">
                <div class="banner-frame">
                    <div class="banner-wrapper">
                        <p class="fresh-healthy-tag-line">
                            Feast with Ease:<br />Book, Dine, Delight.
                        </p>
                        <div class="sale-div-wrapper">
                            <p class="sale-up-to-off-text-wrapper">
                                SALE UP TO<br />48% OFF
                            </p>
                        </div>
                    </div>
                    <a href="#" class="shop-now-btn btn btn-success">
                        <div class="text-wrapper-4">Shop now</div>
                        <img class="shop-now" src="<?=ROOT?>/assets/images/home/shop-now-icon.svg" />
                    </a>
                </div>
            </div>

            <div class="categories ml-4" style="margin-top: -14.3rem">
                <a class="category-div text-dark" id="regular-buffet">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/regular-buffet.svg" />
                    <div class="category-text-wrapper">Regular Buffet</div>
                </a>
                <a href="#" class="category-div text-dark" id="packed-meal">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/packed-meal.svg" />
                    <div class="category-text-wrapper">Packed Meal</div>
                </a>
                <a href="#" class="category-div text-dark" id="full-board">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/full-board.svg" />
                    <div class="category-text-wrapper">Full Board</div>
                </a>
                <a href="#" class="category-div text-dark" id="debut">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/debut.svg" />
                    <div class="category-text-wrapper">Debut</div>
                </a>
                <a href="#" class="category-div text-dark" id="wedding">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/wedding.svg" />
                    <div class="category-text-wrapper">Wedding</div>
                </a>
                <a href="#" class="category-div text-dark" id="corporate">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/corporate.svg" />
                    <div class="category-text-wrapper">Corporate</div>
                </a>
                <a href="#" class="category-div text-dark" id="kids-party">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/kids-party.svg" />
                    <div class="category-text-wrapper">Kids Party</div>
                </a>
                <a href="#" class="category-div text-dark" id="cocktail">
                    <img class="category-svg" src="<?=ROOT?>/assets/images/home/cocktail.svg" />
                    <div class="category-text-wrapper">Cocktail</div>
                </a>
            </div>

            <div class="features row" style="margin-left: 8rem; margin-top: -12rem">
                <div class="great-support col-sm-12 col-md-3 col-lg-3">
                    <img class="img" src="<?=ROOT?>/assets/images/home/free-shipping-icon.svg" />
                    <div class="description">
                        <div class="text-wrapper">Free Shipping</div>
                        <div class="text-wrapper-2 text-secondary fs-3">
                            Free shipping with discount
                        </div>
                    </div>
                </div>
                <div class="great-support col-sm-12 col-md-3 col-lg-3">
                    <img class="img" src="<?=ROOT?>/assets/images/home/great-support-icon.svg" />
                    <div class="great-support-description">
                        <div class="great-support-description-1">Great Support 24/7</div>
                        <div class="great-support-description-2">
                            Instant access to Contact
                        </div>
                    </div>
                </div>
                <div class="secure-payment col-sm-12 col-md-3 col-lg-3">
                    <img class="img" src="<?=ROOT?>/assets/images/home/secure-payment-icon.svg" />
                    <div class="description">
                        <div class="secure-payment-description-1">
                            100% Secure Payment
                        </div>
                        <p class="secure-payment-description-2 text-secondary">
                            We ensure your money is safe
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-content mt-3">
        <!-- Banner Best Sellers etc. -->
        <div class="container">
            <div class="row bannar">
                <div class="col-md-4 mb-3 div">
                    <img src="<?=ROOT?>/assets/images/home/banner-1.png" alt="Banner 1" class="img-fluid" />
                    <a href="#" class="btn btn-success button mx-auto">
                        <div class="text-wrapper-6">Shop Now</div>
                        <img
                                class="group d-none d-lg-inline"
                                src="<?=ROOT?>/assets/images/home/shop-now-icon-green.svg"
                                alt="Shop Now Icon"
                        />
                    </a>
                </div>
                <div class="col-md-4 mb-3 div">
                    <img src="<?=ROOT?>/assets/images/home/banner-2.png" alt="Banner 2" class="img-fluid" />
                    <a href="#" class="btn btn-success button mx-auto">
                        <div class="text-wrapper-6">Shop Now</div>
                        <img
                                class="group d-none d-lg-inline"
                                src="<?=ROOT?>/assets/images/home/shop-now-icon-green.svg"
                                alt="Shop Now Icon"
                        />
                    </a>
                </div>
                <div class="col-md-4 mb-3 div">
                    <img src="<?=ROOT?>/assets/images/home/banner-3.png" alt="Banner 3" class="img-fluid" />
                    <a href="#" class="btn btn-success button mx-auto">
                        <div class="text-wrapper-6">Shop Now</div>
                        <img
                                class="group d-none d-lg-inline"
                                src="<?=ROOT?>/assets/images/home/shop-now-icon-green.svg"
                                alt="Shop Now Icon"
                        />
                    </a>
                </div>
            </div>
        </div>

        <!-- Shop By Top Categories starts here -->
        <div class="container">
            <div class="row category mb-6 mt-5">
                <div class="col-md-12">
                    <div class="heading mb-4">
                        <div class="text-wrapper" style="color: #00b207">CATEGORY</div>
                        <div class="div" style="font-weight: bold; font-size: 30px">
                            Shop by Top Categories
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="image" src="<?=ROOT?>/assets/images/home/shop-by-regular-buffet.png" />
                        <div class="text-wrapper-2">Regular Buffet</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-packed-meal.png" />
                        <div class="text-wrapper-2">Packed Meal</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-full-board.png" />
                        <div class="text-wrapper-2">Full Board</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-debut.png" />
                        <div class="text-wrapper-2">Debut</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="image" src="<?=ROOT?>/assets/images/home/shop-by-wedding.png" />
                        <div class="text-wrapper-2">Wedding</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-corporate.png" />
                        <div class="text-wrapper-2">Corporate</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-kids-party.png" />
                        <div class="text-wrapper-2">Kids Party</div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <a
                            href="#"
                            class="div-category text-dark text-decoration-none"
                            style="left: 0"
                    >
                        <img class="img" src="<?=ROOT?>/assets/images/home/shop-by-cocktail.png" />
                        <div class="text-wrapper-2">Cocktail</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Our Featured Products Starts Here -->
        <div class="container">
            <div class="row category mb-5 mt-5">
                <div class="col-md-12">
                    <div class="heading mb-4">
                        <div class="text-wrapper" style="color: #00b207">PRODUCTS</div>
                        <div class="div" style="font-weight: bold; font-size: 30px">
                            Our Featured Products
                        </div>
                    </div>
                </div>

                <!-- Featured Product 1 -->
                <div class="col-sm-6 col-md-3">
                    <div class="products">
                        <div class="image">
                            <img
                                    class="img"
                                    src="<?=ROOT?>/assets/images/home/featured-product-boeuf.png"
                                    style="width: 100%; height: auto"
                            />
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <div class="product-name">Boeuf Bourguignon</div>
                                <div class="price">
                                    <div class="element">P2499 - P4999</div>
                                </div>
                            </div>
                            <img class="rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                        </div>
                        <img class="add-to-cart" src="<?=ROOT?>/assets/images/home/add-to-cart.svg" />
                        <a href="#" class="product-link"
                        ><img src="<?=ROOT?>/assets/images/home/featured-cart.svg"
                            /></a>
                    </div>
                </div>

                <!-- Featured Product 2 -->
                <div class="col-sm-6 col-md-3">
                    <div class="products">
                        <div class="image">
                            <img
                                    class="img"
                                    src="<?=ROOT?>/assets/images/home/featured-product-sushi.png"
                                    style="width: 100%; height: auto"
                            />
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <div class="product-name">Sushi</div>
                                <div class="price">
                                    <div class="element">P1459 - P2889</div>
                                </div>
                            </div>
                            <img class="rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                        </div>
                        <img class="add-to-cart" src="<?=ROOT?>/assets/images/home/add-to-cart.svg" />
                        <a href="#" class="product-link" style="margin-top: 10px"
                        ><img src="<?=ROOT?>/assets/images/home/featured-cart.svg"
                            /></a>
                    </div>
                </div>

                <!-- Featured Product 3 -->
                <div class="col-sm-6 col-md-3">
                    <div class="products">
                        <div class="image">
                            <img
                                    class="img"
                                    src="<?=ROOT?>/assets/images/home/featured-product-peking.png"
                                    style="width: 100%; height: auto"
                            />
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <div class="product-name">Peking Duck</div>
                                <div class="price">
                                    <div class="element">P2475 - P4439</div>
                                </div>
                            </div>
                            <img class="rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                        </div>
                        <img class="add-to-cart" src="<?=ROOT?>/assets/images/home/add-to-cart.svg" />
                        <a href="#" class="product-link" style="margin-top: 10px"
                        ><img src="<?=ROOT?>/assets/images/home/featured-cart.svg"
                            /></a>
                    </div>
                </div>

                <!-- Featured Product 4 -->
                <div class="col-sm-6 col-md-3">
                    <div class="products">
                        <div class="image">
                            <img
                                    class="img"
                                    src="<?=ROOT?>/assets/images/home/featured-product-adobo.png"
                                    style="width: 100%; height: auto"
                            />
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <div class="product-name">Pork Adobo</div>
                                <div class="price">
                                    <div class="element">P1750 - P3498</div>
                                </div>
                            </div>
                            <img class="rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                        </div>
                        <img class="add-to-cart" src="<?=ROOT?>/assets/images/home/add-to-cart.svg" />
                        <a href="#" class="product-link"
                        ><img src="<?=ROOT?>/assets/images/home/featured-cart.svg"
                            /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hot Deals, Best Sellers, Top Rated Starts Here -->
        <div class="container">
            <div class="row hot-best-top-products">
                <!-- Hot Deals Section -->
                <div class="col-md-4 col-sm-4 mb-5 hot-deals-section">
                    <div class="hot-deals">
                        <div class="hot-deals-wrapper">Hot Deals</div>
                        <!-- Hot Product 1 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/hot-deals-pizza.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Italian Pizza</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Hot Product 2 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/hot-deals-ravioli.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Ravioli</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Hot Product 3 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/hot-deals-risotto.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Risotto</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                    </div>
                </div>
                <!-- Best Seller Section -->
                <div class="col-md-4 col-sm-4 mb-5 hot-deals-section">
                    <div class="hot-deals">
                        <div class="hot-deals-wrapper">Best Seller</div>
                        <!-- Best Seller Product 1 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/best-seller-tacos.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Tacos</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Best Seller Product 2 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/best-seller-enchilada.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Enchilada</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Best Seller Product 3 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/best-seller-guacamole.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Guacamole</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                    </div>
                </div>
                <!-- Top Rated Section -->
                <div class="col-md-4 col-sm-4 mb-3 hot-deals-section">
                    <div class="hot-deals">
                        <div class="hot-deals-wrapper">Top Rated</div>
                        <!-- Top Rated Product 1 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/top-rated-kimchi.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Kimchi</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Top Rated Product 2 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/top-rated-bibimbap.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Bibimbap</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                        <!-- Top Rated Product 3 -->
                        <div class="hot-deals-product">
                            <img src="<?=ROOT?>/assets/images/home/top-rated-bulgogi.png" class="hot-deals-image" />
                            <div class="hot-deals-product-info">
                                <div class="hot-deals-info">
                                    <div class="hot-deals-product-name">Beef Bulgogi</div>
                                    <div class="hot-deals-price">
                                        <div class="hot-deals-price-wrapper">P814.99</div>
                                    </div>
                                </div>
                                <img class="hot-deals-rating" src="<?=ROOT?>/assets/images/home/rating.svg" />
                            </div>
                            <a href="#" class="hot-product-link"
                            ><img src="<?=ROOT?>/assets/images/home/hot-best-top-cart.svg"
                                /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Starts Here -->
        <div
                class="category mt-3"
                style="background-color: #f2f2f2; padding: 40px 15px"
        >
            <div class="heading">
                <div class="text-wrapper">CLIENT TESTIMONIAL</div>
                <div class="div mb-4">What our Client Says</div>
            </div>
            <!-- Testimonial Cards -->
            <div class="testimonial-cards">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <img class="vector" src="<?=ROOT?>/assets/images/home/testimonial-vector.svg" alt="Vector" />
                    <p class="testimonial-text">
                        Booking catering for our event has never been easier! The process
                        was seamless, and the food was fantastic. Highly recommend!
                    </p>
                    <div class="client">
                        <div class="reviewer">
                            <img
                                    class="testimonial-image"
                                    src="<?=ROOT?>/assets/images/home/testimonial-client1.png"
                                    alt="Client Image"
                            />
                            <div class="testimonial-info">
                                <div class="client-name">Robert Fox</div>
                                <div class="client-title">Customer</div>
                            </div>
                        </div>
                        <img class="rating" src="<?=ROOT?>/assets/images/home/testimonial-rating.svg" alt="Rating" />
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <img class="vector" src="<?=ROOT?>/assets/images/home/testimonial-vector.svg" alt="Vector" />
                    <p class="testimonial-text">
                        A game-changer for event planning! The booking system is
                        user-friendly, and the catering was outstanding. Will definitely
                        use again!
                    </p>
                    <div class="client">
                        <div class="reviewer">
                            <img
                                    class="testimonial-image"
                                    src="<?=ROOT?>/assets/images/home/testimonial-client2.png"
                                    alt="Client Image"
                            />
                            <div class="testimonial-info">
                                <div class="client-name">Dianne Russell</div>
                                <div class="client-title">Customer</div>
                            </div>
                        </div>
                        <img class="rating" src="<?=ROOT?>/assets/images/home/testimonial-rating.svg" alt="Rating" />
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <img class="vector" src="<?=ROOT?>/assets/images/home/testimonial-vector.svg" alt="Vector" />
                    <p class="testimonial-text">
                        Fantastic service! The online booking was straightforward, and the
                        catering was superb. Highly recommend to anyone in need of quality
                        catering.
                    </p>
                    <div class="client">
                        <div class="reviewer">
                            <img
                                    class="testimonial-image"
                                    src="<?=ROOT?>/assets/images/home/testimonial-client3.png"
                                    alt="Client Image"
                            />
                            <div class="testimonial-info">
                                <div class="client-name">Eleanor Pena</div>
                                <div class="client-title">Customer</div>
                            </div>
                        </div>
                        <img class="rating" src="<?=ROOT?>/assets/images/home/testimonial-rating.svg" alt="Rating" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home content div ends here -->


</div>

<?php
include '../app/views/shared/footer.view.php';
?>


</body>
</html>