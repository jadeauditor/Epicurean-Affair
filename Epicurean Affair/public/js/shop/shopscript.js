const products = [
    { 
        name: 'PACKAGE 1 (5-Pax)', 
        stars: 4, 
        category: 'Regular Buffet', 
        price: 500,
        image: 'http://localhost/PHP MVC/public/assets/images/shop/buffet1.jpg',
        inclusions: ['Oysters Rockefeller', 'Mini Croissants', 'Assorted Toasts', 'Gourmet Sliders', 'Fruit Charcuterie', 'Decadent Desserts']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 5, 
        category: 'Regular Buffet', 
        price: 680, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/buffet2.jpg', 
        inclusions: ['Corn Dogs', 'Shrimp Cocktail', 'Fresh Green Salad', 'Assorted Sandwiches', 'Delicate Tarts']
    },
    { 
        name: 'PACKAGE 3 (10-Pax)', 
        stars: 5, 
        category: 'Regular Buffet', 
        price: 790, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/buffet3.jpg', 
        inclusions: ['Sliders', 'Mini Burger Sandwiches', 'Variety of Mini Sliders', 'Gourmet Fries']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 4, 
        category: 'Regular Buffet', 
        price: 880, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/buffet4.jpg',
        inclusions: ['Assorted Sandwiches', 'Gourmet Salads', 'Savory Wraps', 'Quiches']
    },
    { 
        name: 'PACKAGE 5 (10-Pax)', 
        stars: 5, 
        category: 'Regular Buffet', 
        price: 900, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/buffet5.jpg',
        inclusions: ['Smoked Salmon Pastries', 'Fried Rice in Mini Cups', 'Assorted Finger Foods', 'Artisanal Desserts']
    },
    { 
        name: 'PACKAGE 1 (5-Pax)', 
        stars: 4, 
        category: 'Packed Meals', 
        price: 110, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/pm1.jpg',
        inclusions: ['Shrimp Fried Rice with Edamame', 'Sautéed Green Beans with Garlic']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 5, 
        category: 'Packed Meals', 
        price: 200, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/pm2.jpg',
        inclusions: ['Beef and Broccoli in Oyster Sauce', 'Sesame Rice Pilaf']
    },
    { 
        name: 'PACKAGE 3 (10-Pax)', 
        stars: 4, 
        category: 'Packed Meals', 
        price: 180, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/pm3.jpg',
        inclusions: ['Truffle Mashed Potatoes', 'Bacon-Wrapped Sausages', 'Steamed Broccoli with Hollandaise Sauce']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 5, 
        category: 'Packed Meals', 
        price: 190, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/pm4.jpg',
        inclusions: ['Grilled Chicken with Bell Pepper Medley', 'Lime-Infused Jasmine Rice']
    },
    { 
        name: 'PACKAGE 5 (5-Pax)', 
        stars: 5, 
        category: 'Packed Meals', 
        price: 250, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/pm5.jpg',
        inclusions: ['Peking Duck with Hoisin Sauce', 'Stir-Fried Broccoli and Carrots', 'Steamed Jasmine Rice']
    },
    { 
        name: 'PACKAGE 1 (10-Pax)', 
        stars: 1, 
        category: 'Full Board', 
        price: 390, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/full1.jpg',
        inclusions: ['Continental Breakfast Buffet', 'Gourmet Lunch Buffet', 'Exquisite Dinner Buffet']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 2, 
        category: 'Full Board', 
        price: 507, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/full2.jpg',
        inclusions: ['Lavish Buffet Spread', 'Unlimited Signature Drinks']
    },
    { 
        name: 'PACKAGE 3 (5-Pax)', 
        stars: 4, 
        category: 'Full Board', 
        price: 695, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/full3.jpg',
        inclusions: ['Elegant Breakfast', 'Sumptuous Lunch', 'Decadent Dinner']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 4, 
        category: 'Full Board', 
        price: 879, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/full4.jpg',
        inclusions: ['All Gourmet Meals', 'Artisanal Snacks', 'Fine Beverages']
    },
    { 
        name: 'PACKAGE 5 (10-Pax)', 
        stars: 5, 
        category: 'Full Board', 
        price: 980, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/full5.jpg',
        inclusions: ['Exclusive Daily Meals', 'Afternoon High Tea', 'Evening Cocktail Hour']
    },
     { 
        name: 'PACKAGE 1 (5-Pax)', 
        stars: 3, 
        category: 'Debut', 
        price: 670, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/debut1.jpg',
        inclusions: ['Fish and Chips', 'Empanadas', 'Truffle Pasta', 'Gourmet Burgers', 'Assorted Canapés']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 2, 
        category: 'Debut', 
        price: 490, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/debut2.jpg',
        inclusions: ['Spring Rolls', 'Shrimp Skewers', 'Fresh Lumpia', 'BBQ Omelette', 'Variety of Hors d\'oeuvres']
    },
    { 
        name: 'PACKAGE 3 (5-Pax)', 
        stars: 4, 
        category: 'Debut', 
        price: 350, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/debut3.jpg',
        inclusions: ['Fried Rice with Shrimp', 'Noodle Stir-Fry', 'Assorted Fancy Dishes']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 5, 
        category: 'Debut', 
        price: 290, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/debut4.jpg',
        inclusions: ['Gourmet Burgers', 'Artisan Bread Selection', 'Prime Steak Cuts', 'Assorted Cookies']
    },
    { 
        name: 'PACKAGE 5 (10-Pax)', 
        stars: 5, 
        category: 'Debut', 
        price: 200, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/debut5.jpg',
        inclusions: ['Spring Rolls', 'Shawarma Station', 'Fresh Fruit Platter', 'Gourmet Salad Bar', 'Sliders', 'Wood-Fired Pizza', 'Meatballs in Marinara Sauce', 'Assorted Cheese Platter']
    },
     { 
        name: 'PACKAGE 1 (10-Pax)', 
        stars: 2, 
        category: 'Wedding', 
        price: 398, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/wedding1.jpg',
        inclusions: ['Assorted Steaks', 'Grilled Shrimp Skewers', 'Macaroni Pasta Salad', 'Freshly Baked Bread Selection', 'Roast Turkey', 'Herb-Crusted Chicken', 'Cheese Platter']
    },
    { 
        name: 'PACKAGE 2 (10-Pax)', 
        stars: 3, 
        category: 'Wedding', 
        price: 459, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/wedding2.jpg',
        inclusions: ['Tortilla Wraps', 'Decadent Chocolate Cake', 'Fried Triangle Appetizers', 'Mini Pizzas', 'Meat Wrapped in Banana Leaves']
    },
    { 
        name: 'PACKAGE 3 (5-Pax)', 
        stars: 5, 
        category: 'Wedding', 
        price: 565, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/wedding3.jpg',
        inclusions: ['Chicken Skewers', 'Indian Rice Pilaf', 'Barbecue Selection']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 4, 
        category: 'Wedding', 
        price: 600, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/wedding4.jpg',
        inclusions: ['Fresh Shrimp Cocktail', 'Assorted Muffins', 'Seasonal Fruits Platter', 'Chicken Cordon Bleu', 'Croissant Sandwiches']
    },
    { 
        name: 'PACKAGE 5 (5-Pax)', 
        stars: 5, 
        category: 'Wedding', 
        price: 970, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/wedding5.jpg',
        inclusions: ['Mozzarella and Tomato Skewers', 'Fresh Vegetable and Fruit Salad', 'Seared Salmon Fillets', 'Tuna Tartare']
    },
    { 
        name: 'PACKAGE 1 (5-Pax)', 
        stars: 5, 
        category: 'Corporate', 
        price: 475, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/corp1.jpg',
        inclusions: ['Tortilla Wraps with Guacamole', 'Stuffed Avocado Appetizers', 'Savory Meatballs', 'Fresh Vegetable Salad']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 3, 
        category: 'Corporate', 
        price: 500, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/corp2.jpg',
        inclusions: ['Seafood Platter', 'Popcorn Chicken Bites']
    },
    { 
        name: 'PACKAGE 3 (10-Pax)', 
        stars: 4, 
        category: 'Corporate', 
        price: 460, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/corp3.jpg',
        inclusions: ['Fried Rice with Assorted Toppings', 'Creamy Pasta Selections', 'Stir-Fried Noodles']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 4, 
        category: 'Corporate', 
        price: 360, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/corp4.jpg',
        inclusions: ['Pepperoni Pizza', 'Artisanal Charcuterie Board', 'Assorted Cheese Platter', 'Additional Random Delights']
    },
    { 
        name: 'PACKAGE 5 (5-Pax)', 
        stars: 5, 
        category: 'Corporate', 
        price: 310, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/corp5.jpg',
        inclusions: ['Gourmet Sliders', 'An Array of Appetizers and Dishes to Cater to Every Palate']
    },
     { 
        name: 'PACKAGE 1 (10-Pax)', 
        stars: 2, 
        category: 'Kids Party', 
        price: 110, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/kids party1.jpg',
        inclusions: ['Crispy Chicken Wings', 'Creamy Cheese Pasta', 'Macaroni and Cheese Bites', 'Sesame Chicken Bites', 'Homemade Fried Chicken Tenders', 'Savory Pork Delights']
    },
    { 
        name: 'PACKAGE 2 (10-Pax)', 
        stars: 2, 
        category: 'Kids Party', 
        price: 120, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/kids party2.jpg',
        inclusions: ['Chicken Cordon Bleu Bites', 'Cheesy Pasta Delight', 'Sweetened Pork Tenderloin', 'Noodles with Tasty Sauce', 'Mixed Veggies with Corn']
    },
    { 
        name: 'PACKAGE 3 (5-Pax)', 
        stars: 3, 
        category: 'Kids Party', 
        price: 199, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/kids party3.jpg',
        inclusions: ['Homemade Lumpia', 'Beefy Goodness', 'Creamy Squash Soup', 'Spinach Fries', 'Classic Spaghetti']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 4, 
        category: 'Kids Party', 
        price: 378, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/kids party4.jpg',
        inclusions: ['Beef with Bell Pepper Stir-Fry', 'Classic Spaghetti with Marinara Sauce', 'Creamy Mac and Cheese', 'Chicken Alfredo Pasta', 'Sautéed Pork with Rice']
    },
    { 
        name: 'PACKAGE 5 (10-Pax)', 
        stars: 5, 
        category: 'Kids Party', 
        price: 475, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/kids party5.jpg',
        inclusions: ['Orange Lemon Lime Chicken Skewers', 'Delicious Shrimp Bites', 'Juicy Burger Steak Sliders', 'Cheesy Chicken Popcorn', 'Mixed Veggies with Sesame Chicken']
    },
    { 
        name: 'PACKAGE 1 (5-Pax)', 
        stars: 3, 
        category: 'Cocktail', 
        price: 150, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/cocktail1.webp',
        inclusions: ['Caviar Canapés', 'Smoked Salmon Blinis', 'Prosciutto-Wrapped Melon']
    },
    { 
        name: 'PACKAGE 2 (5-Pax)', 
        stars: 4, 
        category: 'Cocktail', 
        price: 130, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/cocktail2.jpg',
        inclusions: ['Bruschetta', 'Cheese Straws', 'Stuffed Olives']
    },
    { 
        name: 'PACKAGE 3 (5-Pax)', 
        stars: 3, 
        category: 'Cocktail', 
        price: 140, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/cocktail3.webp',
        inclusions: ['Mini Quiches', 'Shrimp Cocktail', 'Deviled Eggs']
    },
    { 
        name: 'PACKAGE 4 (5-Pax)', 
        stars: 5, 
        category: 'Cocktail', 
        price: 150, 
        image: 'http://localhost/PHP MVC/public/assets/images/shop/cocktail4.jpg',
        inclusions: ['Gourmet Sliders', 'Seared Ahi Tuna', 'Bacon-Wrapped Scallops']
    },

    // Add more products here...
];

