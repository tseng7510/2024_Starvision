<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper applicationPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="banner">
        <div class="listBox">
          <? for ($i = 0; $i < 9; $i++) { ?>
            <div class="item">
              <div class="pic"><img src="../images/in/application.jpg" alt=""></div>
            </div>
          <? } ?>
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
              <span itemprop="name">Application</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">Automotive</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="application">
          <div class="pageContent">
            <div class="topInfo">
              <div class="container">
                <aside class="sideBox wow fadeInUp" data-wow-delay="0s">
                  <h1 class="title">Application Category</h1>
                  <div class="now"></div>
                  <nav class="menu">
                    <button type="button" data-bg="../images/in/application_bg.png">Aerospace</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Aotomotive</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Die and Mold</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Machining</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Electronic</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Quipment</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Energy</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Rail</button>
                    <button type="button" data-bg="../images/in/application_bg.png">Shipbuilding</button>
                  </nav>
                </aside>

                <div class="contentBox">
                  <? for ($i = 0; $i < 9; $i++) { ?>
                    <div class="content">
                      <div class="bg"><img src="../images/in/application_bg.png" alt=""></div>
                      <h1 class="title">Automotive</h1>
                      <div class="description">Pursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AcExtreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme EPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AcExtreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute AccuracyPursue Extreme Efficiency and Absolute Accuracy</div>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>


            <div class="products">
              <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">Recommended Machine</h2>
              <div class="container">
                <div class="listBox">
                  <? for ($i = 0; $i < 9; $i++) { ?>
                    <div class="item">
                      <a href="products_2.php">
                        <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        <h2 class="title">PC Series</h2>
                      </a>
                    </div>
                  <? } ?>
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
  <link rel="stylesheet" href="../plugins/swiper-master/swiper-bundle.min.css">
  <script src="../plugins/swiper-master/swiper-bundle.min.js"></script>


  <script>
    $(function() {

      $('.banner').append('<div class="controlBox"></div>')
      $('.banner .listBox').slick({
        slidesToShow: 1,
        arrows: false,
        dots: false,
        infinite: true,
        // appendArrows: $('.banner .controlBox'),
        // prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">PREV</button>',
        // nextArrow: '<button class="slick-next" aria-label="Next" type="button">NEXT</button>',
      })

      $('.banner .more').on('click', function() {
        let tt = $('.application .contentBox')[0].getBoundingClientRect().top
        console.log(tt);
        window.scrollTo({
          top: tt - 70,
          behavior: 'smooth',
        });
      });
    })
    $('.application .contentBox .content').eq(0).addClass('active');
    $('.application .now').text($('.application .menu button').eq(0).text());
    $('.application .now').on('click', function() {
      $('.application .menu').slideToggle('fast');
    })
    $('.application .menu button').on('click', function() {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
      $('.application .contentBox .content').eq($(this).index()).addClass('active');
      $('.application .contentBox .content').eq($(this).index()).siblings().removeClass('active');
      if (window.innerWidth < 1000) {
        let text = $(this).text();
        $('.application .menu').slideUp('fast');
        $('.application .now').text(text);
      }
    });
    $('.products .listBox').slick({
      slidesToShow: 3,
      arrows: true,
      dots: false,
      infinite: true,
      appendArrows: $('.products .container'),
      prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
      nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }, ]
    })
  </script>
</body>

</html>