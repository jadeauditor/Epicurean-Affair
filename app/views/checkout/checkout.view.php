<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/checkout/chck.css">
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/checkout/Cartstyleguide.css">

</head>
<body>
<?php
include '../app/views/shared/header.view.php';
?>


<div class="checkout-content">



<div class="container">
    <div class="billing-info">
        <h2>Billing Information</h2>
        <form id="billing-form">
            <div class="form-group horizontal">
                <label for="firstname" class="label">First Name</label>
                <input type="text" id="firstname" name="firstname" class="input1" required style="width: 100px">

                <label for="lastname"  class="label">Last Name</label>
                <input type="text" id="lastname" name="lastname" class="input1" required style="width: 100px">

                <label for="companyname" class="label">Company Name</label>
                <input type="text" id="companyname" name="companyname" class="input1" required>
            </div>

            <div class="form-group">
                <label for="streetaddress" class="label">Street Address</label>
                <input type="text" id="streetaddress" name="streetaddress" class="input1" required>
            </div>

            <div class="form-group horizontal">

                <label for="country"  class="label">Province/City:</label>
                <select id="country" name="country" required>
                    <option value="">Select Location</option>
                    <!-- Cebu Province -->
                    <optgroup label="Cebu Province">
                        <option value="Alcantara">Alcantara</option>
                        <option value="Alcoy">Alcoy</option>
                        <option value="Alegria">Alegria</option>
                        <option value="Aloguinsan">Aloguinsan</option>
                        <option value="Argao">Argao</option>
                        <option value="Asturias">Asturias</option>
                        <option value="Badian">Badian</option>
                        <option value="Balamban">Balamban</option>
                        <option value="Bantayan">Bantayan</option>
                        <option value="Barili">Barili</option>
                        <option value="Boljoon">Boljoon</option>
                        <option value="Borbon">Borbon</option>
                        <option value="Carcar">Carcar</option>
                        <option value="Carmen">Carmen</option>
                        <option value="Catmon">Catmon</option>
                        <option value="Compostela">Compostela</option>
                        <option value="Consolacion">Consolacion</option>
                        <option value="Cordova">Cordova</option>
                        <option value="Daanbantayan">Daanbantayan</option>
                        <option value="Dalaguete">Dalaguete</option>
                        <option value="Dumanjug">Dumanjug</option>
                        <option value="Ginatilan">Ginatilan</option>
                        <option value="Liloan">Liloan</option>
                        <option value="Madridejos">Madridejos</option>
                        <option value="Malabuyoc">Malabuyoc</option>
                        <option value="Medellin">Medellin</option>
                        <option value="Minglanilla">Minglanilla</option>
                        <option value="Moalboal">Moalboal</option>
                        <option value="Naga">Naga</option>
                        <option value="Oslob">Oslob</option>
                        <option value="Pilar">Pilar</option>
                        <option value="Pinamungahan">Pinamungahan</option>
                        <option value="Poro">Poro</option>
                        <option value="Ronda">Ronda</option>
                        <option value="Samboan">Samboan</option>
                        <option value="San Fernando">San Fernando</option>
                        <option value="San Francisco">San Francisco</option>
                        <option value="San Remigio">San Remigio</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santander">Santander</option>
                        <option value="Sibonga">Sibonga</option>
                        <option value="Sogod">Sogod</option>
                        <option value="Tabogon">Tabogon</option>
                        <option value="Tabuelan">Tabuelan</option>
                        <option value="Tuburan">Tuburan</option>
                        <option value="Tudela">Tudela</option>
                    </optgroup>
                    <optgroup label="City">
                        <option value="Cebu City">Cebu City</option>
                        <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                        <option value="Mandaue City">Mandaue City</option>
                    </optgroup>
                </select>

                <label for="Barangay"  class="label">Barangay</label>
                <select id="Barangay" name="Barangay" required>
                    <option value="">Select Barangay</option>
                    <optgroup label="Cebu City">
                        <option value="Adlaon">Adlaon</option>
                        <option value="Agsungot">Agsungot</option>
                        <option value="Apas">Apas</option>
                        <option value="Babag">Babag</option>
                        <option value="Bacayan">Bacayan</option>
                        <option value="Banilad">Banilad</option>
                        <option value="Basak Pardo">Basak Pardo</option>
                        <option value="Basak San Nicolas">Basak San Nicolas</option>
                        <option value="Binaliw">Binaliw</option>
                        <option value="Bonbon">Bonbon</option>
                        <option value="Budla-an">Budla-an</option>
                        <option value="Bulacao">Bulacao</option>
                        <option value="Buot-Taup">Buot-Taup</option>
                        <option value="Busay">Busay</option>
                        <option value="Calamba">Calamba</option>
                        <option value="Cambinocot">Cambinocot</option>
                        <option value="Capitol Site">Capitol Site</option>
                        <option value="Carreta">Carreta</option>
                        <option value="Cogon Pardo">Cogon Pardo</option>
                        <option value="Cogon Ramos">Cogon Ramos</option>
                        <option value="Day-as">Day-as</option>
                        <option value="Dinagat">Dinagat</option>
                        <option value="Duljo Fatima">Duljo Fatima</option>
                        <option value="Ermita">Ermita</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guba">Guba</option>
                        <option value="Hipodromo">Hipodromo</option>
                        <option value="Inayawan">Inayawan</option>
                        <option value="Kalubihan">Kalubihan</option>
                        <option value="Kamagayan">Kamagayan</option>
                        <option value="Kasambagan">Kasambagan</option>
                        <option value="Kinasang-an Pardo">Kinasang-an Pardo</option>
                        <option value="Lahug">Lahug</option>
                        <option value="Lorega San Miguel">Lorega San Miguel</option>
                        <option value="Lusaran">Lusaran</option>
                        <option value="Mabini">Mabini</option>
                        <option value="Mabolo">Mabolo</option>
                        <option value="Malubog">Malubog</option>
                        <option value="Mambaling">Mambaling</option>
                        <option value="Pahina Central">Pahina Central</option>
                        <option value="Pahina San Nicolas">Pahina San Nicolas</option>
                        <option value="Pamutan">Pamutan</option>
                        <option value="Parian">Parian</option>
                        <option value="Pit-os">Pit-os</option>
                        <option value="Poblacion Pardo">Poblacion Pardo</option>
                        <option value="Pulangbato">Pulangbato</option>
                        <option value="Punta Princesa">Punta Princesa</option>
                        <option value="Quiot Pardo">Quiot Pardo</option>
                        <option value="Sambag I">Sambag I</option>
                        <option value="Sambag II">Sambag II</option>
                        <option value="San Antonio">San Antonio</option>
                        <option value="San Jose">San Jose</option>
                        <option value="San Nicolas Proper">San Nicolas Proper</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santo Niño">Santo Niño</option>
                        <option value="Sapangdaku">Sapangdaku</option>
                        <option value="Sawang Calero">Sawang Calero</option>
                        <option value="Sinsin">Sinsin</option>
                        <option value="Suba">Suba</option>
                        <option value="Sudlon I">Sudlon I</option>
                        <option value="Sudlon II">Sudlon II</option>
                        <option value="T. Padilla">T. Padilla</option>
                        <option value="Tabunan">Tabunan</option>
                        <option value="Tagbao">Tagbao</option>
                        <option value="Talamban">Talamban</option>
                        <option value="Taptap">Taptap</option>
                        <option value="Tejero">Tejero</option>
                        <option value="Tinago">Tinago</option>
                        <option value="Tisa">Tisa</option>
                        <option value="Toong">Toong</option>
                        <option value="Zapatera">Zapatera</option>
                    </optgroup>
                    <!-- Mandaue City Barangays -->
                    <optgroup label="Mandaue City">
                        <option value="">Select Barangay</option>
                        <option value="Alang-Alang">Alang-Alang</option>
                        <option value="Bakilid">Bakilid</option>
                        <option value="Banilad">Banilad</option>
                        <option value="Basak">Basak</option>
                        <option value="Cabancalan">Cabancalan</option>
                        <option value="Canduman">Canduman</option>
                        <option value="Casili">Casili</option>
                        <option value="Casuntingan">Casuntingan</option>
                        <option value="Centro">Centro</option>
                        <option value="Cubacub">Cubacub</option>
                        <option value="Guizo">Guizo</option>
                        <option value="Jagobiao">Jagobiao</option>
                        <option value="Labogon">Labogon</option>
                        <option value="Looc">Looc</option>
                        <option value="Maguikay">Maguikay</option>
                        <option value="Mantuyong">Mantuyong</option>
                        <option value="Opao">Opao</option>
                        <option value="Paknaan">Paknaan</option>
                        <option value="Pagsabungan">Pagsabungan</option>
                        <option value="Subangdaku">Subangdaku</option>
                        <option value="Tabok">Tabok</option>
                        <option value="Tawason">Tawason</option>
                        <option value="Tingub">Tingub</option>
                        <option value="Tipolo">Tipolo</option>
                        <option value="Umapad">Umapad</option>
                        <!-- Add more barangays here -->
                    </optgroup>
                    <!-- Lapu-Lapu City Barangays -->
                    <optgroup label="Lapu-Lapu City">
                        <option value="Agus">Agus</option>
                        <option value="Babag">Babag</option>
                        <option value="Bankal">Bankal</option>
                        <option value="Buaya">Buaya</option>
                        <option value="Calawisan">Calawisan</option>
                        <option value="Canjulao">Canjulao</option>
                        <option value="Gun-ob">Gun-ob</option>
                        <option value="Ibo">Ibo</option>
                        <option value="Looc">Looc</option>
                        <option value="Mactan">Mactan</option>
                        <option value="Maribago">Maribago</option>
                        <option value="Marigondon">Marigondon</option>
                        <option value="Pajo">Pajo</option>
                        <option value="Pajac">Pajac</option>
                        <option value="Poblacion">Poblacion</option>
                        <option value="Punta Engaño">Punta Engaño</option>
                        <option value="Pusok">Pusok</option>
                        <option value="Sabang">Sabang</option>
                        <option value="Santa Rosa">Santa Rosa</option>
                        <option value="Suba Basbas">Suba Basbas</option>
                        <option value="Talima">Talima</option>
                        <option value="Tingo">Tingo</option>
                        <option value="Tungasan">Tungasan</option>
                        <option value="San Vicente">San Vicente</option>
                        <option value="Sta. Rosa">Sta. Rosa</option>
                        <option value="Basak">Basak</option>
                        <option value="Caubian">Caubian</option>
                        <option value="Caohagan">Caohagan</option>
                        <option value="Kalawisan">Kalawisan</option>
                        <option value="Olango Island">Olango Island</option>

                    </optgroup>
                    <optgroup label="Others">
                        <option value="others">Others</option>
                    </optgroup>
                </select>

                <label for="zipcode"  class="label">Zip Code</label>
                <input type="text" id="zipcode" name="zipcode"  class="input1" required>
            </div>

            <div class="form-group horizontal">
                <label for="email"  class="label">Email</label>
                <input type="email" id="email" name="email" class="input1" required>

                <label for="phone"  class="label">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="input1" required>
            </div>

            <div class="form-group form-group-chckbox">
                <input type="checkbox" id="ship-different" name="ship-different" required>
                <label for="ship-different" class="label-ship">Ship to a different address</label>
            </div>

            <div class="form-group">
                <h2>Billing Information</h2>
                <label for="ordernote"  class="label">Order Notes</label>
                <textarea id="ordernote" name="ordernote"></textarea>
            </div>
        </form>
    </div>

    <div class="order-summary" style="width: 400px; height: 700px">
        <h2>Order Summary</h2>
        <div class="product">
            <img src="<?= ROOT?>/assets/images/checkout/image.png" alt="Product Image">
            <span class="product-name">Product1</span>
            <span class="product-price">$100</span>
        </div>
        <div class="product">
            <img src="<?= ROOT?>/assets/images/checkout/image-2.png" alt="Product Image">
            <span class="product-name">Product2</span>
            <span class="product-price">$70</span>
        </div>
        <div class="product">
            <img src="<?= ROOT?>/assets/images/checkout/image-2.png" alt="Product Image">
            <span class="product-name">Product3</span>
            <span class="product-price">$170</span>
        </div>
        <div class="summary">
            <div class="summary-item">
                <span class="label">Subtotal:</span>
                <span class="value">$100</span>
            </div>
            <div class="summary-item">
                <span class="label">Shipping:</span>
                <span class="value">$10</span>
            </div>
            <div class="summary-item">
                <span class="label">Total:</span>
                <span class="value">$110</span>
            </div>
        </div>
        <div class="payment-method">
            <h3>Payment Method</h3>
            <div class="form-group horizontal1">
                <input type="radio" id="cod" name="payment" value="cod" class="input1">
                <label for="cod">Cash on Delivery</label>

                <input type="radio" id="paypal" name="payment" value="paypal" class="input1">
                <label for="paypal">PayPal</label>

                <input type="radio" id="amazonpay" name="payment" value="Gcash" class="input1">
                <label for="amazonpay">Gcash/label>
            </div>
        </div>

        <button class="place-order" id="buttn">Place Order</button>
    </div>
