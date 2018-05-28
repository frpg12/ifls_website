           $(document).ready(function() {
 
var offset = 400;
 
var duration = 800;

if ($(window).scrollTop() > 0 ) {
 
$(".toTop").show();
 
}
 
$(window).scroll(function() {

 
if ($(this).scrollTop() > offset) {
 
$(".toTop").fadeIn(duration);
 
} else {
 
$(".toTop").fadeOut(duration);
 
}
 
});
 
 
 
$(".toTop").click(function(event) {
 
event.preventDefault();
 
$("html, body").animate({scrollTop: 0}, duration);
 
 
});
 




        function checkFadeOut(){
        var top_of_window =  $(window).scrollTop();
        var bottom_of_window = top_of_window + $(window).height();

        //fade-in
            var top_of_object = $(".divisions").position().top;
            var object_height = $(".divisions").outerHeight();
            var bottom_of_object = top_of_object + object_height;
            var top_scroll_object = top_of_object + (object_height * 0.2);
            var bottom_scroll_object = top_of_object + (object_height * 0.8);

        if( ((bottom_of_window >= bottom_scroll_object) && (top_of_window<=top_scroll_object)) ){
              $.each($('.fade-down'), function(i, el){

                         setTimeout(function(){
                              $(el).addClass('showing');
                         },( i * 500 ));

                });
            }
        };

        checkFadeOut();
        $(window).scroll( function(){
            checkFadeOut();

    });


$(".searchExpand").on("click", function(event) {
   $(".formSearch, #search, #search_submit").addClass("active");
    $("#search").removeClass("hideSearch");
  


  $(document).on('click', function(event) {
          if (!$(event.target).closest('.formSearch').length)  {
             $(".formSearch, #search, #search_submit").removeClass("active");
             var hide = setInterval(function(){                      
                if ($("#search").width() < 1)  {
                    $("#search").addClass("hideSearch");  
                    clearInterval(hide);
                  };
                },(120));
                };
  });
  });

   $('.yt').on('click', function() {
    $(this).html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + $(this).attr('code') + '?autoplay=0" frameborder="0" allowfullscreen></iframe>').css('background', 'none');
}); 




var owl = $(".owl-carousel")
owl.owlCarousel({
    loop:false,
    margin: 30,
    responsiveBaseElement:".owl-carousel",
    responsive:{
        0:{
            items:1
        },
        430:{
            items:2
        },
        660:{
            items:3
        },
        890:{
            items:4
        },
        1120:{
            items:5
        },
        1350:{
            items:6
        }
    }
});
 
    
  // Custom Navigation Events
  $(".latestPostNavRight").click(function(){
    owl.trigger('next.owl.carousel');
  });
  $(".latestPostNavLeft").click(function(){
    owl.trigger('prev.owl.carousel');
  });
 
 
   });