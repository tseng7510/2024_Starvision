const setWidth = 1028;
$(function () {
  mobileMenu(setWidth);
  sliderMenu('.language');
  sliderMenu('.menuMember');
});
// table過長時增加卷軸
// $('table').wrap('<div class="tableBox"></div>');
// 單層選單功能
function sliderMenu(elm) {
  $(elm)
    .children('.btn')
    .off()
    .on('click', function () {
      $(this).parent().toggleClass('active');
      $(this).siblings('ul').slideToggle('fast');
      $(elm).siblings('.active').find('ul').slideToggle('fast');
      $(elm).siblings('.active').removeClass('active');
      $('body').removeClass('mobileOpen');
      $('.menuSearch').removeClass('active');
      $('.menuSearch ul').slideUp('fast');
    });
  $(window).on('load resize', function () {
    $(elm).find('ul').removeAttr('style');
    $(elm).removeClass('active');
  });
}

// 電腦版主選單搜尋功能
(function () {
  // 搜尋功能
  $('.menuSearch .btn').on('click', function () {
    $('.menuSearch').siblings('.active').find('ul').slideToggle('fast');
    $('.menuSearch').siblings('.active').removeClass('active');
    $('.menuSearch').toggleClass('active');
    $('body').removeClass('mobileOpen');
    $(this).parent().parent().siblings('.active').find('ul').slideToggle('fast');
    $(this).parent().parent().siblings('.active').removeClass('active');
    $('.language').removeClass('active');
    $('.language ul').slideUp('fast');
  });
  $('.menuSearch .searchClose').on('click', function () {
    $('.menuSearch').removeClass('active');
  });
  $(window).on('load resize', function () {
    $('.menuSearch').removeClass('active');
  });
})();

// 滾動畫面時
window.addEventListener('scroll', function () {
  if ($(window).scrollTop() > 20) {
    $('body').addClass('headFix');
  } else {
    $('body').removeClass('headFix');
  }
});

$(window).on('load scroll', function () {
  if ($(window).scrollTop() > 20) {
    $('body').addClass('headFix');
  } else {
    $('body').removeClass('headFix');
  }
});

// QA風琴功能
function qa(q, a) {
  $(q).on('click', function () {
    var thisQ = $(this);
    var thisP = thisQ.parent();
    if (thisP.is('.active') == true) {
      thisP.toggleClass('active').find(a).slideToggle('fast');
    } else {
      thisP.siblings('.active').removeClass('active').find(a).slideToggle('fast');
      thisP.toggleClass('active').find(a).slideToggle('fast');
    }
  });
}
// 主選單
$('.siteHeader').append('<button type="button" class="mobileBtn"><span>MENU</span></button>');
$('.siteHeader').append('<button type="button" class="closeMenu"></button>');
// $('.menuBox').append('<button type="button" class="backMenu"></button>');
// $('.menuBox').append('<div class="menuTitle"></div>');
$('.wrapper').prepend('<div class="overlay"></div>');