</div>



<div id="payment-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close">&times;</span>
        <h3>Choose Payment Option</h3>
        <div class="form-group horizontal">

            <button class="payment-option" id="full-payment">Pay Full</button>
            <button class="payment-option1" id="half-payment">Pay Half</button>
        </div>
    </div>
</div>



<div id="details-modal" class="modal1">
    <div class="modal-content1">
        <span class="close1" id="close1">&times;</span>

        <form action="#" class="form">
            <div class="row">
                <div class="col" class="coll" style="flex: 1 1 35%;">

                    <h3>Billing Address <span id="billing-address"></span></h3>
                    <div id="payment-summary">
                        <div class="payment-row">
                            <label for="total-payment">Total Payment:</label>
                            <p type="text" id="total-payment">$200</p>
                        </div>
                        <div class="payment-row">
                            <label for="half-payment">Half Payment:</label>
                            <p type="text" id="half-payment">$100</p>
                        </div>
                    </div>
                    <div class="inputBox">

                        <p>Full Name: <span id="billing-name"></span>
                        </p>
                        <input type="text" id="nme" placeholder="Enter Full Name" class="input" required>
                        <p>Email: <span id="billing-email"></span>

                        </p>
                        <input type="text" id="email" placeholder="Enter email address" class="input" required>

                        <p> Address: <span id="billing-street"> </p>
                        <input type="text" id="address" placeholder="Enter address" class="input" required>

                        <label for="billing-city">City</label>
                        <input type="text" id="billing-city" name="billing-city" class="input" required>

                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="expYear">Province:</label>
                            <input type="text" id="state" placeholder="Enter state" required>

                        </div>
                        <div class="inputBox">
                            <label for="cvv">Zip Code:</label>
                            <input type="number" id="zip" placeholder="1234" required>

                        </div>
                    </div>
                </div>

                <div class="col" id="pyment" style="flex: 1 1 35%;">
                    <h3 class="title">Payment</h3>


                    <div class="inputBox">
                        <label for="name">Card Accepted:</label>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3o0MDpKLLzDrzgV6avtv7WCxPw3kcf0p5DExrvjX1DA&amp;s" alt="credit/debit card image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" alt="paypal image">
                    </div>
                    <div class="inputBox">
                        <label for="cardName">Name On Card:</label>
                        <input type="text" id="cardName" placeholder="Enter card name" required>
                    </div>
                    <div class="inputBox">
                        <label for="cardNum">Credit Card Number:</label>
                        <input type="text" id="cardNum" placeholder="1111-2222-3333-4444" maxlength="19" required>
                    </div>
                    <div class="inputBox">
                        <label for="expMonth">Exp Month:</label>
                        <select name="" id="expMonth">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="expYear">Exp Year:</label>
                            <select name="" id="expYear">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="cvv">CVV:</label>
                            <input type="number" id="cvv" placeholder="1234" required>
                        </div>
                    </div>
                </div>
            </div>
            <button class="proceed-checkout" id="proceed-checkout">Proceed to Checkout</button>
        </form>
    </div>
