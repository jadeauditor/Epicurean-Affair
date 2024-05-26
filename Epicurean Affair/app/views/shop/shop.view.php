<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-p7zUJBy2kxiuKdSZPKPTvVl6jfgjo8zAcaPiu17PA0jiL2g2PxVUEbjk9tJ0s2wG" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="<?= ROOT ?>/assets/css/shop/shopnew.css" rel="stylesheet">

</head>

<?php
include '../app/views/shared/header.view.php';
?>

<body>
<div class="shop-container">
    <div class="shopfilter">
        <div class="shopfiltercat">
            <div id="overlay"></div>

            <h3>All Categories</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-regular-buffet" value="Regular Buffet" checked>
                <label class="form-check-label" for="category-regular-buffet">Regular Buffet</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-packed-meals" value="Packed Meals">
                <label class="form-check-label" for="category-packed-meals">Packed Meals</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-full-board" value="Full Board">
                <label class="form-check-label" for="category-full-board">Full Board</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-debut" value="Debut">
                <label class="form-check-label" for="category-debut">Debut</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-wedding" value="Wedding">
                <label class="form-check-label" for="category-wedding">Wedding</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-corporate" value="Corporate">
                <label class="form-check-label" for="category-corporate">Corporate</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-kids-party" value="Kids Party">
                <label class="form-check-label" for="category-kids-party">Kids Party</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="category-cocktail" value="Cocktail">
                <label class="form-check-label" for="category-cocktail">Cocktail</label>
            </div>
            <hr class="hr1"></hr>

            <div class="pricerange">
                <h3 for="price-filter">Price</h3>
                <div class="input-group">
                    <input type="range" id="price-slider" class="form-range" min="200" max="1000" step="5" value="1000">
                    <p>Price: </p>
                    <div id="price-values"></div>
                </div>

                <hr class="hr2"></hr>



                <!-- Product Filter Controls -->
                <div class="filterstars">
                    <h3 class="starfilter">Rating</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="star1">
                        <label class="form-check-label" for="star1">
                            <div class="ratings">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            1.0
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="star2">
                        <label class="form-check-label" for="star2">
                            <div class="ratings">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            2.0           </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="star3">
                        <label class="form-check-label" for="star3">
                            <div class="ratings">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            3.0            </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="star4">
                        <label class="form-check-label" for="star4">
                            <div class="ratings">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            4.0            </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" id="star5">
                        <label class="form-check-label" for="star5">
                            <div class="ratings">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            5.0
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-content">
        <div class="products-2">
            <div class="row justify-content-center">
                <div id="product-list" class="col-md-8">
                    <div class="row row-cols-auto justify-content-center">
                        <!-- Product items will be dynamically loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= ROOT?>/assets/js/shop/shopscript.js"></script>



<?php
include '../app/views/shared/footer.view.php';
?>

</body>
</html>