(function menuFn() {
  let nextMenuIn = document.querySelectorAll('.nextMenuBox');
  nextMenuIn.forEach((item) => {
    let tab = item.querySelectorAll('.class button');
    let tabContent = item.querySelectorAll('.listBox .list');
    tabContent[0]?.classList.add('active');
    tab[0]?.parentElement.classList.add('active');

    tab.forEach((list, index) => {
      list.addEventListener('click', function () {
        tab.forEach((other) => {
          other.parentElement.classList.remove('active');
        });
        list.parentElement.classList.add('active');

        tabContent.forEach((other) => {
          other.classList.remove('active');
        });
        tabContent[index]?.classList.add('active');
      });
    });
  });

  nextMenuIn.forEach((item) => {
    let mobileContent = item.querySelectorAll('.class li');
    let siblings = item.querySelectorAll('.listBox .list ul');
    mobileContent.forEach((v, i) => {
      let cloneElem = siblings[i]?.cloneNode(true);
      cloneElem !== undefined ? v.append(cloneElem) : '';
    });
  });

  let resizeFn = () => {
    let nextMenuIn = document.querySelectorAll('.mainMenu .nextMenuBox');
    let tabContent = document.querySelectorAll('.mainMenu .tabContent');
    let menuUl = document.querySelectorAll('.mainMenu ul');
    let menuLl = document.querySelectorAll('.mainMenu li');
    let cleanFn = (item) => {
      item.classList.remove('active');
      item.removeAttribute('style');
    };
    nextMenuIn?.forEach((item) => cleanFn(item));
    tabContent?.forEach((item) => cleanFn(item));
    menuUl?.forEach((item) => cleanFn(item));
    menuLl?.forEach((item) => cleanFn(item));
  };
  window.addEventListener('load', resizeFn);
  window.addEventListener('resize', resizeFn);

  $('.mainMenu li').has('ul').addClass('nextLv');

  $(window).on('load', function () {
    let firstLv = $('.mainMenu .nextLv > button, .mainMenu .nextLv > a').length;
    $('.mainMenu .nextLv > button, .mainMenu .nextLv > a').each(function (i) {
      $(this)
        .off()
        .on('click', function (e) {
          e.preventDefault();
          // let text = $(this).text();
          // $('.menuBox').toggleClass('active');
          // $('.backMenu').show();
          // $('.backMenu').attr('data-index', i);
          // $('.menuTitle').text(text);
          if (window.innerWidth > setWidth) {
            $(this).siblings('.nextMenuBox').toggleClass('active');
            $(this).parent().siblings('li').find('.nextMenuBox').removeClass('active');
          } else {
            $(this).siblings('.nextMenuBox').slideToggle();
            $(this).parent().siblings('li').find('.nextMenuBox').slideUp();
          }
        });
    });

    $('.closeMenu').on('click', function () {
      $('body').removeClass('mobileOpen');
      $('.nextMenuBox').removeClass('active');
      // $('.menuTitle').text('');
      // $('.backMenu').hide();
    });

    // $('.backMenu')
    //   .off()
    //   .on('click', function () {
    //     $('.nextMenuBox')
    //       .eq(parseInt($(this).attr('data-index')))
    //       .removeClass('active');
    //     $('.menuTitle').text('');
    //     $(this).hide();
    //   });

    $('.overlay')
      .off()
      .on('click', function () {
        $('.nextMenuBox').removeClass('active');
        $('body').removeClass('mobileOpen');
        // $('.menuTitle').text('');
      });

    $('.menuLanguage')
      .off()
      .on('click', function () {
        $('.menuLanguage ul').slideToggle();
      });
  });
  let checkMobile = () => {
    windowWidth = window.outerWidth;
    webSearch.removeAttribute('style');
    const observer = new ResizeObserver(function (entries) {
      console.log(entries[0].contentRect.width);
      if (entries[0].contentRect.width <= 767) {
        !webSearchBtn.classList.contains('active') && webSearchBtn.classList.add('active');
        !webSearch.classList.contains('mobile') && webSearch.classList.add('mobile');
        let webSearchTop = document.querySelector('header').offsetHeight;
        webSearch.style.top = `${webSearchTop}px`;
      } else {
        webSearchBtn.classList.contains('active') && webSearchBtn.classList.remove('active');
        webSearch.classList.contains('mobile') && webSearch.classList.remove('mobile');
        let webSearchTop = searchBtnOut?.parentElement.offsetHeight;
        webSearch.style.top = `${webSearchTop}px`;
      }
    });
    observer.observe(siteHeader);
  };
})();

// lazyload
(function () {
  const placeholderSrc = (w, h) => `data:image/svg+xml,%3Csvg xmlns="http:// www.w3.org/2000/svg" viewBox="0 0 ${w} ${h}"%3E%3C/svg%3E`;
  const options = {
    root: null,
    rootMargin: '0px',
    thresholds: 1,
  };

  let observer = new IntersectionObserver((entries) => {
    entries.forEach((img) => {
      if (img.isIntersecting) {
        img.target.src = img.target.dataset.src;
        img.target.classList.add('picAnimated');
        observer.unobserve(img.target);
      }
    });
  }, options);

  document.querySelectorAll('.lazyLoad').forEach((img) => {
    img.src = placeholderSrc(img.dataset.width, img.dataset.height);
    observer.observe(img);
  });
})();

