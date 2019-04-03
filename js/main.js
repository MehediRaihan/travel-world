(function ($){
    "use strict";
    
    
    //    scrollUp
    
    $(window).scroll(function(){
    if($(this).scrollTop() > 40){
      $('#topBtn').fadeIn();
    } else{
      $('#topBtn').fadeOut();
    }
  });

  $("#topBtn").click(function(){
    $('html ,body').animate({scrollTop : 0},800);
  });
    
    
//    owlCarousel
    
    $('.project-active').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        autoplay:true,
        navText:['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],    
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    
     //    magnificPopup
    
    $('.popup-video').magnificPopup({
  type: 'iframe'
  // other options
});
    


 
	
    
})(jQuery);