function renderProducts(products) {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';

    products.forEach(product => {
        const productItem = document.createElement('div');
        productItem.classList.add('card', 'mb-3');
        productItem.innerHTML = `
<a href="#" onclick="performSomething('${product.name}', ${product.price}, ${product.stars}, '${product.image}', '${product.inclusions.join('<br>')}')"> <!-- Join the inclusions array to display as a comma-separated list -->
            <div class="card-body text-center">
                <img src="${product.image}" alt="${product.name}">
                <h5 class="card-title">${product.name}</h5>
                <p class="card-price">₱ ${product.price}</p>
                <div class="rating">
                    ${renderStars(product.stars)}

                </div>
                <div class="cart">
                    <button class="btn btn-primary add-to-cart" data-product="${product.name}" data-price="${product.price}">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </a>
`;

        const productDiv = document.createElement('div');
        productDiv.classList.add('product-item'); 
        productDiv.appendChild(productItem);

        productList.appendChild(productDiv);
    });
}

// Function to render stars dynamically based on the number of stars
function renderStars(stars) {
    let starHTML = '';
    for (let i = 1; i <= 5; i++) {
        if (i <= stars) {
            starHTML += '<span class="fa fa-star checked"></span>';
        } else {
            starHTML += '<span class="fa fa-star"></span>';
        }
    }
    return starHTML;
}