// 偵測物件距離顯示畫面，需要偵測的物件增加.isAnimate
(function () {
  let options = {
    root: null,
    rootMargin: '0px',
    thresholds: 0.5,
  };
  let observer = new IntersectionObserver((entries) => {
    entries.forEach((elm) => {
      if (elm.isIntersecting) {
        elm.target.classList.add('isAnimated');
      } else {
        elm.target.classList.remove('isAnimated');
      }
    });
  }, options);

  document.querySelectorAll('.isAnimate').forEach((elm) => {
    observer.observe(elm);
  });
})();

//  GOTOP
(function () {
  let goTopBtn = document.querySelector('.goTop');

  window.addEventListener('scroll', function () {
    let windowScrollTop = document.documentElement.scrollTop;
    if (windowScrollTop >= 200) {
      goTopBtn.style.cssText = 'opacity:1';
    } else {
      goTopBtn.style.cssText = 'opacity:0';
    }
  });
  goTopBtn.addEventListener('click', function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
})();

// cookie
function parseCookie() {
  var cookieObj = {};
  var cookieAry = document.cookie.split(';');
  var cookie;

  for (var i = 0, l = cookieAry.length; i < l; ++i) {
    cookie = jQuery.trim(cookieAry[i]);
    cookie = cookie.split('=');
    cookieObj[cookie[0]] = cookie[1];
  }

  return cookieObj;
}

function getCookieByName(name) {
  var value = parseCookie()[name];
  if (value) {
    value = decodeURIComponent(value);
  }

  return value;
}
getCookieByName('privacy') === undefined ? (document.cookie = 'privacy=false; max-age=2592000; path=/') : null;

if (getCookieByName('privacy') === 'false') {
  $('.closePrivacy').on('click', function () {
    $('.privacyBox').slideUp(400, function () {
      document.cookie = 'privacy=true; max-age=2592000; path=/';
      $(this).remove();
    });
  });
} else {
  $('.privacyBox').remove();
}

// 手機主選單
function mobileMenu(maxWidth) {
  $(window).on('load resize', function () {
    let windowWidth = $(window).outerWidth();
    if (windowWidth < maxWidth) {
      $('body').addClass('onMobile');
      $('body').removeClass('mobileOpen');
    } else {
      $('body').removeClass('onMobile');
    }
  });

  $('.mobileBtn').on('click', function (event) {
    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
  });

  $('.productsBox .breadcrumb li:nth-child(2), .productsFilterBox .breadcrumb li:nth-child(2), .productsDetailBox .breadcrumb li:nth-child(2)').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
    $('.mainMenu > ul > li').eq(0).find('.nextMenuBox').addClass('active');
  });

  $('.applicationPage .breadcrumb li:nth-child(2)').on('click', function (e) {
    e.preventDefault();

    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
    $('.mainMenu > ul > li').eq(1).find('.nextMenuBox').addClass('active');
  });

  $('.newsPage .breadcrumb li:nth-child(2)').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
    $('.mainMenu > ul > li').eq(2).find('.nextMenuBox').addClass('active');
  });

  $('.aboutPage .breadcrumb li:nth-child(2)').on('click', function (e) {
    e.preventDefault();
    $('body').toggleClass('mobileOpen');
    $('.menuMember.active,.language.active').removeClass('active').find('ul').slideUp();
    $('.menuSearch').removeClass('active');
    $('.mainMenu > ul > li').eq(3).find('.nextMenuBox').addClass('active');
  });
}

// 無限輪播
function sliderUse(elem) {
  let parentBoxWidth;
  let sliderMovePx;
  let request;
  let cloneElem = document.querySelector(elem).parentNode.innerHTML;
  document.querySelector(elem).insertAdjacentHTML('afterEnd', cloneElem);
  document.querySelector(elem).insertAdjacentHTML('afterEnd', cloneElem);
  $(window).on('load resize', () => {
    parentBoxWidth = document.querySelector(elem).offsetWidth;
    sliderMovePx = 0;
    cancelAnimationFrame(request);
    if (window.innerWidth < parentBoxWidth * 2) {
      requestAnimationFrame(animation);
    }
  });

  function animation() {
    sliderMovePx++;
    if (sliderMovePx < parentBoxWidth) {
      $(elem).css('transform', `translateX(-${sliderMovePx}px`);
      request = requestAnimationFrame(animation);
    } else {
      sliderMovePx = 0;
      request = requestAnimationFrame(animation);
    }
  }
}

