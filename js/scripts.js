$(function(){
	$(".tsi-scroll-down").click(function() {
      $('html, body').animate({
          scrollTop: $("#mission-section").offset().top
      }, 1000);
  });
});