$(function() {
    $('.mv').click(function() {
    alert(2);
  });
});

//for ipad
var ua = navigator.userAgent;
var getDevice = (function() {
if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
document.write('<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">');
} else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
document.write('<meta name="viewport" content="width=1280, user-scalable=no, maximum-scale=1.0">');
} else {
document.write('<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">');
}
})();

$(function() {

//vars
var flug = true,
    $window = $(window),
    $pageTop = $('.pageTop');

//scroll
$window.scroll(function(){
  if(flug){
    flug = false;
    setTimeout(function(){
        if($(this).scrollTop() > 500){
            $pageTop.fadeIn(100);
        }else{
            $pageTop.fadeOut(100);
        }
      flug = true;
      return flug;
    }, 500);
  }
});//scroll

//$window.trigger('scroll');


//pagetop
$pageTop.click(function(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: 0}, 200, 'swing');
});


//mappageMAP杉本さん
$('.wrap').on('click', '.itemLi dt', function() {
    $(this).siblings('.itemRight').slideToggle();
    $(this).toggleClass('on');
});

//mappageMAP相原
$('.wrap').on('click', '.itemsearch_right .ttl01 , .mapWrap .ttl01', function(){
    if ($(window).width() < 768) {
        $(this).next().children().slideToggle();
        $(this).toggleClass('on');
    }
});


$window.on('scroll',function(){
  $('.recommend .box').each(function(){
      var imgPos = $(this).offset().top;    
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight / 3){
        $(this).addClass('is-active');
      } else {
        $(this).removeClass('is-active');
      }
  });
});

});//ready