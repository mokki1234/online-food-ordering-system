// Sort & Filtering
 $('.filters a').click(function(){
   $('.filters a').removeClass('current');
   $(this).addClass('current');

   var selector = $(this).attr('data-filter');
         $('.items').isotope({
             filter: selector,
             animationOptions:{
                 easing: 'linear',
                 duration:1500,
                 queue: false
             }
         });
         return false;
 });
