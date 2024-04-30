<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
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
              <span itemprop="name">Contact</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="contact">
          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Contact Us</h1>
              <div class="subTitle">Find Support</div>
            </div>
          </div>
          <div class="pageContent">
            <div class="container">

              <div class="wordMap">
                <div class="pic wow fadeInUp" data-wow-delay="0s"><img src="../images/in/word_map.svg" alt=""></div>
                <div class="target">
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">North America
                      <ul>
                        <li>Canada</li>
                        <li>USA</li>
                        <li>Mexico</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Europe
                      <ul>
                        <li>France</li>
                        <li>Germany</li>
                        <li>Netherlands</li>
                        <li>United Kingdom</li>
                        <li>Italy</li>
                        <li>Portugal</li>
                        <li>Spain</li>
                        <li>Turkiye</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Asia
                      <ul>
                        <li>Taiwan</li>
                        <li>China</li>
                        <li>Korea</li>
                        <li>Thailand</li>
                        <li>Vietnam</li>
                        <li>India</li>
                        <li>Singapore</li>
                        <li>Malaysia</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>Taiwan<br />Head Office</button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Africa
                      <ul>
                        <li>Morocco</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">South America
                      <ul>
                        <li>Brazil</li>
                        <li>Argentina</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Oceania
                      <ul>
                        <li>Australia</li>
                      </ul>
                    </div>
                  </button>
                </div>
              </div>

              <div class="infoBox wow fadeInUp" data-wow-delay="0s">
                <div class="info">
                  <div class="content">
                    <div class="title">Starvision Machinery Co., Ltd.</div>
                    <ul>
                      <li class="address">No.59, Ln.607, Wuguang Rd, Wuri Dist, Taichung City 414, Taiwan.</li>
                      <li class="tel">TEL : <a href="tel:+886423383342">+886-4-2338 3342</a></li>
                      <li class="fax">FAX : +886-4-2338 3390</li>
                      <li>E-MAIL : <a href="mailto:info@starvision-tech.com">info@starvision-tech.com</a></li>
                    </ul>
                    <a class="more" href="https://maps.app.goo.gl/WkY5Ln6quPufbPgz6" target="_blank">Uur Position</a>
                  </div>
                </div>
                <div class="pic"><a href="https://maps.app.goo.gl/WkY5Ln6quPufbPgz6" target="_blank">
                    <picture>
                      <source srcset="../images/in/map_s.jpg" media="(max-width: 1020px" />
                      <img src="../images/in/map.jpg" alt="" />
                    </picture>
                  </a></div>
              </div>

            </div>

            <div class="blockTitleBox">
              <div class="container">
                <div class="title">Think before you, Be there to solve your problem.</div>
                <div class="description">With decades of experience in the production of Starvision Machinery has become an industry leader not just in terms of performance.</div>
              </div>
            </div>

            <form class="formBox">
              <div class="container">
                <ul>
                  <li class="inputItem wow fadeInUp required" data-wow-delay="0s">
                    <input type="text" class="inputControl" id="name" required>
                    <label for="name">Name</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="company" required>
                    <label for="company">Company Name</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="title" required>
                    <label for="title">Title</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="email" required>
                    <label for="email">Email</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="address" required>
                    <label for="address">Address</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label>Business Nature</label>
                    <div class="itemBox">
                      <ul>
                        <li><input class="check" type="checkbox" name="Checkbox" id="item1" value="item1"><label for="item1">Manufacturer</label></li>
                        <li><input class="check" type="checkbox" name="Checkbox" id="item2" value="item2"><label for="item2">Trading Company</label></li>
                        <li><input class="check" type="checkbox" name="Checkbox" id="item3" value="item3"><label for="item3">End user</label></li>
                      </ul>
                    </div>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="comments">Comments</label>
                    <textarea class="textareaControl" name="comments" id="comments" cols="30" rows="10"></textarea>
                  </li>

                  <li class="inputItem wow fadeInUp required">
                    <label for="password">VerifyCode</label>
                    <input type="password" class="inputControl" id="password" required>
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                </div>
              </div>
            </form>


          </div>
        </div>



    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>

  <script>
    function init() {
      if (window.innerWidth > 1000) {
        $('.wordMap button').off().on('mouseenter', function() {
          $(this).toggleClass('active').siblings().removeClass('active');
          $(this).find('.slide ul').slideToggle('fast');
          $(this).siblings().find('.slide ul').slideUp('fast')
        });
      } else {
        $('.wordMap button').off().on('click', function() {
          $(this).toggleClass('active').siblings().removeClass('active');
          $(this).find('.slide ul').slideToggle('fast');
          $(this).siblings().find('.slide ul').slideUp('fast')
        })
      }
    }
    $(window).on('load resize', init);
  </script>
</body>

</html>