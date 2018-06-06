 //header fade out

(function($){

  $(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if(scroll > 600){
      
      $("#header").addClass("sticky");
      $(".menu").addClass("sticky-font");
      $(".logo").addClass("sticky-font");
      //$(".active").addClass("sticky-act");

    }
    else {
      
       $("#header").removeClass("sticky");
        $(".menu").removeClass("sticky-font");
        $(".logo").removeClass("sticky-font");
        //$(".active").addClass("sticky-act");
    }

  });

  //menu mobile

  $('.menu-icon').click(function(){
    $(this).toggleClass('fa-bars fa-close');
    $('.main-menu').slideToggle();
  });

  //hero

   $(".hero").css({"height":$(window).height() + "px" });

})(jQuery);