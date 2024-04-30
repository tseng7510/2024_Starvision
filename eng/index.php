<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css" async>
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner">
          <div class="listBox">
            <div class="item">
              <div class="info">
                <div class="title">PURSUE EXCELLENCE.<br />
                  STRIVE TO DO BETTER.
                </div>
                <a href="#" class="more">Learn More</a>
              </div>
              <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
            </div>
            <div class="item">
              <div class="info">
                <div class="title">PURSUE EXCELLENCE.<br />
                  STRIVE TO DO BETTER.
                </div>
                <a href="#" class="more">Learn More</a>
              </div>
              <div class="pic"><img src="../images/index/banner2.jpg" alt=""></div>
            </div>
            <div class="item">
              <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/sOnxxdyr3R0?mute=1&autoplay=1&playlist=sOnxxdyr3R0&controls=0&modestbranding=1&playsinline=1&rel=0&loop=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe></div>
            </div>
          </div>
        </div>


        <section class="productsBox">
          <div class="container">
            <h2 class="unitTitle">Explore Our Products</h2>
            <div class="listBox wow fadeInUp" data-wow-delay="0.2s">

              <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="item">
                  <a href="products.php" class="content">
                    <div class="pic"><img src="../images/index/products.png" alt=""></div>
                    <div class="info">
                      <h2 class="title">FS-Series</h3>
                        <div class="description">The structural design of FS series are processed by the 3D finite element analysis (FEA) which makes sure the optimum ...</div>
                    </div>
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="container">
            <div class="pic"><img src="../images/index/about.jpg" alt=""></div>
            <div class="info">
              <h2 class="title">About STARVISION</h2>
              <div class="description">Inheriting the art of German craftsmanship with assembly experiences of double column machining centers. management team consists of engineers from R&D, Assembly, Quality Assurance and Sales Department.</div>
              <a href="about.php" class="indexMore">Learn More</a>
            </div>
          </div>
        </section>

        <section class="countBox">
          <div class="listBox">
            <div class="item wow fadeInRight" data-wow-delay="0.0s">
              <div class="count count1">
                <span></span>
              </div>
              <div class="title">Years of R&D experiences</div>
            </div>
            <div class="item wow fadeInRight" data-wow-delay="0.2s">
              <div class="count count2">
                <span></span>
              </div>
              <div class="title">Kinds of products</div>
            </div>
            <div class="item wow fadeInRight" data-wow-delay="0.4s">
              <div class="count count3">
                <span></span>
              </div>
              <div class="title">Numbers of worldwide customers</div>
            </div>
          </div>
        </section>

        <section class="introduceBox">
          <div class="container">
            <div class="video wow fadeInLeft" data-wow-delay="0s"><iframe src="https://www.youtube.com/embed/9POQsBHJzpE?mute=1&autoplay=1&playlist=9POQsBHJzpE&controls=0&modestbranding=1&playsinline=1&rel=0" title="YouTube video player" frameborder="0" allowfullscreen></iframe></div>
            <div class="info wow fadeInRight" data-wow-delay="0.2s">
              <h2 class="title">STARVISION 5-Axis machining center-V series</h2>
              <div class="description">Integrating dealers feedback and end users demand provides optimum products to reach Starvision’s mission - Focus on the quality and fulfill the needs.</div>
            </div>
          </div>
        </section>

        <section class="applicationBox">
          <div class="container">
            <div class="info wow fadeInLeft" data-wow-delay="0s">
              <h2 class="title">Application</h2>
              <div class="description">STARVISION assures to offer high quality products and sincere service to be your best choice.<br />
                The following are our main related product applications:</div>
              <a href="about.php" class="indexMore">Learn More</a>
            </div>
            <div class="listBox">
              <div class="pic wow fadeInRight" data-wow-delay="0.2s"><img src="../images/index/application1.jpg" alt=""></div>
              <div class="pic wow fadeInRight" data-wow-delay="0.4s"><img src="../images/index/application2.jpg" alt=""></div>
              <div class="pic wow fadeInRight" data-wow-delay="0.6s"><img src="../images/index/application3.jpg" alt=""></div>
            </div>
          </div>
        </section>

        <section class="newsBox">
          <div class="container">
            <h2 class="unitTitle wow fadeInUp" data-wow-delay="0s">News & Exhibition</h2>
            <div class="slogan">The latest activities, product news and exhibition information</div>
            <div class="listBox">
              <div class="item wow fadeInUp" data-wow-delay="0.2s" data-size="1x2">
                <div class="info">
                  <div class="tag">Exhibition</div>
                  <div class="title">2023 TIMTOS</div>
                  <div class="description">Date: March 6-11, 2023<br />
                    City: Taipei<br />
                    Country: Taiwan<br />
                    Venue: Taipei Nangang Exhibition Center, Hall 1<br />
                    Booth: J1301</div>
                </div>
                <a href="news.php" class="indexMore">Learn More</a>
              </div>
              <div class="item wow fadeInUp" data-wow-delay="0.4s" data-size="1x1">
                <div class="tag">News</div>
                <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                <div class="title">Pursue Extreme Efficiency and Absolute Accuracy</div>
              </div>
              <div class="item wow fadeInUp" data-wow-delay="0.6s" data-size="1x1">
                <div class="tag">Blog</div>
                <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                <div class="title">BCM Sliding Double Column Moving-Crossrail Machining Center</div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.banner .listBox').slick({
        draggable: true,
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
      })


      $('.productsBox .container').append('<div class="controlBox"></div>')
      $('.productsBox .listBox').slick({
        slidesToShow: 1,
        arrows: true,
        dots: false,
        infinite: true,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
      })

      $('.serviceBox .listBox').slick({
        slidesToShow: 2,
        arrows: true,
        dots: false,
        infinite: true,
        appendArrows: $('.serviceBox'),
        prevArrow: '<div class="prev"><button class="slick-prev" aria-label="Previous" type="button" ></button></div>',
        nextArrow: '<div class="next"><button class="slick-next" aria-label="Next" type="button" ></button></div>',
        responsive: [{
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
          }
        }, ]
      })
    })


    const count11 = document.querySelector('.countBox .count1 span');
    const count12 = document.querySelector('.countBox .count2 span');
    const count13 = document.querySelector('.countBox .count3 span');
    const check = document.querySelector('.countBox');
    const options = {
      root: null,
      rootMargin: '0px 0px 0px 0px',
      threshold: 0.2,
    };
    const callback = (entries, observer) => {
      if (entries[0].isIntersecting && !check.classList.contains('active')) {
        check.classList.add('active');
        setTimeout(() => {
          animateNumber(count11, 0, 20, 2000);
          animateNumber(count12, 0, 300, 2000);
          animateNumber(count13, 0, 200, 2000);
        }, 500);
      }
    };

    const observer = new IntersectionObserver(callback, options);
    observer.observe(check);

    const serviceBox = document.querySelector('.serviceBox');

    $('.serviceBox .listBox').on('init', function(event, slick, currentSlide, nextSlide) {

      const prevArrow = document.querySelector('.serviceBox .prev');
      const nextArrow = document.querySelector('.serviceBox .next');

      function hoverFn() {
        let serviceInfo = serviceBox.getBoundingClientRect();
        let hoverBlock = serviceBox.offsetWidth / 4;
        let leftBlock = hoverBlock < 100 ? 100 : hoverBlock;
        let rightBlock = hoverBlock < 100 ? window.outerWidth - 100 : window.outerWidth - hoverBlock;
        return [leftBlock, rightBlock, serviceInfo.top, serviceInfo.height];
      }
      hoverFn()

      function checkHover(e) {
        const x = event.clientX;
        const y = event.clientY;

        if (event.clientX > 0 && event.clientX < hoverFn()[0] && event.clientY > hoverFn()[2] && event.clientY < hoverFn()[2] + hoverFn()[3]) {

          prevArrow.style.transform = `translate3d(${x}px, ${y}px, 0)`;
          setTimeout(() => {
            prevArrow.classList.add('active');
          }, 300)

        } else {
          setTimeout(() => {
            prevArrow?.classList.remove('active');
          })
        }

        if (event.clientX > hoverFn()[1] && event.clientX < window.outerWidth && event.clientY > hoverFn()[2] && event.clientY < hoverFn()[2] + hoverFn()[3]) {
          nextArrow.style.transform = `translate3d(${x}px, ${y}px, 0)`;
          setTimeout(() => {
            nextArrow.classList.add('active')
          }, 300)
        } else {
          setTimeout(() => {
            nextArrow?.classList.remove('active');
          }, 300)
        }
      }
      serviceBox.addEventListener('mousemove', (e) => checkHover());
      window.addEventListener('scroll', (e) => checkHover())
    });
  </script>
</body>


</html>