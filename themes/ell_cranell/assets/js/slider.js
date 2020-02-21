jQuery(function($){
  $('.slider-rating').each(function(){
    var $slider = $(this),
        $item   = $slider.find('.slider-rating__item .field__items');

    if($slider){
      $item.addClass('slider-rating-slider owl-carousel');
    };
  });


  $('.slider-rating-slider').owlCarousel({
    dots: false,
    loop: true,
    nav:true,
    margin: 5,
    responsive: {
      0:{
         items: 1,
         center: true,
      },
      620:{
        items: 2,
        center: false,
      },
      880:{
        items: 3,
      },
    },
  });


  $('.hero-slider-slider').owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    nav: false
  });





});
