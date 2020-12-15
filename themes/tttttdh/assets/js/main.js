

$('.slider__big').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay: true,
  autoplaySpeed: 3000,
  asNavFor: '.slider__mini',

});
$('.slider__mini').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider__big',
  dots: false,
  vertical: true,
  centerMode: false,
  focusOnSelect: true,
  verticalSwiping: true,
  adaptiveHeight: true,
  arrows: false,
  prevArrow: false,
  nextArrow: false
});

// ------------------------------------------
function mobileOnlySlider() {
  $('#rowGrid').slick({
    dots: false,
    infinite: true,
    // arrows:true,
    centerMode: true,
    lazyLoad: 'ondemand',
    speed: 300,
    cssEase: 'ease-in-out',
    touchThreshold: 100,
    fade: true,
    adaptiveHeight: true,
    settings: "unslick",
    prevArrow: $('.btn__prev'),
    nextArrow: $('.btn__next'),
    accesibility: false,
    draggable: true,
    swipe: true,
    touchMove: true,
    slidesToShow: 1
  });
}
if (window.innerWidth < 1190) {
  mobileOnlySlider();
}
$(window).resize(function (e) {
  if (window.innerWidth < 1190) {
    if (!$('#rowGrid').hasClass('slick-initialized')) {
      mobileOnlySlider();
    }

  } else {
    if ($('#rowGrid').hasClass('slick-initialized')) {
      $('#rowGrid').slick('unslick');
    }
  }
});
// -----------------------------------------------------


//   let mobileList = document.getElementById("mobileList");
//   let mobileListContent = document.getElementById("mobileListContent");
//   let mobileListBtn = document.getElementById("mobileListBtn");
//   let mobileListClose = document.getElementById("mobileListClose");
//   mobileListBtn.onclick = function() {
//       mobileList.style.width = "100%";
//       mobileListContent.style.right = "0";
//       disable.scroll
//   }
//   mobileListClose.onclick = function() {
//       mobileList.style.width = "0";
//       mobileListContent.style.right = "-80%";
//   }
//   window.onclick = function(event) {
//       if (event.target == mobileList) {
//           mobileList.style.width = "0";
//           mobileListContent.style.right = "-80%";
//       };
//   }

//   For fixed titles







function showFunction() {
  document.getElementById("dropDown").classList.toggle("show");
  document.getElementById("ham1").classList.toggle("white");
  document.getElementById("ham2").classList.toggle("white");
}
window.onload = function () {

  const menuBtn = document.querySelector('.ham');
  let menuOpen = false;
  menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
      menuBtn.classList.add('open');

      menuOpen = true;
    } else {
      menuBtn.classList.remove('open');

      menuOpen = false;
    }
  });


  // document.querySelector('nav__header').addEventListener('click',
  //   function (e) {
  //     console.log("container clicked");

  //     document.getElementById("dropDown").classList.remove('show');
  //     document.querySelector('.ham').classList.remove('open')
  //   }
  // )
};
