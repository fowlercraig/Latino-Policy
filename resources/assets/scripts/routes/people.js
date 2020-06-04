export default {
  init() {

    $(window).scroll(function() {

      // selectors
      var $window = $(window),
      $body = $('body'),
      $panel = $('.panel');

      // Change 33% earlier than scroll position so colour is there when you arrive.
      var scroll = $window.scrollTop() + ($window.height() / 3);

      $panel.each(function () {
      var $this = $(this);

      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match (/(^|\s)bg-\S+/g) || []).join(' ');
      });

      // Add class of currently active div
      $body.addClass('bg-' + $(this).data('color'));
      }

    });    
  
}).scroll();

//    var
//      $color1 ='bg-brand-lightest',
//      $color2 ='bg-brand-lighter',
//      $color3 ='bg-brand-light',
//      $color4 ='bg-brand';
//
//    $('body').addClass('transition duration-500');
//
//    $('#section-staff').on('activate.checkpoint', function(){
//      $('body').addClass($color1+' '+ $color2);
//    });  
//
//    $('#section-fellows').on('activate.checkpoint', function(){
//      $('body').removeClass($color1+' '+ $color3);
//      $('body').addClass($color2);
//    });  
//
//    $('#section-experts').on('activate.checkpoint', function(){
//      $('body').removeClass($color2+' '+ $color4);
//      $('body').addClass($color3);
//    });  
//
//    $('#section-advisory-board').on('activate.checkpoint', function(){
//      $('body').removeClass($color3);
//      $('body').addClass($color4);
//    });  

  },
};
