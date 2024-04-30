//偵測位置
(function () {
  let options = {};

  let callback = (entries, observer) => {
    entries.forEach((item, index) => {
      if (item.isIntersecting) {
        item.target.classList.add('scrollOver');
        // } else {
      }
    });
  };
  let observer = new IntersectionObserver(callback, options);
  const pic = document.querySelectorAll('.pic');
  pic.forEach((item) => observer.observe(item));
})();

function lightBox(elm) {
  const body = document.querySelector('body');

  const list = document.querySelectorAll(elm);

  list.forEach((s, i) => {
    // 開啟燈箱
    s.addEventListener('click', function (e) {
      const outLightBox = document.createElement('div');
      outLightBox.className = 'outLightBox';
      const lightBox = document.createElement('div');
      lightBox.className = 'lightBox';
      const closeLightBoxBtn = document.createElement('button');
      closeLightBoxBtn.className = 'closeLightBoxBtn';
      lightBox.append(closeLightBoxBtn);
      outLightBox.append(lightBox);
      body.append(outLightBox);

      const imgSrc = s.dataset.src;

      body.classList.add('lightBoxOpen');
      lightBox.innerHTML += `<div class="pageTitle">型號對照表</div><div class="content"><div class="box"><img src="${imgSrc}"/></div></div>`;

      closeLightBoxBtn.addEventListener('click', closeLightBox, false);
      outLightBox.addEventListener('click', closeLightBox, false);
    });
  });

  // 關閉燈箱

  function closeLightBox(e) {
    e.stopPropagation();
    const outLightBox = document.querySelector('.outLightBox');
    const closeLightBoxBtn = document.querySelector('.closeLightBoxBtn');
    if (e.target === outLightBox || e.target === closeLightBoxBtn) {
      body.classList.add('lightBoxClose');
      let closeLightBox = document.querySelector('.lightBoxClose .outLightBox');

      closeLightBox.addEventListener('animationend', closeLightBoxBody);
      function closeLightBoxBody() {
        body.classList.remove('lightBoxClose');
        body.classList.remove('lightBoxOpen');
        outLightBox.remove();
        // 避免開啟燈箱的css動畫影響，每次關閉時清除偵聽
        closeLightBox.removeEventListener('animationend', closeLightBoxBody);
      }
    }
  }
}

// const item = document.querySelectorAll('.about3 .item');
// const pic = document.querySelector('.about3 .pic img');

// item.forEach((i) => {
//   i.addEventListener('click', () => {
//     let src = i.dataset.src;
//     pic.setAttribute('src', src);
//   });
// });