// 滾動漂浮
// $(window).on('load resize', function () {
//   $('.acBoxDown').removeAttr('style');
//   $('.acBoxUp').removeAttr('style');

//   $(window)
//     .off()
//     .on('scroll', function () {
//       let windowWidth = $(window).outerWidth();
//       let windowHeight = $(window).outerHeight();
//       let windowScrollTop = document.documentElement.scrollTop;
//       if (windowWidth > 767) {
//         //   let bg_use = $('.bgUse');
//         //   let bg_use_h = ((windowScrollTop - 100) / $('.mainBox').height()) * 100;
//         //   if (windowScrollTop > 0) {
//         //     gsap.to(bg_use, 1, {
//         //       'background-position': '0 ' + bg_use_h + '%',
//         //     });
//         //   } else {
//         //     gsap.to(bg_use, 1, {
//         //       'background-position': '0 ' + '0' + '%',
//         //     });
//         //   }

//         $('.acBoxDown').each(function () {
//           let box_t = $(this).offset().top;
//           // let ac_move = $(this).find('.acMove');
//           let ac_move = $(this);
//           if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
//             gsap.to(ac_move, 1, {
//               y: (windowScrollTop + windowHeight / 3 - box_t) / 10,
//             });
//           }
//         });

//         $('.acBoxUp').each(function () {
//           let box_t = $(this).offset().top;
//           // let ac_move = $(this).find('.acMove');
//           let ac_move = $(this);
//           if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
//             gsap.to(ac_move, 1, {
//               y: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
//             });
//           }
//         });

//         $('.acBoxLeft').each(function () {
//           let box_t = $(this).offset().top;
//           // let ac_move = $(this).find('.acMove');
//           let ac_move = $(this);
//           if (windowScrollTop + windowHeight / 3 > box_t && windowWidth > 800) {
//             gsap.to(ac_move, 1, {
//               x: -(windowScrollTop + windowHeight / 3 - box_t) / 10,
//             });
//           }
//         });
//       } else {
//         $('.acBoxUp').attr('style', '');
//         $('.acBoxDown').attr('style', '');
//       }
//     });
// });

// 跟隨滑鼠
$.fn.parallax = function (resistance, mouse) {
  $el = $(this);
  TweenLite.to($el, 0.2, {
    x: -((mouse.clientX - window.innerWidth / 2) / resistance),
    y: -((mouse.clientY - window.innerHeight / 2) / resistance),
  });
};

// 倒數用
function animateNumber(element, start, stop, duration, dot) {
  let startTime = null;
  const isCountdown = start > stop;
  let dotCheck = dot !== undefined ? dot : true;

  function numberWithCommas(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  function animationStep(timestamp) {
    if (!startTime) {
      startTime = timestamp;
    }
    const elapsedTime = timestamp - startTime;
    const progress = elapsedTime / duration;
    let currentValue;
    if (isCountdown) {
      currentValue = Math.floor(start - (start - stop) * progress);
    } else {
      currentValue = Math.floor(start + (stop - start) * progress);
    }
    element.textContent = dotCheck ? numberWithCommas(currentValue) : currentValue;
    if (progress < 1) {
      requestAnimationFrame(animationStep);
    } else {
      element.textContent = dotCheck ? numberWithCommas(stop) : stop;
    }
  }
  requestAnimationFrame(animationStep);
}

//////////////////////////////////products_filter

function rangeSlider(obj) {
  let elem = obj.elem;
  let $range = elem.find('.js-range-slider');
  let $inputFrom = elem.find('.js-input-from') || null;
  let $inputTo = elem.find('.js-input-to') || null;
  let min = obj.min;
  let max = obj.max;
  let from = obj.min;
  let to = obj.max;

  $range.ionRangeSlider({
    skin: 'round',
    type: 'double',
    min: obj.min,
    max: obj.max,
    // from: 200,
    // to: 800,
    hide_from_to: true,
    hide_min_max: true,
    onStart: updateInputs,
    onChange: updateInputs,
    onFinish: updateInputs,
  });

  let instance = $range.data('ionRangeSlider');

  $('.sideBox .resetBtn').on('click', function (e) {
    e.preventDefault();
    $('.sideBox input:checkbox').removeAttr('checked');
    instance.reset();
    $inputFrom
      ? $inputFrom.attr({
          value: obj.min,
        })
      : '';
    $inputTo
      ? $inputTo.attr({
          value: obj.max,
        })
      : '';
  });

  function updateInputs(data) {
    from = data.from;
    to = data.to;

    $inputFrom
      ? $inputFrom.attr({
          value: from,
        })
      : '';
    $inputTo
      ? $inputTo.attr({
          value: to,
        })
      : '';
  }

  if ($inputFrom) {
    $inputFrom.on('input', function () {
      var val = $(this).prop('value');

      // validate
      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val,
      });

      $(this).prop('value', val);
    });
  }

  if ($inputTo) {
    $inputTo.on('input', function () {
      var val = $(this).prop('value');

      // validate
      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val,
      });

      $(this).prop('value', val);
    });
  }
}
//////////////////////////////////

