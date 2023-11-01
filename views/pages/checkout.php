<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/home.css">
    <link rel="stylesheet" href="../../styles/shop.css">
    <link rel="stylesheet" href="../../styles/servicebanner.css">
    <link rel="stylesheet" href="../../styles/checkout.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <title>Checkout</title>
</head>
<body>
    <div class='container'>
    <!-- Header -->
    <?php include '../header.php'; ?>
    <!-- EndOfHeader -->
    <!-- Banner -->
    <div class="banner-container">
            <div class="banner-content">
            <h1>Checkout</h1>
            <p>Home > Checkout</p>
            </div>
        </div>
        <!-- EndofBanner -->

    <!-- Content -->
    <div class='main-checkout'>
        <!-- CustomerInfo -->
        <div class='billing-details'>
            <h1>Billing details</h1>
            <div class='nameinfo'>
                <div class='name' id='First'>
                    <h3>First Name</h3>
                    <input type="text">
                </div>
                <div class='name' >
                    <h3>Last Name</h3>
                    <input type="text">
                </div>
            </div>
            <div class='row'>
                <h3>Company Name (Optional)</h3>
                <input type="text">
            </div>
            <div class='row'>
                <h3>Country / Region</h3>
                <input list="country" name="country" placeholder="Sri Lanka">
                <datalist id="country">
                    <option value="Vietnam">
                    <option value="Sri Lanka">
                    <option value="US">
                    <option value="Thailand">
                    <option value="Laos">
                </datalist>
            </div>
            <div class='row'>
                <h3>Street address</h3>
                <input type="text">
            </div>
            <div class='row'>
                <h3>Town / City</h3>
                <input type="text">
            </div>
            <div class='row'>
                <h3>Province</h3>
                <input list="city" name="city" placeholder="Wester Province">
                <datalist id="city">
                    <option value="Western Province">
                    <option value="Southern Province">
                    <option value="Eastern Province">
                </datalist>
            </div>
            <div class='row'>
                <h3>ZIP code</h3>
                <input type="text">
            </div>
            <div class='row'>
                <h3>Phone</h3>
                <input type="text">
            </div>
            <div class='row'>
                <h3>Email address</h3>
                <input type="text">
            </div>
            <div class='row'>
                <input type="text" id='lastrow' placeholder="Additional information">
            </div>
        </div>
        <!-- EndOfCustomerInfo -->

        <!-- MoneyInfo -->
            <div class='money-details'>
                <div class='money-info'>
                    <div class='product-info'>
                        <div class='product'>
                            <h1>Product</h1>
                            <h3>Asgaard sofa</h3>
                            <h3>Subtotal</h3>
                            <h3>Total</h3>
                        </div>
                        <div class='subtotal'>
                            <h1>Subtotal</h1>
                            <h3>Rs. 250,000.00</h3>
                            <h3>Rs. 250,000.00</h3>
                            <h3 id='finalprice'>Rs. 250,000.00</h3>
                        </div>
                    </div>
                    <div class='policy'>
                        <div class='choice'>
                            <input type="radio">
                            <p class='bank'>Direct Bank Transfer</p>
                            <div class='choice-content notchoose' >
                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                            </div>
                        </div>
                        <div class='choice' id='noblank'>
                            <input type="radio">
                            <p class='bank notchoose' >Direct Bank Transfer</p>
                        </div>
                        <div class='choice'>
                            <input type="radio">
                            <p class='notchoose'>Cash On Delivery</p>
                            <div class='choice-content '>
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <strong>privacy policy</strong>.
                            </div>
                        </div>
                        <button class="place-order">Place Order</button>
                    </div>
                </div>
            </div>
        <!-- EndofMoneyInfo -->
    </div>
    <!-- EndofContent -->


    <!-- CustomerServiceBanner -->
    <?php include '../servicebanner.php'; ?>

    <!-- Footer -->
    <?php include '../footer.php'; ?>
    </div>
</body>
</html>