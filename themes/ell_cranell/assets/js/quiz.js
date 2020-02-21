jQuery(function($){

  var $quizBtn = $('.quiz__open');

  $quizBtn.click(function(e){
    e.preventDefault();

    var $quiz         = $('<div class="quiz"></div>'),
        $quizInner    = $('<div class="quiz__inner"></div>'),
        $close        = $('<button class="quiz__close icon--close"></button>'),
        $iframe       = $('<iframe src="/haarausfall-test" frameborder="0"></iframe>');


    $('body').append($quiz);
    $quizInner.appendTo($quiz);
    $iframe.appendTo($quizInner);
    $close.appendTo($quizInner);

    $close.click(function(e){
      e.preventDefault();
      $quiz.remove();
    });


  })
});
