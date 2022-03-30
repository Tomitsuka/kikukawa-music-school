document.addEventListener('DOMContentLoaded', function(){
   const menuWrap = document.querySelector('.menu_wrap'),
   menuBtn = document.querySelector('.menu_btn'),
   menuLink = document.querySelectorAll('.menu_list a'),
   header = document.querySelector('.header'),
   header_wrap = document.querySelector('.header_wrap'),
   hero_image = document.querySelector('.hero_image'),
   hero_logo = document.querySelector('.hero_logo'),
   scroll_info = document.querySelector('.scroll_info'),
   screenHeight = window.innerHeight,
   headerHeight = header_wrap.clientHeight;

  let flugMenu = true;
  menuBtn.addEventListener('click', function() {
    if(flugMenu){
      openMenu();
    }else{
      closeMenu();
    }
  });

  // var resizeTimer;
  // var interval = Math.floor(1000 / 60 * 10);
  // window.addEventListener('resize', function (event) {
  //   if(!flugMenu){
  //     if (resizeTimer !== false) {
  //       clearTimeout(resizeTimer);
  //     }
  //     resizeTimer = setTimeout(function () {
  //       closeMenu();
  //     }, interval);
  //   }
  // });

  function openMenu(){
    menuBtn.classList.add('on');
    menuBtn.classList.remove("off");
    menuWrap.classList.add('show');
    setTimeout(function() {
      menuWrap.classList.add('on');
    }, 100);
    flugMenu = false;
  }

  function closeMenu(){
    menuBtn.classList.add('off');
    menuBtn.classList.remove("on");
    menuWrap.classList.remove('on');
    setTimeout(function() {
      menuWrap.classList.remove('show');
    }, 400);
    flugMenu = true;
  }

  //scroll
  var scrollFlag = true;
  window.onscroll = function() {
    var scrollOffset = window.innerHeight - headerHeight;
    scroll(scrollOffset);
  };

  var scroll = function(scrollOffset){
    var y = window.pageYOffset ;
    if (y >= scrollOffset && scrollFlag) {
      header.classList.add('on');
      menuWrap.classList.add('on-pc');
      scrollFlag = false;
    }else if(y <= scrollOffset && !scrollFlag){
      header.classList.remove('on');
      menuWrap.classList.remove('on-pc');
      scrollFlag = true;
    }
    // scrollImage(y,scrollOffset);
  }

  function scrollImage(y,scrollOffset){
    var translate = (window.pageYOffset * 0.1) ;
    var translate2 = (window.pageYOffset * 0.05) ;
    if (y <= scrollOffset) {
      // console.log(y , translate);
      hero_image.setAttribute("style", "transform: translate(0, -"+translate+"px);");
      hero_logo.setAttribute("style", "transform: translate(0, -"+translate2+"px);");
    }
  }


  // function heroFade(){
  //   hero_logo.classList.add('on');
  //   hero_image.classList.add('on');
  //   menuWrap.classList.add('fadein');
  //   scroll_info.classList.add('fadein');
  // }

  // var images = document.getElementsByTagName('img');
  // for (var i = 0; i < images.length; i++) {
  //   var img = new Image();
  //   img.onload = function() {
  //     heroFade();
  //   }
  //   img.src = images[i].src;
  // }

  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  var swiper = new Swiper(".chigasakiSwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".chigasakiSwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  var swiper = new Swiper(".recitalSwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".recitalSwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
});


