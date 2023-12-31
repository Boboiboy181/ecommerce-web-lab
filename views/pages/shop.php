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
    <link rel="stylesheet" href="../../styles/servicebanner.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
                <h1>Shop</h1>
                <p>Home > Shop</p>
            </div>
        </div>
        <!-- EndofBanner -->

        <!-- FunctionBar -->
        <div class="function-container">
            <div class="functionbar-filter">
                <img src="../../assets/imgs/filter.svg" alt="filter" />
                <p>Filter</p>
            </div>
            <div class="functionbar-4dots">
                <img src="../../assets/imgs/4dots.svg" alt="4dots" />
            </div>
            <div class="function-viewlist">
                <img src="../../assets/imgs/viewlist.svg" alt="viewlist" />
            </div>
            <div class="function-showresult">Showing 1–16 of 32 results</div>
            <div class="function-showpagenumber">
                Show
                <input type="text" placeholder="16" />
            </div>
            <div class="function-sortby">
                Sort by
                <input type="text" placeholder="Default" />
            </div>
        </div>
        <!-- Content -->
        <div class='main-content'>
            <div class='content-container'>
                <div class='row'>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 1.svg" alt="item1">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Syltherine</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                                <strike>
                                    <p>Rp 3.500.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 2.svg" alt="item2">
                            <div class='nametag'>
                                <h2>Leviosa</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 3.svg" alt="item3">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Lolito</h2>
                                <p>Luxury big sofa</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 7.000.000</h3>
                                <strike>
                                    <p>Rp 14.000.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 4.svg" alt="item4">
                            <div class='new'>New</div>
                            <div class='nametag'>
                                <h2>Respira</h2>
                                <p id='nametaglast'>Outdoor bar table and stool</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 500.000</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='row'>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 1.svg" alt="item1">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Syltherine</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                                <strike>
                                    <p>Rp 3.500.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 2.svg" alt="item2">
                            <div class='nametag'>
                                <h2>Leviosa</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 3.svg" alt="item3">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Lolito</h2>
                                <p>Luxury big sofa</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 7.000.000</h3>
                                <strike>
                                    <p>Rp 14.000.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 4.svg" alt="item4">
                            <div class='new'>New</div>
                            <div class='nametag'>
                                <h2>Respira</h2>
                                <p id='nametaglast'>Outdoor bar table and stool</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 500.000</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='row'>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 1.svg" alt="item1">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Syltherine</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                                <strike>
                                    <p>Rp 3.500.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 2.svg" alt="item2">
                            <div class='nametag'>
                                <h2>Leviosa</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 3.svg" alt="item3">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Lolito</h2>
                                <p>Luxury big sofa</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 7.000.000</h3>
                                <strike>
                                    <p>Rp 14.000.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 4.svg" alt="item4">
                            <div class='new'>New</div>
                            <div class='nametag'>
                                <h2>Respira</h2>
                                <p id='nametaglast'>Outdoor bar table and stool</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 500.000</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='row'>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 1.svg" alt="item1">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Syltherine</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                                <strike>
                                    <p>Rp 3.500.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 2.svg" alt="item2">
                            <div class='nametag'>
                                <h2>Leviosa</h2>
                                <p>Stylish Cafe Chair</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 2.500.000</h3>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 3.svg" alt="item3">
                            <div class='saleoff'>-30%</div>
                            <div class='nametag'>
                                <h2>Lolito</h2>
                                <p>Luxury big sofa</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 7.000.000</h3>
                                <strike>
                                    <p>Rp 14.000.000</p>
                                </strike>
                            </div>
                        </a>
                    </div>
                    <div class='content-card'>
                        <a href="<?php echo $baseUrl; ?>detail.php">
                            <img src="../../assets/imgs/image 4.svg" alt="item4">
                            <div class='new'>New</div>
                            <div class='nametag'>
                                <h2>Respira</h2>
                                <p id='nametaglast'>Outdoor bar table and stool</p>
                            </div>
                            <div class='pricetag'>
                                <h3>Rp 500.000</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='pagenumber'>
                    <button class='pagebutton' id='button1'>1</button>
                    <button class='pagebutton'>2</button>
                    <button class='pagebutton'>3</button>
                    <button class='pagebutton' id='buttonNext'>Next</button>
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