// Function to perform something when card is clicked
function performSomething(productName, productPrice, productStars, productImage,productInclusion) {
    const overlay = document.getElementById('overlay');
    overlay.style.display = 'block'; 

    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.innerHTML = `
      <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <div class="preview" data-target="p-7">
        <img src="${productImage}" alt="">
        <h3 class="package">${productName}</h3>
        <p class="stock">In Stock</p>
        <div class="ratings">
                ${renderStars(productStars)}
                <span class="review">${productStars} Review</span>
            </div>
        <div class="p-price">₱ ${productPrice}.00</div> <!-- Changed the price to ${productPrice} -->
        <hr class="hr3">
<p style="position: relative; top: -7px; left: 50px;">INCLUDES: </p>
        <p>${productInclusion} </p>
		<!-- Put the inclusion here in list--->
        <div class="button">
            <div class="num-order">
                <span class="minus">-</span>
                <span class="num">1</span>
                <span class="plus">+</span>
            </div>
			<button class="add-to-cart" onclick="addToCart('${productName}', ${productPrice})">Add to Cart<i class="fa fa-shopping-cart"></i></button>
            <button class="fav" onclick="addToFav('${productName}')"><i class="fa fa-heart"></i></button>
        </div>
        <hr class="hr5"></hr>
        <div class="c-tag">
            <span class="category">Category:</span>
            <span class="veg">Vegetables</span>
        </div>
        <div class="t-tag">
            <span class="tag">Tag:</span>
            <span class="tags">Vegetable, Healthy</span>
        </div>
    </div>
</div>

    `;
    document.body.appendChild(popup);
    addQuantityButtonListeners();
}


