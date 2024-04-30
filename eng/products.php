<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsBox">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_products.jpg" alt=""></div>
      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Products Filter</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <div class="products">

          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Products Filter</h1>
            </div>
          </div>

          <div class="pageContent">
            <div class="container">

              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="item">
                  <a href="products_filter.php">
                    <div class="pic"><img src="../images/in/products_1.jpg" alt=""></div>
                    <div class="title">3-Axis</div>
                  </a>
                </div>
                <div class="item">
                  <a href="products_filter.php">
                    <div class="pic"><img src="../images/in/products_2.jpg" alt=""></div>
                    <div class="title">Beam and Column Moving Type</div>
                  </a>
                </div>
                <div class="item">
                  <a href="products_filter.php">
                    <div class="pic"><img src="../images/in/products_3.jpg" alt=""></div>
                    <div class="title">5-Axis</div>
                  </a>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>