(function () {
  $('.sideBox .firstLayer > li > button')
    .off('click')
    .on('click', function () {
      $(this).siblings('.itemBox').slideToggle();
      $(this).parent().siblings('li').find('.itemBox').slideUp();
    });

  $('.sideBox .resetBtn')
    .off('click')
    .on('click', function () {
      document.querySelectorAll('.sideBox .itemBox').forEach((item) => {
        item.reset();
      });
    });
})();

function sideHeight() {
  let windowWidth = $(window).outerWidth();
  if ($('.sideBox .conBox').length > 0) {
    if (windowWidth < setWidth) {
      $('.sideBox .titleBtn').addClass('active');
      $('.sideBox .titleBtn')
        .off('click')
        .on('click', function () {
          $('.sideBox .titleBtn').toggleClass('open');
          $('.sideBox .conBox').toggleClass('open');
          $('.sideBox .conBox').slideToggle();
        });
    } else if (windowWidth > setWidth) {
      $('.sideBox .conBox').attr('style', '');
      let obj = document.querySelector('.sideBox .conBox')?.getBoundingClientRect();
      let windowHeight = $(window).height();
      let objHeight = $('.sideBox .conBox').height();
      $('.sideBox .conBox').css('height', `${windowHeight - obj.top}px`);
    } else {
      $('.sideBox .conBox').slideDown();
      $('.sideBox .titleBtn').off();
      $('.sideBox .titleBtn').removeClass('active');
    }
  }
}

// window.addEventListener('load', (e) => sideHeight());
// window.addEventListener('resize', (e) => sideHeight());
// window.addEventListener('scroll', (e) => sideHeight());

$('.productsFilter .contentOut .selectBox .select').length > 1 ? $('.productsFilter .contentOut .selectBox').addClass('unActive') : null;

$('.productsFilter .contentOut .selectBox').on('click', '.del', function () {
  if ($(this).parent().parent().find('.select').length > 1) {
    $(this).parent().remove();
    $('.productsFilter .contentOut .selectBox .select').length === 1 ? $('.productsFilter .contentOut .selectBox').addClass('unActive') : null;
  }
});
$('.sideBox .contentOut .more').on('click', function () {
  $('.sideBox .contentOut .selectBox').append($('.sideBox .contentOut .selectBox .select').eq(0).clone());
  $('.productsFilter .contentOut .selectBox').removeClass('unActive');
});
// $(window).on('load resize', function () {
//   checkSide();
// });

// function checkSide() {
//   if ($('.sideBox .conBox').length > 0) {
//     let windowWidth = $(window).outerWidth();
//     if (windowWidth > setWidth) {
//       let obj = document.querySelector('.sideBox .conBox')?.getBoundingClientRect();
//       let windowHeight = $(window).height();
//       let objHeight = $('.sideBox .conBox').height();
//       $('.sideBox .conBox').css('height', `${windowHeight - obj.top}px`);
//     }
//   }
// }

// 開啟畫面動態效果
new WOW({
  boxClass: 'wow', // default
  animateClass: 'animated', // default
  offset: 50, // default
  mobile: true, // default
  live: true, // default
}).init();