// Function to filter products based on selected criteria
function filterProducts() {
    const starsFilter = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(checkbox => parseInt(checkbox.value));
    const categoryFilter = document.querySelector('input[name="category"]:checked') ? document.querySelector('input[name="category"]:checked').value : '';
    const priceSlider = document.getElementById('price-slider');
    const priceMin = parseFloat(priceSlider.min);
    const priceMax = parseFloat(priceSlider.max);

    let filteredProducts = products.filter(product => {
        return (starsFilter.length === 0 || starsFilter.includes(product.stars)) &&
               (!categoryFilter || product.category === categoryFilter) &&
               (product.price <= priceSlider.value);
    });

    renderProducts(filteredProducts);
    updatePriceRange(); 

}
function closePopup() {
const overlay = document.getElementById('overlay');
    overlay.style.display = 'none'; 

    const popup = document.querySelector('.popup');
    popup.remove();
}

function addToCart(productName, productPrice) {
    // Add your logic for adding the product to the cart here
    alert(`${productName} added to cart! Price: ₱${productPrice}`);
    closePopup();
}
function addToFav(productName) {
    // Add your logic for adding the product to the cart here
    alert(`${productName} added to Favorites!`);
    closePopup();
}

function addQuantityButtonListeners() {
    document.querySelectorAll('.preview .num-order .plus').forEach(plusBtn => {
        plusBtn.addEventListener('click', () => {
            let numSpan = plusBtn.parentElement.querySelector('.num');
            let num = parseInt(numSpan.textContent);
            numSpan.textContent = num + 1;
        });
    });

    document.querySelectorAll('.preview .num-order .minus').forEach(minusBtn => {
        minusBtn.addEventListener('click', () => {
            let numSpan = minusBtn.parentElement.querySelector('.num');
            let num = parseInt(numSpan.textContent);
            if (num > 1) {
                numSpan.textContent = num - 1;
            }
        });
    });
}




// Function to update price range display
function updatePriceRange() {
    const priceSlider = document.getElementById('price-slider');
    const priceMin = parseFloat(priceSlider.min);
    const priceMax = parseFloat(priceSlider.max);
    const selectedPrice = parseFloat(priceSlider.value);

    document.getElementById('price-values').innerText = `₱${priceMin} - ₱${selectedPrice}`;
}



renderProducts(products);
filterProducts();

// Event listeners for filter controls
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', filterProducts);
});
document.querySelectorAll('input[name="category"]').forEach(radio => {
    radio.addEventListener('change', filterProducts);
});

document.getElementById('price-slider').addEventListener('input', filterProducts);
