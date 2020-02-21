jQuery(function($) {

  $('.kontaktformular .js-form-item input, .kontaktformular .js-form-item textarea').each(function(){
    var $input  = $(this),
        $widget = $input.parents('.js-form-item');
    $input.focusin(function(){
      $widget.addClass('widget-focus');
    }).focusout(function(){
      $widget.removeClass('widget-focus');
    });
    $input.keyup(function(e){
      if($(this).val().length){
        $widget.addClass('widget-content');
      }else{
        $widget.removeClass('widget-content');
      }
    })
  });

  $('.hero-video').each(function(){
    var $hero  = $(this),
        $video = $hero.find('video');

        $video.attr('playsinline', '');
  })



  $("input[type=checkbox],input[type=radio], input[type=text], input[type=email], textarea").uniform({});

  // $('.owl-carousel').owlCarousel({
  //   dots: false,
  //   loop: true,
  //   items: 1,
  //   0:{
  //     items:1,
  //     nav:false,
  //   },
  //   600:{
  //     items:3,
  //     nav:true,
  //   },
  // });
});
