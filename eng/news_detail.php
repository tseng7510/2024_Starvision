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
              <span itemprop="name"><a href="news.php">News</a></span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Pursue Extreme Efficiency and Absolute Accuracy</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="newsDetail">
          <div class="pageContent">
            <div class="container">

              <aside class="sideBox">
                <div class="out">
                  <div class="changePage wow fadeInUp" data-wow-delay="0.2s">
                    <a class="prev arrows" href="news_detail.php">PREVIOUS</a>
                    <a class="next arrows" href="news_detail.php">NEXT</a>
                  </div>
                  <time class="wow fadeInUp" data-wow-delay="0s">04 / 11 / 2023</time>
                  <h1 class="title wow fadeInUp" data-wow-delay="0.2s">Pursue Extreme Efficiency and Absolute Accuracy</h1>
                </div>

                <a href="news.php" class="backList wow fadeInUp" data-wow-delay="0.4s">Back To List</a>
              </aside>

              <div class="contentBox">
                <div class="pic wow fadeInUp" data-wow-delay="0.4s"><img src="../images/in/news.jpg" alt="">
                </div><br />
                <div class="editor detail wow fadeInUp" data-wow-delay="0.2s">Pursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute Accuracy
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