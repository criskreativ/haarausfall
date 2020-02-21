jQuery(function($){
  var $menu = $('#block-navigationprimary'),
      $lvl2 = $menu.find('ul.level_2'),
      $lvl3 = $menu.find('ul.level_3');

  $lvl2.each(function(){
    var $_lvl2 = $(this),
        $items = $_lvl2.children().filter('.submenu');
    if($items.length == 1){
      $_lvl2.addClass('level_2-wide')
    }
  });
  $lvl3.each(function(){
    var $_lvl3 = $(this),
        $items = $_lvl3.children();

    if($items.length > 5){
      $_lvl3.parents('ul.level_2 > li').addClass('submenu-long')
    }
  });


  //
  // $('.menu--navigation-primary').each(function(){
  //   var $menu     = $(this),
  //       $wirkung  = $menu.find('ul.level_1>li:nth-child(2) a');
  //
  //   $wirkung.addClass('wirkung_btn');
  //
  //   $wirkung.attr({
  //     href: "ell-cranell#wirkt"
  //   });
  // });


  // $('.wirkung_btn').click(function(e){
  //   if('#wirkt'){
  //     $('html, body').animate({scrollTop:$('#wirkt').offset().top - 300}, 1000);
  //     $('html, body').removeClass('nav-open');
  //   }
  // });


});
