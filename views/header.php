<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

$host = $_SERVER['HTTP_HOST'];

$scriptPath = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);

$baseUrl = $protocol . $host . $scriptPath . '/';
?>

<!-- Header -->
<header class="header-container">
    <div class="header-logo">
        <img src="../../assets/imgs/logo.svg" alt="">
    </div>
    <div class="header-navbar">
        <ul class="header-list">
            <li class="header-item"><a href="<?php echo $baseUrl; ?>home.php" class="header-item-link">Home</a></li>
            <li class="header-item"><a href="<?php echo $baseUrl ?>shop.php" class="header-item-link">Shop</a></li>
            <li class="header-item"><a href="#" class="header-item-link">About</a></li>
            <li class="header-item"><a href="#" class="header-item-link">Contact</a></li>
        </ul>
    </div>
    <div class="header-icon">
        <ul class="header-list">
            <li class="header-item"><img src="../../assets/imgs/mdi_account-alert-outline.svg" alt=""></li>
            <li class="header-item"><img src="../../assets/imgs/akar-icons_search.svg" alt=""></li>
            <li class="header-item"><img src="../../assets/imgs/akar-icons_heart.svg" alt=""></li>
            <li class="header-item"><img src="../../assets/imgs/ant-design_shopping-cart-outlined.svg" alt=""></li>
        </ul>
    </div>
</header>
<!-- End of header -->