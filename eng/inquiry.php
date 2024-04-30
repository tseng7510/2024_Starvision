<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/inquiry.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_inquiry.jpg" alt=""></div>
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
              <span itemprop="name">Inquiry Cart</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">

        <div class="inquiry">
          <div class="unitTitleBox">
            <div class="container">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Inquiry Cart</h1>
              <div class="description wow fadeInUp" data-wow-delay="0.2s">Your cart is empty, Go to our Products Page to add items.</div>
            </div>
          </div>
          <div class="pageContent">
            <div class="container">

              <div class="inquiryList wow fadeInUp" data-wow-delay="0.2s">
                <div class="listBox">

                  <? for ($i = 0; $i < 6; $i++) { ?>
                    <div class="item">
                      <div class="pic"><img src="../images/index/products.png" alt=""></div>
                      <div class="info">
                        <a href="products_detail.php">
                          <h2 class="title">PC-series</h2>
                          <div class="description">Box Way Type</div>
                        </a>
                        <div class="btnBox">
                          <div class="qtyBox">
                            <button class="btn less"></button>
                            <input type="text" class="qty form-control" value="1">
                            <button class="btn add"></button>
                          </div>
                          <button class="del"></button>
                        </div>
                      </div>
                    </div>
                  <? } ?>

                </div>
              </div>
            </div>


            <div class="blockTitleBox">
              <div class="container">
                <h3 class="title wow fadeInUp" data-wow-delay="0s">Inquiry Form</h3>
                <div class="description wow fadeInUp" data-wow-delay="0.2s">In order to provide you with better service, be sure to enter the correct information, thank you !</div>
              </div>
            </div>

            <form class="formBox">
              <div class="container">
                <ul>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="name" required>
                    <label for="name">Name</label>
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
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="company" required>
                    <label for="company">Company</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="title" required>
                    <label for="title">Title</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="city" required>
                    <label for="address">City</label>
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <input type="text" class="inputControl" id="email" required>
                    <label for="email">Email</label>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <input type="text" class="inputControl" id="address" required>
                    <label for="address">Address</label>
                  </li>
                  <li class="inputItem full wow fadeInUp required">
                    <label for="message">Massage</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem wow fadeInUp required">
                    <label for="password">VerifyCode</label>
                    <input type="password" class="inputControl" id="password" required>
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send" type="button" onclick="javascript:location.href='inquiry_ok.php'">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>


    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>

</body>

</html>