<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
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
              <span itemprop="name">Exhibition</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <div class="newsList">
          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Exhibition</h1>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">The latest activities, product news and exhibition information from the Starvision Machinery. Explore find out more.</div>
            </div>
          </div>
          <div class="pageContent">
            <div class="container">

              <div class="top">

                <? for ($i = 0; $i < 2; $i++) { ?>
                  <div class="item wow fadeInLeft" data-wow-delay="0s">
                    <a href="exhibition_detail.php">
                      <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                      <div class="info">
                        <time>04 / 11 / 2023</time>
                        <h2 class="title">Pursue Extreme Efficiency and Absolute Accuracy</h2>
                      </div>
                    </a>
                  </div>
                <? } ?>
              </div>
              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInLeft" data-wow-delay="0s">
                    <a href="exhibition_detail.php">
                      <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                      <div class="info">
                        <time>2024 - 01 - 17</time>
                        <h2 class="title">Pursue Extreme Efficiency and Absolute Accuracy</h2>
                      </div>
                    </a>
                  </div>
                <? } ?>

              </div>
            </div>

            <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="container">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>



    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $('.subMenu li').eq(0).addClass('active');
  </script>
</body>

</html>