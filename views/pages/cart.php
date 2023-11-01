<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

$host = $_SERVER['HTTP_HOST'];

$scriptPath = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);

$baseUrl = $protocol . $host . $scriptPath . '/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/home.css">
    <link rel="stylesheet" href="../../styles/shop.css">
    <link rel="stylesheet" href="../../styles/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css?fbclid=IwAR2Leèv1ZTLJsKEsnl4HGMf5XRZuPqx5yOFnFaOFbVgCiCeU87S0up6ptKU
">
    <title>Lab1</title>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include '../header.php'; ?>
        <!-- EndOfHeader -->
        <!-- Banner -->
        <div class="banner-container">
            <div class="banner-content">
                <h1>Cart</h1>
                <p>Home > Cart</p>
            </div>
        </div>
        <!-- EndofBanner -->

        <!-- Content -->
        <div class='main-content'>
            <div class='content-container'>
                <div class="info-container">
                    <table>
                        <thead>
                            <tr>
                                <td></td>
                                <td>Product</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Subtotal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img height="100px" width="100px" src="../../assets/imgs/Asgaard-sofa-5.png" alt="">
                                </td>
                                <td>
                                    <p>Asgaard sofa</p>
                                </td>
                                <td>
                                    <p>Rs. 250,000.00</p>
                                </td>
                                <td><input type="number" value=1></td>
                                <td>
                                    <p>Rs. 250,000.00</p>
                                </td>
                                <td><i class="fa-solid fa-trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-detail">
                    <div class="card-detail-content">
                        <p class="card-total">Card Totals</p>
                        <div class="subtotal-container">
                            <p class="p-title">Subtotal</p>
                            <p class="subtotal-price">Rs. 250,000.00</p>
                        </div>
                        <div class="total-container">
                            <p class="p-title">Total</p>
                            <p class="total-price">Rs. 250,000.00</p>
                        </div>
                        <a href="<?php echo $baseUrl; ?>checkout.php">Check out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- EndofContent -->

        <!-- CustomerServiceBanner -->
        <div class='servicecontainer'>
            <div class='service-content'>
                <img src="../../assets/imgs/Group.svg" alt="Cup" id='cup'>
                <div class='main'>
                    <h2>High Quality</h2>
                    <h3>crafted from top materials</h3>
                </div>
            </div>
            <div class='service-content'>
                <img src="../../assets/imgs/guarantee.svg" alt="tick">
                <div class='main'>
                    <h2>Warranty Protection</h2>
                    <h3>Over 2 years</h3>
                </div>
            </div>
            <div class='service-content'>
                <img src="../../assets/imgs/Vector.svg" alt="Shipping">
                <div class='main'>
                    <h2>Free Shipping</h2>
                    <h3>Order over 150 $</h3>
                </div>
            </div>
            <div class='service-content'>
                <img src="../../assets/imgs/customer-support.svg" alt="support">
                <div class='main'>
                    <h2>24 / 7 Support</h2>
                    <h3>Dedicated support</h3>
                </div>
            </div>
        </div>
        <!-- Footer  -->
        <?php include '../footer.php'; ?>
    </div>
</body>

</html>