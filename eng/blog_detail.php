<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsDetailPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
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
              <span itemprop="name">Media</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name"><a href="blog.php">Blog</a></span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Hydraulic Press of LCM</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="blogDetail">
          <div class="pageContent">
            <div class="container">

              <div class="contentBox">
                <h1 class="title wow fadeInUp" data-wow-delay="0s">Pursue Extreme Efficiency and Absolute Accuracy</h1>
                <div class="pic wow fadeInUp" data-wow-delay="0.4s"><img src="../images/in/news.jpg" alt="">
                </div>
                <div class="editor description wow fadeInUp" data-wow-delay="0.2s">Pursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute Accuracy
                </div>

                <a href="blog.php" class="backList wow fadeInUp" data-wow-delay="0.4s">Back To List</a>
              </div>

              <div class="sideBox">
                <div class="changePage wow fadeInUp" data-wow-delay="0.2s">
                  <a href="#">
                    <div class="prev arrows">PREVIOUS</div>
                    <h3 class="title">Pursue Extreme Efficiency and Absolute Accuracy</h3>
                  </a>
                  <a href="#">
                    <div class="next arrows">NEXT</div>
                    <h3 class="title">Pursue Extreme Efficiency and Absolute Accuracy</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>



    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>