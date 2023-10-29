<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/home.css">
    <link rel="stylesheet" href="../../styles/shop.css">
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
        <!-- CustomerServiceBanner -->
        <!-- Footer  -->
    <?php include '../footer.php'; ?>
</div>
</body>

</html>