</div>

</div>




<script>
    document.getElementById('buttn').addEventListener('click', function() {
        document.getElementById('payment-modal').style.display = 'block';
    });

    document.getElementById('full-payment').addEventListener('click', function() {
        document.getElementById('payment-modal').style.display = 'none';
        showPaymentDetails('full');
    });

    document.getElementById('half-payment').addEventListener('click', function() {
        document.getElementById('payment-modal').style.display = 'none';
        showPaymentDetails('half');
    });

    document.getElementById('proceed-checkout').addEventListener('click', function() {
        alert('Successfully Paid');
        document.getElementById('details-modal').style.display = 'none';
    });

    document.getElementById('close').addEventListener('click', function() {
        document.getElementById('payment-modal').style.display = 'none';
    });

    document.getElementById('close1').addEventListener('click', function() {
        document.getElementById('details-modal').style.display = 'none';
    });

    function showPaymentDetails(type) {
        const billingForm = {
            firstname: {value: document.getElementById('nme').value.split(' ')[0] || ''},
            lastname: {value: document.getElementById('nme').value.split(' ')[1] || ''},
            email: {value: document.getElementById('email').value},
            streetaddress: {value: document.getElementById('address').value}
        };
        document.getElementById('billing-name').textContent = `${billingForm.firstname.value} ${billingForm.lastname.value}`;
        document.getElementById('billing-email').textContent = billingForm.email.value;
        document.getElementById('billing-street').textContent = billingForm.streetaddress.value;
        document.getElementById('billing-address').textContent = billingForm.streetaddress.value;

        document.getElementById('details-modal').style.display = 'block';
    }
</script>



<?php
include '../app/views/shared/footer.view.php';
?>


</body>
</html>
