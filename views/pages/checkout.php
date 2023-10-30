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
        <div class='billing-details'>
            <h1>Billing details</h1>
            <div class='row' id='nameinfo'>
                <div class='name' id='a'>
                    <h3>First Name</h3>
                    <input type="text">
                </div>
                <div class='name' >
                    <h3>Last Name</h3>
                    <input type="text">
                </div>
            </div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
            <div class='row'></div>
        </div>
        <div class='money-details'></div>
    </div>

    <!-- EndofContent -->
    <!-- CustomerServiceBanner -->
    <?php include '../servicebanner.php'; ?>

    <!-- Footer -->
    <?php include '../footer.php'; ?>
    </div>
</body>
</html>