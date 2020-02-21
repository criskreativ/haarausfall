jQuery(function(){
  var $navigation = jQuery('.navigation-mobile'),
      $submenu    = $navigation.find('ul:not(.level_1)'),
      $sublink    = $navigation.find('div.submenu'),
      level       = 0;

  $submenu.each(function(){
    var $menu   = jQuery(this),
        $parent = $menu.parent(),
        $main   = $parent.children('a');

    $menu.prepend('<li class="navigation-mobile__headline">'+$main.text()+'</li>');
    $menu.prepend('<li class="navigation-mobile__back"><a href="#" class="navigation-mobile__back">Hauptmenü</a></li>');
  });

  jQuery('a.navigation-mobile__back').click(function(e){
    e.preventDefault();
    level--;
    level = Math.max(0,level);
    var removeStyle = false;
    // get height
    if(level == 0){
      var heightNew = $navigation.find('ul.level_1').outerHeight() + jQuery('.mobile-popup').find('.navigation-mobile-extra').outerHeight(),
          heightOld = jQuery(this).parents('ul').first().height();
      removeStyle = true;
    }else{
      var heightNew = jQuery(this).parents('ul').first().parents('ul').first().height(),
          heightOld = jQuery(this).parents('ul').first().height();
    }
    var tempHeight = Math.max(heightNew,heightOld);
    jQuery('.mobile-popup__navigation__inner').height(tempHeight);
    setTimeout(function(){
      if(removeStyle){
        jQuery('.mobile-popup__navigation__inner').removeAttr('style');
      }else{
        jQuery('.mobile-popup__navigation__inner').height(heightNew);
      }
    },300);

    // classes
    jQuery('.mobile-popup').attr('class',jQuery('.mobile-popup').attr('class').replace(/mobile-popup--level_[0-9]+/,'').trim());
    jQuery('.mobile-popup').addClass('mobile-popup--level_'+level);
    jQuery(this).parents('li.navigation-mobile__active').first().removeClass('navigation-mobile__active');
  });

  $sublink.click(function(e){
    e.preventDefault();
    level++;

    if(level == 1){
      var heightNew = jQuery(this).parent().find('ul').first().height(),
          heightOld = $navigation.find('ul.level_1').outerHeight();
    }else{
      var heightNew = jQuery(this).parent().find('ul').first().height(),
          heightOld = jQuery(this).parents('ul').first().height();
    }
    var tempHeight = Math.max(heightNew,heightOld);
    jQuery('.mobile-popup__navigation__inner').height(tempHeight);
    setTimeout(function(){
      jQuery('.mobile-popup__navigation__inner').height(heightNew);
    },300);

    jQuery('.mobile-popup').attr('class',jQuery('.mobile-popup').attr('class').replace(/mobile-popup--level_[0-9]+/,'').trim());
    jQuery('.mobile-popup').addClass('mobile-popup--level_'+level);
    jQuery(this).parents().addClass('navigation-mobile__active');
  });

  jQuery('.mobile-popup__close').click(function(e){
    jQuery('.mobile-popup').attr('class',jQuery('.mobile-popup').attr('class').replace(/mobile-popup--level_[0-9]+/,'').trim());
    jQuery('.mobile-popup').find('li.navigation-mobile__active').removeClass('navigation-mobile__active');
    jQuery('.mobile-popup__navigation__inner').removeAttr('style');
    level = 0;
  });

  jQuery('.burger').click(function(){
    jQuery('body').addClass('nav-open');
  });
  jQuery('.mobile-popup__close').click(function(){
    jQuery('body').removeClass('nav-open');
  });
});
