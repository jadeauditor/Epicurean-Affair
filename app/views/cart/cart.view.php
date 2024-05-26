<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/cart/cartstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php
include '../app/views/shared/header.view.php';
?>

<div class="shopping-cart-content">
    <div class="element-shopping-cart">
        <div class="shopping-cart">
            <div class="navbar">
                <div class="product">PRODUCT</div>
                <div class="price">PRICE</div>
                <div class="quantity">QUANTITY</div>
                <div class="subtotal">SUBTOTAL</div>
            </div>
            <hr class="hr1"></hr>
            <div class="product product-details"></div>
            <div class="CTA">
                <button class="return"><div class="return-shop">Return to shop</div></button>
                <button class="update" onclick="updateTotal()"><div class="update-cart">Update Cart</div></button>
            </div>
        </div>

        <div class="cart-total">
            <div class="overlap-groupyy">
                <div class="cartTotaltext">Cart Total</div>
                <div class="info">
                    <div class="total">
                        <div class="text-wrapper">Total:</div>
                        <div class="text-wrapper-2">$0.00</div>
                    </div>
                    <div class="subtotal-2">
                        <div class="text-wrapper-3">Subtotal:</div>
                        <div class="text-wrapper-4">$0.00</div>
                    </div>
                    <hr class="hr-sub"></hr>
                    <div class="shipping">
                        <div class="text-wrapper-5">Shipping:</div>
                        <div class="text-wrapper-6">Free</div>
                    </div>
                    <hr class="hr-ship"></hr>
                </div>
                <button class="checkout"><div class="normal"><a href="<?= ROOT?>/Checkout">Proceed to checkout</a></div></button>
            </div>
        </div>
    </div>

</div>

<?php
include '../app/views/shared/footer.view.php';
?>


<script>
    function addToCart(productName, price, quantity, imageUrl) {
        var newItem = document.createElement("div");
        newItem.className = "cart-item";
        newItem.innerHTML = `
            <div class="product-image"><img src="${imageUrl}" alt="${productName}"></div>
            <div class="product-info">
                <div class="product-name">${productName}</div>
                <div class="product-price">$${price.toFixed(2)}</div>
                <div class="quantity num-order">
                    <span class="minus" onclick="decrement(this)">-</span>
                    <span class="num">${quantity}</span>
                    <span class="plus" onclick="increment(this)">+</span>
                </div>
                <div class="subtotal product-subtotal">$${(price * quantity).toFixed(2)}</div>
            </div>
            <button class="delete" onclick="removeItem(this)"><i class="fas fa-trash"></i></button>
        `;

        var productDetails = document.querySelector(".product-details");
        productDetails.appendChild(newItem);

        updateTotal();
    }

    function increment(element) {
        let numSpan = element.parentElement.querySelector('.num');
        let num = parseInt(numSpan.textContent);
        numSpan.textContent = num + 1;
        updateSubtotal(element.parentElement.parentElement.parentElement, num + 1);
        updateTotal();
    }

    function decrement(element) {
        let numSpan = element.parentElement.querySelector('.num');
        let num = parseInt(numSpan.textContent);
        if (num > 1) {
            numSpan.textContent = num - 1;
            updateSubtotal(element.parentElement.parentElement.parentElement, num - 1);
            updateTotal();
        }
    }

    function updateSubtotal(itemElement, newQuantity) {
        let priceElement = itemElement.querySelector('.product-price');
        let subtotalElement = itemElement.querySelector('.product-subtotal');
        let price = parseFloat(priceElement.textContent.replace("$", ""));
        subtotalElement.textContent = "$" + (price * newQuantity).toFixed(2);
    }

    function updateTotal() {
        var total = 0;
        var subtotalElements = document.querySelectorAll(".product-subtotal");
        subtotalElements.forEach(function(element) {
            total += parseFloat(element.textContent.replace("$", ""));
        });
        var subtotalElement = document.querySelector(".text-wrapper-4");
        subtotalElement.textContent = "$" + total.toFixed(2);

        var totalElement = document.querySelector(".text-wrapper-2");
        totalElement.textContent = "$" + total.toFixed(2);
    }

    function removeItem(element) {
        element.parentElement.remove();
        updateTotal();
    }

    function updateCart() {
        updateTotal();
    }

    const products = [
        { id: 1, name: 'Package 1', price: 1000.00, image: 'image6.jpg', quantity: 1 },
        { id: 2, name: 'Package 2', price: 2000.00, image: 'image6.jpg', quantity: 1 },
        { id: 2, name: 'Package 2', price: 2000.00, image: 'image6.jpg', quantity: 1 },
        { id: 2, name: 'Package 2', price: 2000.00, image: 'image6.jpg', quantity: 1 },
        { id: 2, name: 'Package 2', price: 2000.00, image: 'image6.jpg', quantity: 1 },
        { id: 2, name: 'Package 2', price: 2000.00, image: 'image6.jpg', quantity: 1 },


    ];

    function renderCart() {
        const productDetails = document.querySelector(".product-details");
        productDetails.innerHTML = ""; // Clear the product details

        products.forEach(product => {
            addToCart(product.name, product.price, product.quantity, product.image);
        });
    }

    renderCart(); // Render the initial cart
</script>
</body>
</html>

