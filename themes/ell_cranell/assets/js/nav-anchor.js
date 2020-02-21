jQuery(function($){
  var $paragraphMain = $('.field--name-field-paragraphs-main, .field--name-field-all-design-body'),
      $textDefault   = $paragraphMain.find('.text-default');


  var items = [];
  $textDefault.each(function(){
    var $item = $(this),
        id    = $item.attr('id');
        title = $item.attr('data-titlenav');

    if(id){
      items.push([id,title]); 
    }
  });
  if(items.length){
    var $nav = $('<nav id="nav-anchor" class="nav-anchor"></nav>'),
        $list = $('<ul></ul>');


    $.each(items,function(k,v){
      var $item   = $('<li><a href="#'+v[0]+'"><span>'+v[1]+'</span></a></li>');

      $item.find('a').click(function(e){
        e.preventDefault();

        var top = $('#'+v[0]).offset().top - $(window).height()/2 + 60;

        $('html,body').animate({'scrollTop':top});

      })
      $item.appendTo($list);
    })
    $list.appendTo($nav);
    $nav.appendTo($('body'));
  }
});


jQuery(function($){
  var $navAnchor = $('.nav-anchor');
  $(window).bind('resize load scroll',function(){
    $navAnchor.find('ul li a').each(function(){
      var $link   = $(this),
      link    = $link.attr('href'),
      anchor  = link.split('#');
      if(typeof anchor[1] == typeof undefined){
        return;
      }
      var $element  = $('#'+anchor[1]),
      top       = $element.offset().top,
      bottom    = top + $element.height();

      var wtop      = $(window).scrollTop() + $(window).height()/2;
      if(wtop >= top){
        $link.addClass('is-post');
      }else{
        $link.removeClass('is-post');
      }
      if(wtop >= top && wtop < bottom){
        $link.addClass('is-active');
      }else{
        $link.removeClass('is-active');
      }
    })
  });
});
