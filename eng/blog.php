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
        <div class="pic"><img src="../images/in/banner_blog.jpg" alt=""></div>
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
              <span itemprop="name">Blog</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <div class="blogList">
          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Blog</h1>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">Discover helpful resources and tips from Starvision Machinery, made for your shop floor.</div>
            </div>
          </div>
          <div class="pageContent">
            <div class="container">
              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item wow fadeInLeft" data-wow-delay="0s">
                    <a href="blog_detail.php">
                      <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                      <div class="info">
                        <h2 class="title">Pursue Extreme Efficiency and Absolute Accuracy</h2>
                        <div class="description">Integrating dealers feedback and end users demand provides optimum products to reach Starvision’s mission - Focus on the quality and fulfill the needs.</div>
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
    $('.subMenu li').eq(2).addClass('active');
  </script>
</body>

</html>