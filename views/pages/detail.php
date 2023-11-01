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
  <link rel="stylesheet" href="../../styles/detail.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css?fbclid=IwAR2Leèv1ZTLJsKEsnl4HGMf5XRZuPqx5yOFnFaOFbVgCiCeU87S0up6ptKU
">
  <title>Lab1</title>
</head>

<body>
  <div class="container">
    <?php include '../header.php'; ?>

    <div class="container">
      <div class="breadcrums">
        <a href="<?php echo $baseUrl; ?>home.php">Home</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M6 15L11 10L6 5L7 3L14 10L7 17L6 15Z" fill="black" />
        </svg>
        <a href="<?php echo $baseUrl; ?>shop.php">Shop</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M6 15L11 10L6 5L7 3L14 10L7 17L6 15Z" fill="black" />
        </svg>
        <div class="vertical-line"></div>
        <span>Asgaard sofa</span>
      </div>

      <div class="product-detail-container">
        <div class="product-imgs">
          <div class="images-container">
            <img src="../../assets/imgs/detail/1-1.png" alt="">
            <img src="../../assets/imgs/detail/2-2.png" alt="">
            <img src="../../assets/imgs/detail/3-1.png" alt="">
            <img src="../../assets/imgs/detail/4-2.png" alt="">
          </div>
          <div class="img-preview">
            <img src="../../assets/imgs/detail/main.png" alt="">
          </div>
          <div class="product-detail">
            <h1>Asgaard sofa</h1>
            <p class="price">Rs. 250,000.00</p>
            <div class="stars">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10 1L13 7L19 7.75L14.88 12.37L16 19L10 16L4 19L5.13 12.37L1 7.75L7 7L10 1Z"
                    fill="#FFC700" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10 1L13 7L19 7.75L14.88 12.37L16 19L10 16L4 19L5.13 12.37L1 7.75L7 7L10 1Z"
                    fill="#FFC700" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10 1L13 7L19 7.75L14.88 12.37L16 19L10 16L4 19L5.13 12.37L1 7.75L7 7L10 1Z"
                    fill="#FFC700" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10 1L13 7L19 7.75L14.88 12.37L16 19L10 16L4 19L5.13 12.37L1 7.75L7 7L10 1Z"
                    fill="#FFC700" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M7.1563 7.0125L0.800049 7.9375L5.40005 12.4188L4.31255 18.75L10 15.7625V1.25L7.1563 7.0125Z"
                    fill="#FFC700" />
                </svg>
              </div>
              <div class="vertical-line"></div>
              <span>5 Customer Review</span>
            </div>
            <div class="stars"></div>
            <p>Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero
              with a well-balanced audio which boasts a clear midrange and extended highs for a sound.</p>
            <div class="size">
              <span>Size</span>
              <div>
                <span class="active-size">L</span>
                <span>XL</span>
                <span>XS</span>
              </div>
            </div>
            <div class="color">
              <span>Color</span>
              <div>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="select-quantity">
              <div class="quantity">
                <span>-</span>
                <span>1</span>
                <span>+</span>
              </div>
              <button class="add-to-cart">Add to cart</button>
              <button class="compare">+ Compare</button>
            </div>
            <span class="horizontal-line"></span>
            <div class="sub-detail">
              <div class="tag-name">
                <span>SKU</span>
                <span>Category</span>
                <span>Tags</span>
                <span>Share</span>
              </div>
              <div class="semi-colon">
                <span>:</span>
                <span>:</span>
                <span>:</span>
                <span>:</span>
              </div>
              <div class="tag-value">
                <span>SS001</span>
                <span>Sofas</span>
                <span>Sofa, Chair, Home, Shop</span>
                <span><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-linkedin"></i><i
                    class="fa-brands fa-twitter"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="product-desc">
          <div class="desc-container">
            <div>
              <span class="desc-active">Description</span>
              <span>Additional Information</span>
              <span>Reviews [5]</span>
            </div>
            <p>Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the
              unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>
            <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the
              bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a
              well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate
              and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while
              the guitar-influenced leather strap enables easy and stylish travel.</p>
            <div>
              <img src="../../assets/imgs/detail/desc-1.png" alt="">
              <img src="../../assets/imgs/detail/desc-2.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="content-product detail">
        <h2 class="menu-heading">Related Products</h2>
        <div class='product-list'>
          <div class='row'>
            <div class='content-card'>
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
              <div class="add-to-cart-layer">
                <button>Add to cart</button>
                <div class="icons-btn">
                  <span><i class="fa-solid fa-share-nodes"></i>Share</span>
                  <span><i class="fa-solid fa-code-compare"></i>Compare</span>
                  <span><i class="fa-solid fa-thumbs-up"></i>Like</span>
                </div>
              </div>
            </div>
            <div class='content-card'>
              <img src="../../assets/imgs/image 2.svg" alt="item2">
              <div class='nametag'>
                <h2>Leviosa</h2>
                <p>Stylish Cafe Chair</p>
              </div>
              <div class='pricetag'>
                <h3>Rp 2.500.000</h3>
              </div>
              <div class="add-to-cart-layer">
                <button>Add to cart</button>
                <div class="icons-btn">
                  <span><i class="fa-solid fa-share-nodes"></i>Share</span>
                  <span><i class="fa-solid fa-code-compare"></i>Compare</span>
                  <span><i class="fa-solid fa-thumbs-up"></i>Like</span>
                </div>
              </div>
            </div>
            <div class='content-card'>
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
              <div class="add-to-cart-layer">
                <button>Add to cart</button>
                <div class="icons-btn">
                  <span><i class="fa-solid fa-share-nodes"></i>Share</span>
                  <span><i class="fa-solid fa-code-compare"></i>Compare</span>
                  <span><i class="fa-solid fa-thumbs-up"></i>Like</span>
                </div>
              </div>
            </div>
            <div class='content-card'>
              <img src="../../assets/imgs/image 4.svg" alt="item4">
              <div class='new'>New</div>
              <div class='nametag'>
                <h2>Respira</h2>
                <p id='nametaglast'>Outdoor bar table and stool</p>
              </div>
              <div class='pricetag'>
                <h3>Rp 500.000</h3>
              </div>
              <div class="add-to-cart-layer">
                <button>Add to cart</button>
                <div class="icons-btn">
                  <span><i class="fa-solid fa-share-nodes"></i>Share</span>
                  <span><i class="fa-solid fa-code-compare"></i>Compare</span>
                  <span><i class="fa-solid fa-thumbs-up"></i>Like</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="content-product-btn">Show more</button>
      </div>
    </div>

    <?php include '../footer.php'; ?>
  </div>
</body>

</html>