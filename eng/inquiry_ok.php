<!doctype html>
<html lang="zh">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage okPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_inquiry.jpg" alt=""></div>
      </div>

      <div class="mainBox">

        <div class="inquiry">
          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">THANK YOU FOR YOUR INQUIRY</h1>
            </div>
          </div>
          <div class="pageContent">
            <div class="container">
              <div class="info wow fadeInUp" data-wow-delay="0.2s">
                <div class=" subTitle">INQUIRY HAS BEEN SUCCESSFUL!</div>
                <div class="description">Once we receive your inquiry, we will contact you as soon as possible.</div>
              </div>

            </div>

          </div>
        </div>
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
              <span itemprop="name">Inquiry</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>

</body>



</html>