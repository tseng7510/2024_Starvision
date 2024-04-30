<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsFilterBox">
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
              <span itemprop="name"><a href="products.php">Products Filter</a></span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="productsFilter">
          <div class="pageContent">
            <div class="container">


              <aside class="sideBox">
                <button class="titleBtn">Product Finder<span>All can be checked</span></button>
                <form>
                  <div class="conBox">
                    <ul class="firstLayer">
                      <li><button type="button">5-Axis</button>

                        <div class="itemBox">
                          <ul>
                            <li><input class="check" type="checkbox" name="Checkbox" id="v"><label for="v">V</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ur"><label for="ur">UR</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="u"><label for="u">U</label></li>
                          </ul>
                        </div>
                      </li>
                      <li><button type="button">Beam and Column Moving Type</button>
                        <div class="itemBox">
                          <ul>
                            <li><input class="check" type="checkbox" name="Checkbox" id="bcm"><label for="bcm">BCM</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="cm"><label for="cm">CM</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="sbm"><label for="sbm">SBM</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="g"><label for="g">G</label></li>
                          </ul>
                        </div>
                      </li>
                      <li><button type="button">3-Axis</button>
                        <div class="itemBox">
                          <ul>
                            <li><input class="check" type="checkbox" name="Checkbox" id="dx"><label for="dx">DX</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="lg"><label for="lg">LG</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="fs"><label for="fs">FS</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="pc"><label for="pc">PC</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="fg"><label for="fg">FG</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ls"><label for="ls">LS</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="dh"><label for="dh">DH</label></li>
                          </ul>
                          <div class="item">
                            <div class="title">Box Way Type</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemfs"><label for="itemfs">FS</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itempc"><label for="itempc">PC</label></li>
                            </ul>
                          </div>
                          <div class="item">
                            <div class="title">Linear Guideway Type</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemdx"><label for="itemdx">DX</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemlg"><label for="itemlg">LG</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemfg"><label for="itemfg">FG</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemls"><label for="itemls">LS</label></li>
                            </ul>
                          </div>
                          <div class="item">
                            <div class="title">Compact Type</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemdh"><label for="itemdh">DH</label></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="millingHeads"><button type="button">Milling Heads</button>
                        <div class="itemBox">
                          <ul>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ac5"><label for="ac5">AC 5</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ac2"><label for="ac2">AC 2</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ac300"><label for="ac300">AC300</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="ac500"><label for="ac500">AC500</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mc5"><label for="mc5">MC 5</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mc2"><label for="mc2">MC 2</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mc300"><label for="mc300">MC300</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mc500"><label for="mc500">MC500</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mcb480"><label for="mcb480">MCB480</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mh5"><label for="mh5">MH5</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mhk2"><label for="mhk2">MHK2</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mh2"><label for="mh2">MH2</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mh300"><label for="mh300">MH300</label></li>
                            <li><input class="check" type="checkbox" name="Checkbox" id="mh500"><label for="mh500">MH500</label></li>
                          </ul>
                          <div class="item">
                            <div class="title">Automatic Clamping</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemac5"><label for="itemac5">AC 5</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemac2"><label for="itemac2">AC 2</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemac300"><label for="itemac300">AC300</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemac500"><label for="itemac500">AC500</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemacb480"><label for="itemacb480">ACB480</label></li>
                            </ul>
                          </div>
                          <div class="item">
                            <div class="title">Automatic Indexing & Manual Clamping</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmc5"><label for="itemmc5">MC 5</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmc2"><label for="itemmc2">MC 2</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmc300"><label for="itemmc300">MC300</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmc500"><label for="itemmc500">MC500</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmcb480"><label for="itemmcb480">MCB480</label></li>
                            </ul>
                          </div>
                          <div class="item">
                            <div class="title">Manual Indexing & Clamping</div>
                            <ul>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmh5"><label for="itemmh5">MH5</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmhk2"><label for="itemmhk2">MHK2</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmh2"><label for="itemmh2">MH2</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmh300"><label for="itemmh300">MH300</label></li>
                              <li><input class="check" type="checkbox" name="Checkbox" id="itemmh500"><label for="itemmh500">MH500</label></li>
                            </ul>
                          </div>
                      </li>
                    </ul>
                    <div class="slideBottom">
                      <div class="item">
                        <div class="subTitle">Workpiece Width Filter</div>
                        <div class="contentOut">
                          <div class="selectBox">
                            <div class="select">
                              <select name="" id="">
                                <option value="">Select</option>
                                <option value="">a</option>
                                <option value="">b</option>
                                <option value="">c</option>
                              </select>
                              <button class="del" type="button"></button>
                            </div>
                          </div>
                          <button class="more" type="button"></button>
                        </div>
                      </div>
                      <div class="item">
                        <div class="subTitle">Itinerary Filter <span>(mm)</span></div>
                        <div class="rangeSlider tableSize XAis">
                          <div class="title">X ais</div>
                          <div class="selectBox">
                            <div class="select">
                              <select name="" id="">
                                <option value="">Select</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="rangeSlider tableSize YAis">
                          <div class="title">Y ais</div>
                          <div class="selectBox">
                            <div class="select">
                              <select name="" id="">
                                <option value="">Select</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="rangeSlider tableSize ZAis">
                          <div class="title">Z ais</div>
                          <div class="selectBox">
                            <div class="select">
                              <select name="" id="">
                                <option value="">Select</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </aside>

              <div class="contentBox">
                <div class="content">
                  <div class="listTitle">Box Way Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 2; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Linear Guideway Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Compact Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Crossbeam Moving Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Column Moving Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Beam and Column Moving Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">5-Axis</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Gantry Type</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>

                <div class="content">
                  <div class="listTitle">Milling Heads</div>
                  <div class="listBox">
                    <? for ($i = 0; $i < 3; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="title">FS-Series</div>
                          <div class="pic"><img src="../images/index/products.png" alt=""></div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
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
  <script type="text/javascript" src="../plugins/ion.rangeSlider-master/js/ion.rangeSlider.js"></script>
  <script>
    $(function() {
      rangeSlider({
        elem: $('.sideBox .XAis'),
        min: 1000,
        max: 10000,
      });
      rangeSlider({
        elem: $('.sideBox .YAis'),
        min: 600,
        max: 1500,
      });
      rangeSlider({
        elem: $('.sideBox .ZAis'),
        min: 600,
        max: 1500,
      });
    });
  </script>
</body>

</html>