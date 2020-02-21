jQuery.fn.videoSize = function(){
  jQuery(this).each(function(){
    var $fullsize = jQuery(this),
        $video    = $fullsize.find('video');

    $video.removeAttr('style');

    if($video.height() == null || $video.width() == null){
      var checkvideo = setInterval(function(){
        $video    = $fullsize.find('video');
        if($video.height() != null && $video.width() != null){
          $fullsize.videoSize();
          clearInterval(checkvideo);
        }
      },10);
    }

    if(jQuery(window).width() < 600){
      if($fullsize.width() < $video.width() && $fullsize.height() < $video.height()){
        var format = $video.height() / $video.width();

        if($fullsize.width() * format < $fullsize.height()){
          $video.height($fullsize.height());
          $video.width($fullsize.height() / format);
        }else{
          $video.width($fullsize.width());
          $video.height($fullsize.width() * format);
        }
      }
    }
  });
}
jQuery.fn.headerbackground = function(mode){
  var $background = $(this),
      source      = $background.attr('data-'+mode),
      $video      = jQuery('<video autoplay loop preload muted playsinline></video>'),
      sources     = [];

  sources.push(jQuery('<source src="assets/videos/'+source+'.mp4" type="video/mp4">'));
  sources.push(jQuery('<source src="assets/videos/'+source+'.ogv" type="video/ogg">'));
  sources.push(jQuery('<source src="assets/videos/'+source+'.webm" type="video/webm">'));

  jQuery.each(sources,function(k,v){
    v.appendTo($video);
  });
  $background.empty();
  $video.appendTo($background);
};


var headermode = false;
jQuery(window).bind('load resize',function(){
  jQuery('.videoswitch').videoSize();

  var mode = 'mobile';
  if(jQuery(window).width() > 721){
    mode = 'desktop';
  }
  if(mode !== headermode){
    headermode = mode;
    jQuery('.videoswitch').each(function(){
      jQuery(this).headerbackground(mode);
    });
  }
});
//
