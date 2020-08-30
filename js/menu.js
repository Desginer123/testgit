$(function () { 
  $('.menu a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active_hover');
      }
  });
});


$(window).scroll(function(){
  if ($(window).scrollTop() > 500) {
      $('.scroll-to-top').addClass('class2');
  }
  else {
      $('.scroll-to-top').removeClass('class2');
  }
});